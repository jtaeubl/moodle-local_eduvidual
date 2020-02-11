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
 * @package   block_eduvidual
 * @copyright 2017 Digital Education Society (http://www.dibig.at)
 * @author    Robert Schrenk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'eduvidual';
$string['manage'] = 'eduvidual Management-Interface';

$string['access_denied'] = 'Access denied';
$string['back'] = 'back';
$string['proceed'] = 'proceed';
$string['secret'] = 'Secret';
$string['store'] = 'store';
$string['store:success'] = 'Data stored successfully!';
$string['store:error'] = 'Data could not be stored!';

$string['Accesscard'] = 'Accesscard';
$string['Accesscards'] = 'Accesscards';
$string['Administration'] = 'Administration';
$string['Attributions'] = 'Attributions';
$string['Browse_org'] = 'My schools';
$string['Courses'] = 'My courses';
$string['Management'] = 'Management';
$string['Login'] = 'Login';
$string['Logout'] = 'Logout';
$string['Preferences'] = 'Preferences';
$string['Registration'] = 'Registration';
$string['Manager'] = 'Manager';
$string['Student'] = 'Student';
$string['Teacher'] = 'Teacher';
$string['User'] = 'User';


$string['access_only_because_admin_category'] = 'Access only because you are admin. You do not belong to this organisation!';
$string['access_only_because_admin_course'] = 'Access only because you are admin. You are not enrolled in this course!';
$string['access_only_because_admin_user'] = 'Access only because you are admin. You do not belong any organisation with this user!';

$string['accesscard:description'] = 'This accesscard is used to enrol you in various organizations. Using the "secret" (containing your userid, a hash-tag and a random phrase) a manager of an organization is able to make you a member of this particular organization.<br /><br />If your accesscard was issued to you by an authority and you were not given a separate password, then the red marked phrase is your initial password.<br /><br /><strong>In that case we strongly advise you to change your password immediately!</strong>.<br /><br />In some cases your organization provides you with a special code or passphrase that allows you to enrol yourself actively in this particular organization. In this case please enter the organization-id and the code in the following form:';
$string['accesscard:card_access'] = 'Access by accesscard (passively)';
$string['accesscard:code_invalid'] = 'Code invalid';
$string['accesscard:code_obsolete'] = 'Code obsolete';
$string['accesscard:enrol'] = 'Enrol';
$string['accesscard:not_for_guest'] = 'Sorry, Guests do not have Accesscards!';
$string['accesscard:orgcode'] = 'Code or passphrase';
$string['accesscard:orgcode_access'] = 'Access by code (actively)';
$string['accesscard:orgid'] = 'Organization-ID';

$string['admin:backgrounds:filearealabel'] = '';
$string['admin:backgrounds:title'] = 'Backgrounds';
$string['admin:backgrounds:description'] = 'You can upload background images here that your users can select';
$string['admin:backgrounds:files:send'] = 'Store images';
$string['admin:backgrounds_cards:title'] = 'Backgrounds for Accesscards';
$string['admin:backgrounds_cards:description'] = 'You can upload background images that are used as background on access cards';
$string['admin:blockfooter:title'] = 'Footer of eduvidual Block';
$string['admin:blockfooter:description'] = 'If you display the eduvidual Block somewhere you can specify a text that is used as footer.';
$string['admin:coursebasements:title'] = 'Course basement categories';
$string['admin:coursebasements:description'] = 'You can specify course categories where templates of courses (referred to as "basements") reside. These basements can be used by users to create new courses. If you input more than one category delimit with a ","!';
$string['admin:coursestuff:title'] = 'Course Stuff';
$string['admin:dropzone:description'] = 'Set a path to a filesystem-repository. Users will get capability to use it for 24 hours when they upload something.';
$string['admin:dropzone:notset'] = 'No directory for Dropzone set!';
$string['admin:dropzone:title'] = 'Dropzone';
$string['admin:globalfiles:title'] = 'Global Files';
$string['admin:globalfiles:description'] = 'Upload global files here. The path is /pluginfile.php/1/block_eduvidual/globalfiles/0/{directories}/{filename}';
$string['admin:ltiresourcekey:title'] = 'Default LTI Resource Key';
$string['admin:ltiresourcekey:description'] = 'When manageing LTI Resources through this tool you should ensure, that you are using the same resource key for the same platforms. You can specify the default value here.';
$string['admin:map'] = 'Interactive Org-Map';
$string['admin:map:both'] = 'eduvidual + LPF';
$string['admin:map:count_invisibles'] = 'Count invisible markers';
$string['admin:map:eduv'] = 'eduvidual only';
$string['admin:map:includenonegroup'] = 'Include organizations with an unkown status';
$string['admin:map:lpf'] = 'LPF only';
$string['admin:map:none'] = 'Unknown';
$string['admin:map:google:apikey'] = 'Google API Key';
$string['admin:map:google:apikey:description'] = '<a href="https://cloud.google.com/console/google/maps-apis/overview?hl=de" target="_blank">Google</a> is used to search for GPS coordinates of organizations. If you want to use this feature please register and insert the API Key here.';
$string['admin:map:mapquest:apikey'] = 'MapQuest API Key';
$string['admin:map:mapquest:apikey:description'] = '<a href="https://www.mapquest.com" target="_blank">MapQuest</a> is used to search for GPS coordinates of organizations. If you want to use this feature please register (at least a free plan) and insert the API Key here.';
$string['admin:map:nominatim:directly'] = 'If you do not want to use MapQuest, you can also use Nominatim-Service directly, which has some certain limitations according the amount and speed of requests.';
$string['admin:module:filearealabel'] = '';
$string['admin:module:files:send'] = 'Store module';
$string['admin:module:generaldata'] = 'General Data';
$string['admin:module:ltidata'] = 'LTI Data';
$string['admin:module:lticartridge'] = 'LTI Cartridge URL';
$string['admin:module:ltilaunch'] = 'LTI Launch URL';
$string['admin:module:ltiresourcekey'] = 'LTI Resource Key';
$string['admin:module:ltisecret'] = 'LTI Secret';
$string['admin:module:payload'] = 'Payload';
$string['admin:module:payload:jsoneditor'] = 'For LTI-Sources the payload is compiled automatically. For other types use a JSON Editor like <a href="https://jsoneditoronline.org/" target="_blank">json editor online</a> to build the payload!';
$string['admin:module:type'] = 'Type';
$string['admin:modulecats:title'] = 'Module Categories';
$string['admin:modulecat:edit'] = 'Edit Module';
$string['admin:modulecat:generaldata'] = 'General Data';
$string['admin:modulecat:title'] = 'Module Category';
$string['admin:modulecat:images'] = 'Images for Module Categories';
$string['admin:modulecat:filearealabel'] = '';
$string['admin:modulecat:files:send'] = 'Store category';
$string['admin:modules:title'] = 'Modules';
$string['admin:modulesimport:datavalidated'] = 'Data is ok, store to database';
$string['admin:modulesimport:downloadfile'] = 'Modules have been updated. Please download the provided Excel-Sheet containing these modules. You can use it afterwards if you want to update the data of this import.';
$string['admin:navbar:title'] = 'Navbar Additions';
$string['admin:navbar:description'] = 'You can specifiy links that should always appear in the eduvidual menu. State one link per line in the following format:<br /><br /><i>{title}|{url}|{iconurl}</i>';
$string['admin:orgcoursebasement:title'] = 'Basement for Organsation-Course';
$string['admin:orgcoursebasement:description'] = 'Specify the basement that should be used for newly created organisation-courses!';
$string['admin:orgcoursebasement:nocoursebasementsgiven'] = 'No categories for course basements given. Please insert at least one category in the field above!';
$string['admin:orgs:title'] = 'Organizations';
$string['admin:orgs:description'] = 'Manage the organizations that can register in this instance.';
$string['admin:orgs:fields:categoryid'] = 'Course Category';
$string['admin:orgs:fields:city'] = 'City';
$string['admin:orgs:fields:country'] = 'Country';
$string['admin:orgs:fields:orgid'] = 'Organization-ID';
$string['admin:orgs:fields:mail'] = 'e-Mail';
$string['admin:orgs:fields:lat'] = 'Latitude';
$string['admin:orgs:fields:lon'] = 'Longitude';
$string['admin:orgs:fields:name'] = 'Name';
$string['admin:orgs:fields:phone'] = 'Phone';
$string['admin:orgs:fields:street'] = 'Street';
$string['admin:orgs:fields:zip'] = 'ZIP';
$string['admin:phplist:title'] = 'phpList Settings';
$string['admin:phplist:description'] = 'You can configure here how the sync to phpList works.';
$string['admin:phplist:sync'] = 'Perform a full sync now';
$string['admin:protectedorgs:title'] = 'Protected Organizations';
$string['admin:protectedorgs:description'] = 'Users from these Organizations are hidden to others!';
$string['admin:questioncategories:title'] = 'Core Question Categories';
$string['admin:questioncategories:description'] = 'Please select the core question categories that can be selected by users. Categories that are not selected here will always appear. Categories that are selected here have to be selected by users to be listed!';
$string['admin:registrationcc:title'] = 'BCC-Info on Registration';
$string['admin:registrationcc:description'] = 'BCC-Info on Registration of new Organizations. Please list several mail-adresses delimited by ","';
$string['admin:registrationsupport:title'] = 'Support-Contact for Registration';
$string['admin:registrationsupport:description'] = 'Please enter a support-contact here for registration issues. This will be part of a "mailto"-Link!';
$string['admin:stats:all'] = 'Organisations total';
$string['admin:stats:lpf_and_eduv'] = 'All';
$string['admin:stats:lpf'] = 'LPF only';
$string['admin:stats:lpfeduv'] = 'Both';
$string['admin:stats:migrated'] = 'Migrated';
$string['admin:stats:neweduv'] = 'eduvidual only';
$string['admin:stats:rate'] = 'Rate';
$string['admin:stats:registered'] = 'Registered';
$string['admin:stats:state'] = 'State';
$string['admin:stats:states'] = 'States';
$string['admin:stats:title'] = 'Statistics';
$string['admin:stats:type'] = 'Schooltype';
$string['admin:stats:types'] = 'Schooltypes';
$string['admin:termsofuse:title'] = 'Terms of use';

$string['allmanagerscourses:title'] = 'All-Managers-Course';
$string['allmanagerscourses:description'] = 'You can enrol all managers of newly created organizations to certain courses (e.g. documentation, news forum). Please specify the courseids delimited by "," or leave it empty if you do not want to use this feature!';

$string['app:back_to_app'] = 'Back to App';
$string['app:redirect_to_courses'] = 'Redirect to courses!';
$string['app:login_successfull'] = 'Login successfull!';
$string['app:login_successfull_token'] = 'Token correct - login successfull!';
$string['app:login_successfull_username_password'] = 'Login successfull using username and password!';
$string['app:login_with_x'] = 'Login via {$a}';
$string['app:login_wrong_credentials'] = 'Wrong login credentials!';
$string['app:login_wrong_token'] = 'Wrong login token!';
$string['app:open_in_app'] = 'Open eduvidual-App';

$string['bufferedmode:changesuccess'] = 'Change of buffered mode settings saved successfully.';
$string['bufferedmode:configcopy:failed'] = 'Copy of config.php to {$bf} could not be made. It is advised to make a backup manually. You can force the modifications by clicking <a href="{$a->anywayurl}">here</a>';
$string['bufferedmode:configcopy:success'] = 'Successfully created copy of config.php to {$a->bf}';
$string['bufferedmode:description'] = 'Buffered Mode is required to separate different organizations from each other. People can not see courses, categories or users from other organisations. In order to enable privacy mode a little modification has to made to config.php of your moodle instance';
$string['bufferedmode:disable'] = 'Disable';
$string['bufferedmode:enable'] = 'Enable';
$string['bufferedmode:isenabled'] = 'Buffered Mode is enabled';
$string['bufferedmode:isdisabled'] = 'Buffered Mode is disabled';
$string['bufferedmode:modifylogin'] = 'Modify Login Page';
$string['bufferedmode:notwritable'] = 'Change of buffered mode settings failed! Is config.php writable by PHP? Maybe you have to modify config.php manually by appending/removing the following code: <pre>{$a->codecomplete}</pre>';
$string['bufferedmode:requirecapability'] = 'Require Capability';
$string['bufferedmode:requirecapability:description'] = 'If this is enabled users need the capability block/eduvidual:useinstance in system context to see and use this plugin.';
$string['bufferedmode:title'] = 'Buffered Mode';

$string['cachedef_appcache'] = 'This is the session cache used if in app mode';

$string['categories:coursecategories'] = 'Courses & categories';

$string['check_js:description'] = 'The page you requested required JavaScript to be enabled. If you are not redirected to the desired page, probably JavaScript is not enabled.';
$string['check_js:title'] = 'JavaScript';

$string['courses:enrol:byqrcode'] = 'Enrol by QR Code';
$string['courses:enrol:courseusers'] = 'Users in {$a->name}';
$string['courses:enrol:enrol'] = 'Enrol';
$string['courses:enrol:orgusers'] = 'Users of {$a->name}';
$string['courses:enrol:roletoset'] = 'Role to set';
$string['courses:enrol:searchforuser'] = 'Search and select a user';
$string['courses:enrol:searchtoomuch'] = 'Too many search results, please use the filter!';
$string['courses:enrol:unenrol'] = 'Unenrol';
$string['courses:noaccess'] = 'Sorry, you are not enrolled to this course!';

$string['cron:title'] = 'eduvidual Cron';
$string['cron:trashbin:title'] = 'eduvidual Trashbin';

$string['defaultroles:title'] = 'Default Roles';
$string['defaultroles:course:title'] = 'Default Roles (Courses)';
$string['defaultroles:course:description'] = 'Define the default roles to be assigned within courses. These will be used for membership management in courses by this plugin!';
$string['defaultroles:course:parent'] = 'Parent';
$string['defaultroles:course:student'] = 'Student';
$string['defaultroles:course:teacher'] = 'Teacher';
$string['defaultroles:course:unmanaged'] = 'Not managed';

$string['defaultroles:orgcategory:title'] = 'Default Roles (Organization Categories)';
$string['defaultroles:orgcategory:description'] = 'Here you can specify roles that are assigned to users in the course category of a particular organization.';
$string['defaultroles:orgcategory:manager'] = 'Manager';
$string['defaultroles:orgcategory:parent'] = 'Parent';
$string['defaultroles:orgcategory:student'] = 'Student';
$string['defaultroles:orgcategory:teacher'] = 'Teacher';

$string['defaultroles:refreshroles'] = 'Re-Assign Roles in course categories';

$string['eduvidual:addinstance'] = 'Add eduvidual block';
$string['eduvidual:canaccess'] = 'Allow access to this context and its children.';
$string['eduvidual:manage'] = 'Manage eduvidual block';
$string['eduvidual:myaddinstance'] = 'Add eduvidual_block to course view';
$string['eduvidual:useinstance'] = 'Use the eduvidual_block';

$string['explevel:title'] = 'Experience Levels';
$string['explevel:description'] = 'Experience Level Roles can be chosen to simplify the UI of Moodle';
$string['explevel:select'] = 'Please select the roles that can be chosen by users in system context to modify the user experience.';
$string['export'] = 'Export';

$string['guestuser:nopermission'] = 'Guest users are not permitted to do this!';

$string['action'] = 'Action';
$string['back'] = 'Back';
$string['categoryadd:title'] = 'Name of new category?';
$string['categoryadd:text'] = 'Name has to be of 3 - 255 characters length!';
$string['categoryadd:title:length:title'] = 'Error';
$string['categoryadd:title:length:text'] = 'Length of category name should be at least 3 characters!';
$string['categoryedit:title'] = 'New name of category?';
$string['categoryremove:text'] = 'Remove this category, all sub-categories and all courses!!!';
$string['categoryremove:title'] = 'Really remove?';
$string['close'] = 'close';
$string['config_not_set'] = 'Configuration could not be saved!';
$string['courseremove:title'] = 'Remove course';
$string['courseremove:text'] = 'Do you really want to remove this course?';
$string['create'] = 'Create';
$string['createcategory:here'] = 'Create category here';
$string['createcategory:remove'] = 'Remove this category';
$string['createcategory:rename'] = 'Rename this category';
$string['createcourse:basement'] = 'Select basement';
$string['createcourse:catcreateerror'] = 'Could not create course category';
$string['createcourse:coursenameemptyerror'] = 'Coursename is empty';
$string['createcourse:created'] = 'Course successfully created';
$string['createcourse:createerror'] = 'Course could not be created';
$string['createcourse:extra'] = 'Extra';
$string['createcourse:hint_orgclasses'] = 'Hint: As eduvidual-manager you can specify which classes and topics are available in the <a href="/blocks/eduvidual/pages/manage.php?act=classes">management-interface</a>!';
$string['createcourse:invalidbasement'] = 'Invalid template';
$string['createcourse:org'] = 'Organization';
$string['createcourse:here'] = 'Create course here';
$string['createcourse:name'] = 'Name of course';
$string['createcourse:nameinfo'] = 'We recommend using a name that contains the year when the course is used. On the long run this allows you keep an overview over all your courses!';
$string['createcourse:nametooshort'] = 'Name too short';
$string['createcourse:subcat1emptyerror'] = 'The first subcategory must not be empty!';
$string['createcourse:subcat1'] = 'Schoolyear';
$string['createcourse:subcat1:defaults'] = "SY19/20\nSY20/21\nPersistent";
$string['createcourse:subcat2'] = 'Class';
$string['createcourse:subcat3'] = 'Topic';
$string['createcourse:subcat4'] = 'Extra';
$string['createcourse:setteacher'] = 'Set someone else as teacher';
$string['createmodule:create'] = 'create';
$string['createmodule:failed'] = 'Could not create module';
$string['createmodule:invalid'] = 'Invalid module data';
$string['createmodule:requiredfield'] = 'This field is required!';
$string['db_error'] = 'Database error!';
$string['invalid_character'] = 'Invalid character';
$string['invalid_orgcoursebasement'] = 'Invalid Basement selected!';
$string['invalid_secret'] = 'Invalid Secret given!';
$string['invalid_type'] = 'Invalid Type!';
$string['missing_permission'] = 'Missing Permission!';
$string['open'] = 'open';

$string['mailregister:confirmation'] = 'Confirmation';
$string['mailregister:confirmation:mailsent'] = 'Email was sent!';
$string['mailregister:footer'] = 'Kind regards';
$string['mailregister:footer:signature'] = '<img src="https://www.eduvidual.at/pluginfile.php/1/block_eduvidual/globalfiles/0/_sys/register/signature.png" width="200" alt="" /><br />Robert Schrenk';
$string['mailregister:header'] = 'Registration';
$string['mailregister:proceed'] = 'To proceed with your registration procedure please click this <a href="{$a->registrationurl}" target="_blank">link</a>!';
$string['mailregister:text'] = '<a href="{$a->wwwroot}/user/profile.php?id={$a->userid}">{$a->userfullname}</a> registered your organisation with the ID <b>{$a->orgid}</b> in our moodle instance. If you do not know whats going on please just ignore this mail. If you are the person in charge for registration please use the forward this token to the person that started the registration process:';
$string['mailregister:subject'] = 'Registration';
$string['mailregister:2:gotocategory'] = 'The area of your organisation resides at <b><a href="{$a->categoryurl}" target="_blank">{$a->orgname}</a></b>.';
$string['mailregister:2:header'] = 'Registration completed';
$string['mailregister:2:text'] = 'Registration of a new organisation with orgid {$a->orgid} has been completed.  Please find more information about the management of your schools-area in our course for <a href="{$a->managerscourseurl}">eduvidual-managers</a>!';
$string['mailregister:2:footer'] = 'Kind regards';
$string['mailregister:2:footer:signature'] = '<img src="https://www.eduvidual.at/pluginfile.php/1/block_eduvidual/globalfiles/0/_sys/register/signature.png" width="200" alt="" /><br />Robert Schrenk';
$string['mailregister:2:subject'] = 'Registration completed';

$string['mainmenu'] = 'Mainmenu';

$string['manage:accesscodes'] = 'Accesscodes';
$string['manage:accesscodes:create'] = 'Create accesscode';
$string['manage:accesscodes:code'] = 'Input a code or passphrase';
$string['manage:accesscodes:description'] = 'You can create various Accesscodes to allow users to enrol themselves to your organisation through the function "<a href="{$a->wwwroot}/blocks/eduvidual/pages/accesscard.php">Accesscard</a> from the eduvidual-block"!';
$string['manage:accesscodes:issuer'] = 'Issuer';
$string['manage:accesscodes:issuer:short'] = 'by';
$string['manage:accesscodes:maturity'] = 'Maturity (YYYY-mm-dd HH:ii:ss)';
$string['manage:accesscodes:maturity:short'] = 'Maturity';
$string['manage:accesscodes:revoke'] = 'Revoke';
$string['manage:accesscodes:role'] = 'Role';
$string['manage:addparent'] = 'Add mentors to students';
$string['manage:addparent:changestate'] = 'Add/remove mentor status';
$string['manage:addparent:description'] = 'Once you append a mentor to a specific student the mentor is entitled to see data from the student account like forum posts, gradings, course activities and such. Furthermore the mentor is able to agree to site policies on behalf of the student!';
$string['manage:addparent:studentfilter'] = 'Filter students';
$string['manage:addparent:studentfilter:init'] = 'Start by typing in the filter';
$string['manage:addparent:parentfilter'] = 'Filter mentors';
$string['manage:addparent:parentfilter:init'] = 'Start by selecting a student';
$string['manage:addparent:warning'] = 'Attention, take care that according to the current law mentors are allowed to access the data!';
$string['manage:adduser'] = 'Add user to organization';
$string['manage:adduser:description'] = 'Everyone in your organization (including you) can only see people that belong to your organization. In order to add a person to the domain of your organization you have to add this person using the persons individual secret. This secret (e.g. <i>1234#atan</i>) is given at the eduvidual block and the accesscard.';
$string['manage:adduser:qrscan'] = 'Add user by QR code';
$string['manage:archive'] = 'Archive';
$string['manage:archive:action'] = 'Act';
$string['manage:archive:action:coursecannotmanage'] = 'Course {$a->name} can not be managed by you!';
$string['manage:archive:action:coursemoved'] = 'Course {$a->name} has been moved!';
$string['manage:archive:action:courseNOTmoved'] = 'Attention: Course {$a->name} has NOT been moved!';
$string['manage:archive:action:failures'] = 'There have been {$a->failures} errors!';
$string['manage:archive:action:successes'] = '{$a->successes} courses have been moved!';
$string['manage:archive:action:title'] = 'Moving courses';
$string['manage:archive:action:targetinvalid'] = 'Target category is invalid!';
$string['manage:archive:action:targetok'] = 'Target category checked and is ok!';
$string['manage:archive:confirmation'] = 'Confirmation';
$string['manage:archive:confirmation:description'] = 'The following course(s) will be moved to {$a->name}:';
$string['manage:archive:restart'] = 'Restart';
$string['manage:archive:source'] = 'Source';
$string['manage:archive:source:title'] = 'Select courses';
$string['manage:archive:source:description'] = 'You can select a bulk of courses to move them to another location, eg. archive all courses of a specific year to another course category. Alternatively you can move the courses to a system-wide trashbin (if set by admin).';
$string['manage:archive:target'] = 'Target';
$string['manage:archive:target:title'] = 'Select target';
$string['manage:archive:target:description'] = 'You have selected {$a->count} course(s).';
$string['manage:archive:trashbin'] = 'Trashbin';
$string['manage:archive:trashbin:description'] = 'Courses can be moved to a system-wide trashbin. As long as courses remain in the trashbin they can be recovered by any person who is enrolled as trainer in this course. Regularly the trashbin is emptied. Please ask your system administrator how often this happens!';
$string['manage:bunch:all'] = 'All';
$string['manage:bunch:allwithoutbunch'] = 'All users without cohort';
$string['manage:bunch:allparents'] = 'All parents';
$string['manage:bunch:allstudents'] = 'All students';
$string['manage:bunch:allteachers'] = 'All teachers';
$string['manage:bunch:allmanagers'] = 'All managers';
$string['manage:coursecategories'] = 'Course Categories';
$string['manage:createuseranonymous'] = 'Create anonymous User';
$string['manage:createuseranonymous:amount'] = 'Amount';
$string['manage:createuseranonymous:bunch'] = 'Cohort';
$string['manage:createuseranonymous:bunches'] = 'Cohorts';
$string['manage:createuseranonymous:created'] = 'Successfully created {$a->amount} user(s) in cohort {$a->bunch}';
$string['manage:createuseranonymous:description'] = 'This is the easiest way to create new users for your organization. Names are filled with random pseudonyms. You can print the access cards after creation. Therefore it is advisable to use a unique "cohort" as identifier, e.g. "usergroupxy-2019/05". That way you can differentiate which group you want to export for printing.';
$string['manage:createuseranonymous:exceededmax:title'] = 'Exceeded maximum';
$string['manage:createuseranonymous:exceededmax:text'] = 'You exceeded the maximum of {$a->maximum} accounts at once.';
$string['manage:createuseranonymous:role'] = 'Role';
$string['manage:createuseranonymous:send'] = 'Create users';
$string['manage:createuseranonymous:success'] = ' Users created';
$string['manage:createuseranonymous:failed'] = ' Users <strong>not</strong> created';
$string['manage:createuserspreadsheet'] = 'Create User from Excel';
$string['manage:createuserspreadsheet:import:datavalidated'] = 'Data is ok, store to database';
$string['manage:createuserspreadsheet:import:description'] = 'You can create users by uploading a spreadsheet (Excel, OpenOffice). This spreadsheet should contain tha colum-titles in the first row and reads the following columns:';
$string['manage:createuserspreadsheet:import:description:bunch'] = 'The cohort allows you to group users. This is useful to enrol a whole cohort in courses and to manage the access cards for printing.';
$string['manage:createuserspreadsheet:import:description:email'] = 'The mail-address of this user. If not given a (not working) dummy address will be assigned. The mailaddress is used as username.';
$string['manage:createuserspreadsheet:import:description:firstname'] = 'The firstname. If no firstname is given eduvidual will use a random name.';
$string['manage:createuserspreadsheet:import:description:id'] = 'User-ID. When creating new users leave empty. If the ID is given eduvidual will try to update the user-data.';
$string['manage:createuserspreadsheet:import:description:lastname'] = 'The lastname. If no lastname is given eduvidual will use a random name.';
$string['manage:createuserspreadsheet:import:description:role'] = 'The role of this user (either "Manager", "Teacher", "Student" or "Parent"). This does not affect current enrolments in courses.';
$string['manage:createuserspreadsheet:import:downloadfile'] = 'Users have been updated. Please download the provided Excel-Sheet containing these users. You can use it afterwards if you want to update the data of this import.';
$string['manage:data'] = 'Data';
$string['manage:enrolmeasteacher'] = 'Enrol me as teacher';
$string['manage:maildomain'] = 'Maildomain';
$string['manage:maildomain:description'] = 'If this is set users with a mailaddress from this domain are automatically assigned to this organization!';
$string['manage:mnet:action'] = 'Loginsettings';
$string['manage:mnet'] = 'MNet Host';
$string['manage:mnet:adminonly'] = 'Only Admins can modify settings on this page!';
$string['manage:mnet:send'] = 'Store';
$string['manage:mnet:selectnone'] = 'none';
$string['manage:mnet:selectorg'] = 'Select organization first!';
$string['manage:mnet:filearealabel'] = 'Logo';
$string['manage:profile:clickusername'] = '<strong>Hint:</strong> You can edit some profile information by clicking on the username!';
$string['manage:profile:invalidmail'] = 'Invalid e-Mail given!';
$string['manage:profile:tooshort'] = '{$a->fieldname} too short, minimum {$a->minchars} characters!';
$string['manage:selectfunction'] = 'Select Function';
$string['manage:selectorganization'] = 'Select Organization';
$string['manage:stats'] = 'Statistics';
$string['manage:stats:currentconsumption'] = 'Your current consumption is';
$string['manage:style:orgfiles:title'] = 'Upload images';
$string['manage:style:orgbanner:header'] = 'Organisation Banner Graphic';
$string['manage:style:orgbanner:filearealabel'] = 'You can upload a banner graphic here that will be used in boost theme as header in all courses and course categories of your organization. This graphic should be relatively big (approx. 2200px : 1200px) and should be suitable to be cutted for various screen sizes.';
$string['manage:style:orgfiles:header'] = 'Own Graphics for Styles';
$string['manage:style:orgfiles:filearealabel'] = 'You can upload images here that can be used within your stylesheet. You can refer to them using the following URL appended by the filename: {$a->url}';
$string['manage:style:files:send'] = 'Store images';
$string['manage:subcats:forcategories'] = 'Fields used for course categories and course name';
$string['manage:subcats:forcoursename'] = 'Fields used only for course name';
$string['manage:subcats:title'] = 'Coursecategory structure';
$string['manage:subcats:description'] = 'Whenever a teacher creates a course within your school several pieces of information have to be given. You can restrict this information to a specified set of values if you enter the desired options in the following fields, delimited by a linebreak. The first two layers will result in course categories. The course will be named based on these pieces of information.';
$string['manage:subcats:subcat1'] = 'First layer';
$string['manage:subcats:subcat2'] = 'Second layer';
$string['manage:subcats:subcat3'] = 'Third layer';
$string['manage:subcats:subcat4'] = 'Fourth layer';
$string['manage:user_bunches:format:cards'] = 'Cards';
$string['manage:user_bunches:format:list'] = 'List';
$string['manage:users:title'] = 'Users in your organization';
$string['manage:users:description'] = 'To change the role of a certain user just select the user from the search box and choose the role.';
$string['manage:users:printcards'] = 'Print accesscards';
$string['manage:users:setpwreset'] = 'Reset password';
$string['manage:users:setpwreset:description'] = 'Resetting passwords will only work for manually created accounts and will <strong>NOT</strong> work for Microsoft-, MNET- or other accounts. This function will reset the password to the secret (red text) on the accesscard.';
$string['manage:users:setpwreset:failed'] = 'Failed';
$string['manage:users:setpwreset:updated'] = 'Reset';
$string['manage:users:setrole'] = 'Set role';
$string['manage:users:searchforuser'] = 'Search and select a user';

$string['manage:users'] = 'Users';
$string['manage:categories'] = 'Categories';
$string['manage:style'] = 'Style';

$string['minimum_x_chars'] = 'More than {$a} characters required!';

$string['missing_capability'] = 'Missing capability';

$string['n_a'] = 'n/a';
$string['name_too_short'] = 'Name too short';

$string['or'] = 'or';
$string['orgrole:role_already_in_use'] = 'Role already in use';
$string['orgsizes:title'] = 'Filesystem Size';

$string['login:direct'] = 'Direct login';
$string['login:default'] = 'Default Login Page';
$string['login:external'] = 'External';
$string['login:failed'] = 'Login failed';
$string['login:internal'] = 'Internal';
$string['login:network_btn'] = 'Other Moodle (Network)';
$string['login:network'] = 'External login';
$string['login:qrscan:btn'] = 'Login with QR Code';
$string['login:qrscan:description'] = 'If you have not changed your password yet you can login using the QR Code printed on your accesscard.';

$string['preferences:defaultorg:title'] = 'Select default organization';
$string['preferences:explevel'] = 'Moodle Experience Levels';
$string['preferences:explevel:description'] = 'By selecting from the following roles you can simplify the UI of Moodle.';
$string['preferences:questioncategories'] = 'Core Question Categories';
$string['preferences:questioncategories:description'] = 'You will only see questions from the core question bank when you activate the main category!';
$string['preferences:request:moolevel'] = '<strong>Initial question for teachers</strong><br /><br />Please estimate your knowledge about moodle. Using this information we will optimize the user interface for you. The more you know about moodle the more activities you will see. Please select the most appropriate from the options below!<br /><br />Your choice will be stored immediately. <strong>Afterwards</strong> you can proceed to your Dashboard by clicking the "ok"-Button.';
$string['preferences:selectbg:title'] = 'Select a background';
$string['preferences:usemode:appmode'] = 'App Mode';
$string['preferences:usemode:description'] = 'You can switch the user interface to appear as app with simplified complexity, or in desktop mode!';
$string['preferences:usemode:desktopmode'] = 'Desktop Mode';
$string['preferences:usemode:switchmode'] = 'Switch to';
$string['preferences:usemode:title'] = 'UI Mode';

$string['print'] = 'Print';

$string['privacy:metadata:privacy:metadata:block_eduvidual_courseshow'] = 'Stores for app-mode course list which courses you want to hide or show.';
$string['privacy:metadata:privacy:metadata:block_eduvidual_orgid_userid'] = 'Stores your memberships and role in various organizations';
$string['privacy:metadata:privacy:metadata:block_eduvidual_userbunch'] = 'Used by organizations to group accesscars for printing.';
$string['privacy:metadata:privacy:metadata:block_eduvidual_userbunch:orgid'] = 'The ID of the organization';
$string['privacy:metadata:privacy:metadata:block_eduvidual_userbunch:bunch'] = 'The group you are assigned to';
$string['privacy:metadata:privacy:metadata:block_eduvidual_userextra'] = 'Personal extra settings';
$string['privacy:metadata:privacy:metadata:block_eduvidual_userextra:background'] = 'The personal background';
$string['privacy:metadata:privacy:metadata:block_eduvidual_userextra:backgroundcard'] = 'The background of the accesscard';
$string['privacy:metadata:privacy:metadata:block_eduvidual_userextra:defaultorg'] = 'The default organization (if user is member of more than one organization)';
$string['privacy:metadata:privacy:metadata:block_eduvidual_userqcats'] = 'The core question categories that should appear.';
$string['privacy:metadata:privacy:metadata:block_eduvidual_usertoken'] = 'User-Tokens for auto-login';
$string['privacy:metadata:privacy:metadata:block_eduvidual_usertoken:token'] = 'The token';
$string['privacy:metadata:privacy:metadata:block_eduvidual_usertoken:created'] = 'The time when the token was created';
$string['privacy:metadata:privacy:metadata:block_eduvidual_usertoken:used'] = 'The time when the token was used';

$string['qrscan:cameratoobject'] = 'Now focus your camery on the QR code!';
$string['questioncategoryfilter:label'] = 'Categoryfilter';

$string['register:individual'] = 'Register as individual';
$string['register:org'] = 'Register as organization';

$string['registration:alreadyregistered'] = 'Already registered!';
$string['registration:title'] = 'Registration';
$string['registration:description'] = 'If your organisation got an invitation to register in this platform you can enter your Organisation-ID to start the registration process:';
$string['registration:loginfirst'] = 'You have to login to this site before you can register an organization!';
$string['registration:loginlink'] = 'Proceed to login page';
$string['registration:name'] = 'Name of Organisation';
$string['registration:name:description'] = 'Choose by yourself, but make it identifiable like "Hertha Firnberg Schools" or "HLW Deutschlandsberg". Maximum length are 30 characters!';
$string['registration:token'] = 'Token';
$string['registration:stage1'] = 'The Organisation-ID you entered is correct. You can now request a Token that will be sent to the official eMail-Address or your organisation.';
$string['registration:stage1:supportinfo'] = 'Is the mail address wrong? Please contact <a href="mailto:{$a}" target="_blank">{$a}</a>!';
$string['registration:stage2'] = 'Please enter the Token that was sent to you. Optionally you can change the name of your organisation. (At least 5 chars an unique!):';
$string['registration:request'] = 'Request Token';
$string['registration:validate'] = 'Validate Token';
$string['registration:success'] = '<h3>Congratulations!</h3><p>Registration was successfull. You can now navigate to your newly created organisations space.</p>';

$string['restricted:title'] = 'Restricted area';
$string['restricted:description'] = '<p>We take privacy serious and therefore prevent access to resources from organizations that you do not belong to.</p>';

$string['role:Administrator'] = 'Administrator';
$string['role:Manager'] = 'Manager';
$string['role:Parent'] = 'Parent';
$string['role:Student'] = 'Student';
$string['role:Teacher'] = 'Teacher';

$string['start_with_at'] = 'Start with an  "@"-sign';
$string['supportarea'] = 'Supportarea';

$string['teacher:addfromcatalogue'] = 'Resource catalogue';
$string['teacher:course:enrol'] = 'Enrol users';
$string['teacher:course:gradings'] = 'Open gradings';
$string['teacher:coursebasements:ofuser'] = 'Your courses as templates';
$string['teacher:createcourse'] = 'Create course';
$string['teacher:createcourse:here'] = 'Create course here';
$string['teacher:createmodule'] = 'Create module';
$string['teacher:createmodule:here'] = 'Create module here';
$string['teacher:createmodule:missing_capability'] = 'Missing capability to create modules in this course!';
$string['teacher:createmodule:selectcourse'] = 'Select course';
$string['teacher:createmodule:selectmodule'] = 'Select module';
$string['teacher:createmodule:selectsection'] = 'Select section';

$string['trashcategory:title'] = 'Category as Trashbin';
$string['trashcategory:description'] = 'You may specify an optional category as global trashbin. Courses in trashbin will be removed daily!';

$string['user:categories:adminshowall'] = 'All orgs';
$string['user:categories:adminshowmine'] = 'Only my orgs';
$string['user:courselist:showhidden'] = 'Show/hide hidden courses';
$string['user:landingpage:description'] = 'Set the current page as your landing page after login.';
$string['user:landingpage:title'] = 'Set landingpage';
$string['user:merge_accounts'] = 'Merge Accounts';
$string['user:merge_accounts:cancel'] = 'Keep various accounts (not recommended!)';
$string['user:merge_accounts:description'] = 'We discovered that you have multiple accounts with the same email-address. This may be due to the use of various login instruments and may cause confusion. It is recommended to merge your accounts.<br /><br /><strong>It can take a long time until your accounts are completely merged. Please do not interrupt that process, <u>you must not reload the page or navigate somewhere else</u>!</strong><br /><br />Please select which login instrument you want to keep:';
$string['user:merge_accounts:ok:dashboard'] = 'go to dashboard';
$string['user:merge_accounts:ok:description'] = 'Everything fine - there is only 1 active account using your email-address!';
$string['user:merge_accounts:merge'] = 'Merge now';
$string['user:merge_accounts:user_to_keep'] = 'Keeping';
$string['user:merge_accounts:user_to_merge'] = 'Merging';
$string['user:preference:editor:'] = 'Default editor';
$string['user:preference:editor:atto'] = 'Atto';
$string['user:preference:editor:tinymce'] = 'TinyMCE';
$string['user:preference:editor:textarea'] = 'Unformatted text';
$string['user:preference:editor:title'] = 'Preferred text-editor';
$string['user:support:showbox'] = 'Help me!';
