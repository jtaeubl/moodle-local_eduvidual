<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    local_eduvidual
 * @copyright  2020 Center for Learning Management (https://www.lernmanagement.at)
 * @author     Robert Schrenk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_eduvidual;

defined('MOODLE_INTERNAL') || die;

class lib_wshelper {
    public static $navbar_nodes = array();
    private static $debug = false;
    /**
     * Recognizes the result of a certain script and registers an output buffer for it.
     */
    public static function buffer() {
        global $CFG;
        self::$debug = ($CFG->debug == 32767); // Developer debugging
        $func = str_replace('__', '_', 'buffer_' . str_replace('/', '_', str_replace('.php', '', str_replace($CFG->dirroot, '', $_SERVER["SCRIPT_FILENAME"]))));
        if (method_exists(__CLASS__, $func)) {
            if (self::$debug) error_log('Buffer function ' . $func . ' called');
            ob_start();
            register_shutdown_function('\local_eduvidual\lib_wshelper::buffer_modify');
        } else {
            if (self::$debug) error_log('Buffer function ' . $func . ' not found');
            return false;
        }
    }
    /**
     * Determines the appropriate handler-method for this output buffer.
     */
    public static function buffer_modify() {
        global $CFG;
        $buffer = ob_get_clean();
        $func = str_replace('__', '_', 'buffer_' . str_replace('/', '_', str_replace('.php', '', str_replace($CFG->dirroot, '', $_SERVER["SCRIPT_FILENAME"]))));
        call_user_func('self::' . $func, $buffer);
    }
    public static function buffer_navbar() {
        global $OUTPUT;
        $buffer = ob_get_clean();
        $strstart = '<ol class="breadcrumb"';
        $strend = '</ol>';
        $posstart = strpos($buffer, $strstart);
        $posend = strpos($buffer, $strend, $posstart);

        $parts = array(
            substr($buffer, 0, $posstart),
            substr($buffer, $posstart, $posend-$posstart+strlen($strend)),
            substr($buffer, $posend+strlen($strend))
        );
        if (!empty($parts[0]) && !empty($parts[1]) && !empty($parts[2])) {
            $parts[1] = $OUTPUT->render_from_template('core/navbar', array('get_items' => self::$navbar_nodes));
        }
        echo implode($parts);
    }
    /**
     * Modifies the output of particular webservice calls.
     * @param classname Classname of the ws.
     * @param methodname The wsfunction-name.
     * @param params The params for this wsfunction.
    **/
    public static function override($classname, $methodname, $params) {
        global $CFG;
        self::$debug = ($CFG->debug == 32767); // Developer debugging
        $func = 'override_' . $classname . '_' . $methodname;
        if (method_exists(__CLASS__, $func)) {
            if (self::$debug) error_log('Overide function ' . $func . ' called');
            $result = call_user_func_array(array($classname, $methodname), $params);
            return call_user_func('self::' . $func, $result, $params);
        } else {
            if (self::$debug) error_log('Overide function ' . $func . ' not found');
            return false;
        }
    }



    /**
     * These are the buffer-functions, that should OUTPUT something using echo.
     * Function names reveal the php-script buffer_ + php-script-path
     */
    private static function buffer_question_category($buffer) {
        global $DB, $USER;

        $managed_qcats = explode(",", get_config('local_eduvidual', 'questioncategories'));

        $strstart = '<section id="region-main"';
        $strend = '</section>';
        $posstart = strpos($buffer, $strstart);
        $posend = strpos($buffer, $strend, $posstart);

        $parts = array(
            substr($buffer, 0, $posstart),
            substr($buffer, $posstart, $posend-$posstart+strlen($strend)),
            substr($buffer, $posend+strlen($strend))
        );
        if (!empty($parts[1])) {
            $removeList = array();
            $parts[1] = mb_convert_encoding($parts[1], 'HTML-ENTITIES', "UTF-8");
            $doc = \DOMDocument::loadHTML($parts[1], LIBXML_NOWARNING | LIBXML_NOERROR);

            $divs = $doc->getElementsByTagName('div');
            foreach ($divs as $div) {
                $classnames = explode(' ', $div->getAttribute('class'));
                if (!in_array('questioncategories', $classnames) && in_array('contextlevel10', $classnames)) continue;

                $uls = $div->childNodes;
                foreach ($uls as $ul) {
                    if ($ul->nodeName != 'ul') continue;
                    $lis = $ul->childNodes;
                    $removeList = array();

                    foreach ($lis AS $li) {
                        if ($li->nodeName != 'li') continue;
                        $break = false;
                        $as = $li->childNodes;
                        foreach ($as AS $a) {
                            if ($a->nodeName != 'a') continue;
                            $params = array();

                            $url = parse_url($a->getAttribute('href'));
                            parse_str($url['query'], $params);
                            if (!empty($params['edit'])) {
                                $catid = intval($params['edit']);
                                if (!in_array($catid, $managed_qcats)) {
                                    $remove = false;
                                } else {
                                    $chk = $DB->get_record('local_eduvidual_userqcats', array('userid' => $USER->id, 'categoryid' => $catid));
                                    if (empty($chk->id)) {
                                        $removeList[] = $li;
                                    }
                                }
                                $break = true;
                            }
                            if ($break) break;
                        }
                        if ($break) break;
                    }
                }
            }

            // Now remove the nodes.
            foreach($removeList AS $option) {
                $option->parentNode->removeChild($option);
            }

            $parts[1] = $doc->saveHTML();
            $buffer = implode($parts);
        }

        self::buffer_question_edit($buffer);
    }
    private static function buffer_question_edit($buffer) {
        global $DB, $USER;

        $managed_qcats = explode(",", get_config('local_eduvidual', 'questioncategories'));

        $strstart = '<optgroup label="' . get_string('coresystem') . '">';
        $strend = '</optgroup>';
        $posstart = strpos($buffer, $strstart);
        $posend = strpos($buffer, $strend, $posstart);


        $parts = array(
            substr($buffer, 0, $posstart),
            substr($buffer, $posstart, $posend-$posstart+strlen($strend)),
            substr($buffer, $posend+strlen($strend))
        );

        if (!empty($parts[0]) && !empty($parts[1]) && !empty($parts[2])) {
            $parts[1] = mb_convert_encoding($parts[1], 'HTML-ENTITIES', "UTF-8");
            $doc = new \DOMDocument();
            $doc->loadHTML($parts[1], LIBXML_NOWARNING | LIBXML_NOERROR);

            $options = $doc->getElementsByTagName('option');

            $remove = false;
            $removeList = array();
            for ($a = 0; $a < $options->length; $a++) {
                $label = $options->item($a)->nodeValue;
                $label2 = ltrim($label, " \t\n\r\0\x0B\xC2\xA0");
                $depth = (strlen($label) - strlen($label2))/6;
                if ($depth == 1) { // This is a core category.
                    $value = explode(',', $options->item($a)->getAttribute('value'));
                    if (!empty($value[0])) {
                        $catid = $value[0];
                        if (!in_array($catid, $managed_qcats)) {
                            $remove = false;
                        } else {
                            $chk = $DB->get_record('local_eduvidual_userqcats', array('userid' => $USER->id, 'categoryid' => $catid));
                            $remove = empty($chk->id);
                        }
                    }
                }
                if ($remove) {
                    $removeList[] = $options->item($a);
                }
            }
            // Now remove the nodes.
            foreach($removeList AS $option) {
                $option->parentNode->removeChild($option);
            }

            $parts[1] = $doc->saveHTML();
            $buffer = implode($parts);
        }

        echo $buffer;
    }
    private static function buffer_user_selector_search($buffer) {
        $result = json_decode($buffer);
        if (!empty($result->results)) {
            if (!empty($result->results[0]->users)) {
                $result->results[0]->users = \local_eduvidual\locallib::filter_userlist($result->results[0]->users, 'id', 'name');
            }
        }
        echo json_encode($result, JSON_NUMERIC_CHECK);
    }
    private static function buffer_web_lib_ajax_getnavbranch($buffer) {
        $result = json_decode($buffer);
        $orgs = \local_eduvidual\locallib::get_organisations('*');
        $categories = array();
        foreach($orgs AS $org) {
            $categories[] = $org->categoryid;
        }
        $result->categories = $categories;
        if (isset($result->children)) {
            foreach (array_keys($result->children) AS $key) {
                if (!in_array($result->children[$key]->key, $categories)) {
                    unset($result->children[$key]);
                }
            }
            $result->children = array_values($result->children);
        }
        echo json_encode($result, JSON_NUMERIC_CHECK);
    }

    /**
     * These are the override-functions, that should RETURN something like the result of ws requests.
     */
    private static function override_block_exacomp_diggr_get_students_of_cohort($result, $params) {
        if (self::$debug) error_log(print_r($result, 1));
        return $result;
    }

    private static function override_core_calendar_external_get_calendar_action_events_by_timesort($result, $params) {
        global $DB;

        if (!empty($result->events)) {
            foreach ($result->events AS $id => &$event) {
                $event->course->showshortname = false;
                $event->course->fullnamedisplay = $event->course->fullname;
            }
        }
        return $result;
    }
    private static function override_core_cohort_add_cohort_members($result, $params) {
        if (self::$debug) error_log(print_r($result, 1));
        return $result;
    }
    private static function override_core_cohort_search_cohorts($result, $params) {
        if (self::$debug) error_log(print_r($result, 1));
        return $result;
    }
    private static function override_core_course_external_get_enrolled_courses_by_timeline_classification($result, $params) {
        global $DB;
        if (!empty($result['courses'])) {
            foreach ($result['courses'] AS $id => &$course) {
                if ($id == 0) {
                    // We attempted to inject some code that modifies the layout and functionality of the course cards.
                    // Integration of the course news turned out to be impossible since Moodle 3.7 (refer to https://github.com/moodleuulm/moodle-block_course_overview_campus/issues/35)
                    // But we may keep this for other implementations, like the "upload course image popup" or similar.
                    //$course->fullname .= "<script> require(['local_eduvidual/jsinjector'], function(jsi) { jsi.dashboardCourseLoaded(); } ); </script>";
                }
                $course->showshortname = false;
                // We do not want to show the progress bar.
                $course->hasprogress = false;
                $context = \context_course::instance($course->id);
                $path = explode('/', $context->path);
                $coursecategory = array();
                for ($a = 2; $a < count($path) -1; $a++) {
                    $ccontext = $DB->get_record('context', array('id' => $path[$a]));
                    $category = $DB->get_record('course_categories', array('id' => $ccontext->instanceid));
                    $coursecategory[] = $category->name;
                    break;
                }
                $course->coursecategory = implode(' > ', $coursecategory);
            }
        }
        return $result;
    }
    private static function override_core_enrol_external_get_potential_users($result, $params) {
        return \local_eduvidual\locallib::filter_userlist($result, 'id', 'fullname');
    }
    private static function override_core_external_get_fragment($result, $params) {
        global $DB, $USER;
        if (!empty($params[0]) && $params[0] == 'mod_quiz' && !empty($params[1]) && $params[1] == 'quiz_question_bank') {
            $managed_qcats = explode(",", get_config('local_eduvidual', 'questioncategories'));
            $utf8converted = mb_convert_encoding($result['html'], 'HTML-ENTITIES', "UTF-8");
            $doc = \DOMDocument::loadHTML($utf8converted, LIBXML_NOWARNING | LIBXML_NOERROR);

            $optgroups = $doc->getElementsByTagName('optgroup');
            $options = $optgroups->item($optgroups->length-1)->getElementsByTagName('option');
            $remove = false;
            $removeList = array();
            for ($a = 0; $a < $options->length; $a++) {
                $label = $options->item($a)->nodeValue;
                $label2 = ltrim($label, " \t\n\r\0\x0B\xC2\xA0");
                $depth = (strlen($label) - strlen($label2))/6;
                if ($depth == 1) { // This is a core category.
                    $value = explode(',', $options->item($a)->getAttribute('value'));
                    if (!empty($value[0])) {
                        $catid = $value[0];
                        if (!in_array($catid, $managed_qcats)) {
                            $remove = false;
                        } else {
                            $chk = $DB->get_record('local_eduvidual_userqcats', array('userid' => $USER->id, 'categoryid' => $catid));
                            $remove = empty($chk->id);
                        }
                    }
                }
                if ($remove) {
                    $removeList[] = $options->item($a);
                }
            }
            // Now remove the nodes.
            foreach($removeList AS $option) {
                $option->parentNode->removeChild($option);
            }
            $result['html'] = $doc->saveHTML();
        }
        return $result;
    }

    /* THIS WSFUNCTION IS MARKED AS OBSOLETE. WE KEEP IT IF OLDER PLUGINS STILL USE IT */
    private static function override_core_message_data_for_messagearea_search_users($result, $params) {
        if (!empty($result->data[0]->noncontacts)) {
            $result->data[0]->noncontacts = \local_eduvidual\locallib::filter_userlist($result->data[0]->noncontacts, 'userid', 'fullname');
        }
        return $result;
    }

    private static function override_core_message_message_search_users($result, $params) {
        if (self::$debug) error_log(print_r($result, 1));
        return $result;
    }
    private static function override_core_message_search_contacts($result, $params) {
        if (self::$debug) error_log(print_r($result, 1));
        return $result;
    }
    private static function override_core_search_get_relevant_users($result, $params) {
        if (self::$debug) error_log(print_r($result, 1));
        return $result;
    }
    private static function override_core_user_get_users($result, $params) {
        if (self::$debug) error_log(print_r($result, 1));
        return $result;
    }
    private static function override_tool_lp_search_cohorts($result, $params) {
        if (self::$debug) error_log(print_r($result, 1));
        return $result;
    }
    private static function override_tool_lp_search_users($result, $params) {
        if (self::$debug) error_log(print_r($result, 1));
        return $result;
    }
}
