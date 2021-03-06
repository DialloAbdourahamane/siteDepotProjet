<?php
/*
Simple:Press Admin
Ahah call for Users
$LastChangedDate: 2012-11-18 11:04:10 -0700 (Sun, 18 Nov 2012) $
$Rev: 9312 $
*/

if (preg_match('#'.basename(__FILE__).'#', $_SERVER['PHP_SELF'])) die('Access denied - you cannot directly call this file');

spa_admin_ahah_support();

# ----------------------------------
# Check Whether User Can Manage Users
if (!sp_current_user_can('SPF Manage Users')) {
	if (!is_user_logged_in()) {
		spa_etext('Access denied - are you logged in?');
	} else {
		spa_etext('Access denied - you do not have permission');
	}
	die();
}

$action = $_GET['action'];
if (isset($action) && $action == 'delete') {
	$userid = sp_esc_int($_GET['id']);
	if (!current_user_can('delete_user', $userid)) {
		wp_die(spa_text( "You can't delete that user."));
	} else {
		require_once(ABSPATH.'wp-admin/includes/user.php');
		wp_delete_user($userid);
	}
}

die();

?>