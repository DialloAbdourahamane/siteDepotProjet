<?php
/*
Simple:Press
DESC:
$LastChangedDate: 2012-11-18 11:04:10 -0700 (Sun, 18 Nov 2012) $
$Rev: 9312 $
*/

# ==========================================================================================
#
# 	FORUM PAGE
#	This file loads for forum page loads only
#
# ==========================================================================================

global $SPSTATUS;

if (!defined('SPMEMBERLIST')) define('SPMEMBERLIST', sp_url('members'));
if (!defined('SFMARKREAD'))   define('SFMARKREAD',   sp_build_qurl('mark-read'));

# hack to get around wp_list_pages() bug
if ($SPSTATUS == 'ok') {
	# go for whole row so it gets cached.
	$t = spdb_table(SFWPPOSTS, "ID=".sp_get_option('sfpage'), 'row');
	if (!defined('SFPAGETITLE')) define('SFPAGETITLE', $t->post_title);
}

do_action('sph_forum_constants');

?>