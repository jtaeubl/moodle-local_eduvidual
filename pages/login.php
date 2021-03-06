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
 * @copyright  2020 Center for Learning Management (www.lernmanagement.at)
 * @author     Marianne Täubl (HTML+CSS), Robert Schrenk (PHP)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../../config.php');

$edushare = optional_param('edushare', 0, PARAM_INT);
$errorcode = optional_param('errorcode', 0, PARAM_INT);

$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('login');
$PAGE->set_url('/local/eduvidual/pages/login.php', array('edushare' => $edushare));
$PAGE->set_title(get_string('login'));
$PAGE->set_heading(get_string('login'));

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Moodle Startseite: Hier können Sie sich anmelden</title>
	<link rel="stylesheet" href="<?php echo $CFG->wwwroot; ?>/local/eduvidual/style/login.css">
	<!-- BOOTSTRAP -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"> window.sessionStorage.clear(); </script>
</head>

<body id="page-login-index">
	<div id="page" class="container ">

		<header class="container justify-content-center">
			<img src="<?php echo $CFG->wwwroot; ?>/local/eduvidual/pix/icon.svg" alt="eduvidual Logo">
			<h1>eduvidual - <?php echo get_string('your_learning_environment', 'local_eduvidual'); ?></h1>
		</header>

		<main class="page-wrapper justify-content-center">
			<div class="login_buttons">
				<div class="row justify-content-md-center">
					<div class="col-lg-6 col-sm-12">
						<a href="<?php echo $CFG->wwwroot; ?>/local/eduvidual/pages/redirects/login_oauth.php?issuer=Microsoft" title="Microsoft" id="eduvidual-btn-sso-microsoft" data-ajax="false"
							class="btn btn-block" type="button" name="microsoft">
							<img src="<?php echo $CFG->wwwroot; ?>/local/eduvidual/pix/logo_microsoft.svg" width="20" alt="Microsoft">&nbsp;Microsoft
						</a>
					</div>
					<div class="col-lg-6 col-sm-12">
						<a href="<?php echo $CFG->wwwroot; ?>/local/eduvidual/pages/redirects/login_oauth.php?issuer=Google" title="Google" id="eduvidual-btn-sso-google" data-ajax="false"
							class="btn btn-block" type="button" name="google">
							<img src="<?php echo $CFG->wwwroot; ?>/local/eduvidual/pix/logo_google.svg" width="20" alt="Google">&nbsp;Google
						</a>
					</div>
				</div>

				<div class="row justify-content-md-center__">
					<div class="col-lg-6 col-sm-12">
						<a href="<?php echo $CFG->wwwroot; ?>/local/eduvidual/pages/redirects/login_mnet.php" title="<?php echo get_string('login:network_btn', 'local_eduvidual'); ?>" id="eduvidual-btn-sso-eduverbund" data-ajax="false"
							class="btn btn-block" type="button" name="edu_verbund">
							<img src="<?php echo $CFG->wwwroot; ?>/pix/i/mnethost.svg" width="20" alt="<?php echo get_string('login:network_btn', 'local_eduvidual'); ?>">&nbsp;<?php echo get_string('login:network_btn', 'local_eduvidual'); ?>
						</a>
					</div>
					<?php
					if ($edushare) {
						?>
						<div class="col-lg-6 col-sm-12">
							<a href="<?php echo $CFG->wwwroot; ?>/auth/shibboleth_link/login.php?idp=https%3A%2F%2Ffederation.portal.at%2Fidp_metadata.xml" title="Portal.at" id="eduvidual-btn-sso-portal" data-ajax="false"
								class="btn btn-block" type="button" name="portal">
								<img src="<?php echo $CFG->wwwroot; ?>/local/eduvidual/pix/logo_portalat.png" width="20" alt="Portal.at">&nbsp;Portal.at
							</a>
						</div>
						<?php
					} // SHOW EDUSHARE
					?>
				</div>
				<div class="row justify-content-md-center">
					<?php
					if ($edushare) {
						?>
						<div class="col-lg-6 col-sm-12">
							<a href="<?php echo $CFG->wwwroot; ?>/auth/shibboleth_link/login.php?idp=https%3A%2F%2Fwww.eduidam.at%2Fidp_metadata.xml" title="edu.IDAM" id="eduvidual-btn-sso-iam" data-ajax="false"
								class="btn btn-block" type="button" name="edu.IDAM" >
								<img src="<?php echo $CFG->wwwroot; ?>/local/eduvidual/pix/logo_eduidam.png" width="20" alt="edu.IDAM">&nbsp;edu.IDAM
							</a>
						</div>
						<?php
					} // SHOW EDUSHARE
					?>
					<div class="col">
					</div>
				</div>

			</div><!-- Ende Login-Buttons -->

			<div class="row justify-content-center">
				<div class="divider-text">
					<div class="separator">
						<?php echo get_string('adverbfor_or', 'user'); ?>
					</div>
					<p>
						<?php echo get_string('login:direct', 'local_eduvidual') ?>
					</p>
				</div>

			</div>
<?php

if ($errorcode > 0) {
	$errormessage = "";
	require_once($CFG->dirroot . '/lib/authlib.php');
	switch ($errorcode) {
		/** Can not login because user does not exist. */
		case AUTH_LOGIN_NOUSER: // 1
			$errormessage = get_string('nousers', 'error');
		break;
		/** Can not login because user is suspended. */
		case AUTH_LOGIN_SUSPENDED: // 2
			$errormessage = get_string('suspended');
		break;
		/** Can not login, most probably password did not match. */
		case AUTH_LOGIN_FAILED: // 3
			$errormessage = get_string('invalidlogin');
		break;
		/** Can not login because user is locked out. */
		case AUTH_LOGIN_LOCKOUT: // 4
			$errormessage = get_string('sessionexpired', 'error');
		break;
		/** Can not login becauser user is not authorised. */
		case AUTH_LOGIN_UNAUTHORISED: // 5
			$errormessage = get_string("unauthorisedlogin", "", optional_param('username', '', PARAM_TEXT));
		break;
	}
	if (!empty($errormessage)) {
		echo $OUTPUT->render_from_template('local_eduvidual/alert', array(
			'content' => $errormessage,
			'type' => 'danger'
		));
	}
}


?>
			<form action="<?php echo $CFG->wwwroot; ?>/login/index.php" method="post" id="login">
				<div class="form-row">
					<input type="text" class="form-control" name="username" id="username" placeholder="<?php echo get_string('username') . ' / ' . get_string('email'); ?>">
				</div>
				<div class="form-row">
					<input type="password" class="form-control" name="password" id="password" placeholder="<?php echo get_string('password'); ?>">
				</div>

				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="rememberusername" name="rememberusername">
						<label class="form-check-label" for="gridCheck">
							<?php echo get_string('rememberusername', 'admin'); ?>
						</label>
					</div>
				</div>

				<div class="form-row">
					<input type="submit" class="login-button btn btn-block btn-primary" id="loginbtn" value="<?php echo get_string('login'); ?>">
				</div>
			</form>

			<p class="pass justify-content-end">
				<a href="<?php echo $CFG->wwwroot; ?>/login/forgot_password.php">
					<?php echo get_string('forgotten'); ?>
				</a>
			</p>


			<div class="btn-lower row justify-content-md-center">
				<div class="col-lg-4 col-sm-12">
					<a href="<?php echo $CFG->wwwroot; ?>/login/verify_age_location.php" title="reg-einzelperson" data-ajax="false">
						<button class="btn-block btn-grey" type="button" name="Als Einzelperson registrieren" id="reg-einzelperson">
							<?php echo get_string('register:individual', 'local_eduvidual'); ?>
						</button>
					</a>
				</div>
				<div class="col-lg-4 col-sm-12">
					<form action="<?php echo $CFG->wwwroot; ?>/login/index.php" method="post" id="guestlogin">
						<input type="hidden" name="logintoken" value="WBOYNquPhvP8c2NXtWKVztYVQ73yXVXH">
						<input type="hidden" name="username" value="guest">
						<input type="hidden" name="password" value="guest">
						<a href="#" title="gast" id="eduvidual-btn-sso-gast" data-ajax="false">
							<button class="btn-block btn-grey" type="submit" name="gast" id="gast">
								<?php echo get_string('loginguest'); ?>
							</button>
						</a>
					</form>
				</div>
			</div>
		</main>
	</div>
	<footer>
		<div class="container-fluid footer-menu">
			<div class="container">
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a href="https://www.eduvidual.at/course/view.php?id=606&section=3" class="nav-link">
							<?php echo get_string('help_and_tutorials', 'local_eduvidual'); ?>
						</a>
					</li>
					<li class="nav-item">
						<a href="https://www.eduvidual.at/static/imprint.html" class="nav-link">
							<?php echo get_string('imprint', 'local_eduvidual'); ?>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo $CFG->wwwroot; ?>/" class="nav-link">
							<?php echo get_string('privacy', 'local_eduvidual'); ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>
