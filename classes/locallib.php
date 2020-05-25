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
 * @package    block_eduvidual
 * @copyright  2020 Center for Learning Management (https://www.lernmanagement.at)
 * @author     Robert Schrenk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_eduvidual;

defined('MOODLE_INTERNAL') || die;

class locallib {
    /**
     * Determines if a user is in the same org like another user
     * @param touserid UserID we want to check if we are connected to
     * @param orgids (optional) List of possible orgs, if empty list we use all orgs the srcuser is member of
     * @param srcuserid (optional) User we want to check, if not given use the current logged in user
     * @return Returns true if connected, false if not connected
    **/
    public static function is_connected($touserid, $orgids = array(), $srcuserid = 0) {
        global $DB, $USER;
        if ($srcuserid == 0) {
            $srcuserid = $USER->id;
        }
        if (count($orgids) == 0) {
            $orgids = self::is_connected_orglist($srcuserid);
        }
        $sql = "SELECT userid
                    FROM {block_eduvidual_orgid_userid}
                    WHERE userid=?
                        AND orgid IN (?)";
        $params = array($touserid, implode(',', $orgids));
        $chks = $DB->get_records_sql($sql, $params);
        foreach ($chks AS $chk) {
            if (!empty($chk->userid) && $chk->userid == $touserid) {
                return true;
            }
        }
        return false;
    }
    /**
     * Filters a list of users if they are connected to a list of orgs.
     * If called by admin all users will be listed, but filtered users
     * are appended by a strut before their fullname.
     * @param users array of users.
     * @param orgids orgids to check if they are member of.
     * @return list of filtered users.
     */
    public static function is_connected_filter($users, $orgids) {
        $filtered = array();
        foreach ($users AS $user) {
            if (self::is_connected($user->id, $orgids)) {
                $filtered[] = $user;
            } elseif (self::get('role') == 'Administrator') {
                if (!empty($user->name)) {
                    $user->name = '! ' . $user->name;
                    $user->fullname = $user->name;
                } elseif (!empty($user->fullname)) {
                    $user->fullname = '! ' . $user->fullname;
                }
                $filtered[] = $user;
            }
        }
        return $filtered;
    }
    /**
     * Makes a list of all orgs of a user without the "protectedorgs"
     * @param userid (optional) if not given use the current logged in user.
     * @return array containing all orgids the user is member of.
    **/
    public static function is_connected_orglist($userid = 0) {
        global $DB, $USER;
        if ($userid == 0) {
            $userid = $USER->id;
        }
        $protectedorgs = explode(',', get_config('block_eduvidual', 'protectedorgs'));
        $orgids = array();
        $orgs = $DB->get_records('block_eduvidual_orgid_userid', array('userid' => $userid));
        foreach($orgs AS $org) {
            if (!in_array($org->orgid, $protectedorgs)) {
                $orgids[] = $org->orgid;
            }
        }
        return $orgids;
    }
}
