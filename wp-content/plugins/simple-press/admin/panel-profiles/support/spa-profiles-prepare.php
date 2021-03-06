<?php
/*
Simple:Press
Admin Profiles Support Functions
$LastChangedDate: 2012-11-18 11:04:10 -0700 (Sun, 18 Nov 2012) $
$Rev: 9312 $
*/

if (preg_match('#'.basename(__FILE__).'#', $_SERVER['PHP_SELF'])) die('Access denied - you cannot directly call this file');

function spa_get_options_data() {
	$sfprofile = sp_get_option('sfprofile');
	$sfsigimagesize = sp_get_option('sfsigimagesize');
	$sfprofile['sfsigwidth'] = $sfsigimagesize['sfsigwidth'];
	$sfprofile['sfsigheight'] = $sfsigimagesize['sfsigheight'];
	return $sfprofile;
}

function spa_get_tabsmenus_data() {
	$tabs = sp_profile_get_tabs();
	return $tabs;
}

function spa_get_avatars_data() {
	$sfavatars = sp_get_option('sfavatars');
	return $sfavatars;
}

function spa_paint_avatar_pool() {
	global $tab, $SPPATHS;

	$out = '';

	# Open avatar pool folder and get cntents for matching
	$path = SF_STORE_DIR.'/'.$SPPATHS['avatar-pool'].'/';
	$dlist = @opendir($path);
	if (!$dlist) {
		echo '<tr><td class="sflabel"><strong>'.spa_text('The avatar pool folder does not exist').'</strong></td></tr>';
		return;
	}

	# start the table display
	$out.= '<tr>';
	$out.= '<th style="width:60%;text-align:center">'.spa_text('Avatar').'</th>';
	$out.= '<th style="width:30%;text-align:center">'.spa_text('Filename').'</th>';
	$out.= '<th style="width:9%;text-align:center">'.spa_text('Remove').'</th>';
	$out.= '</tr>';

    $out.= '<tr><td colspan="3">';
    $out.= '<div id="sf-avatar-pool">';
	while (false !== ($file = readdir($dlist))) {
		if ($file != "." && $file != "..") {
			$found = false;
		    $out.= '<table width="100%">';
			$out.= '<tr>';
			$out.= '<td align="center" width="60%" ><img class="sfavatarpool" src="'.esc_url(SFAVATARPOOLURL.'/'.$file).'" alt="" /></td>';
			$out.= '<td align="center" width="30%" class="sflabel">';
			$out.= $file;
			$out.= '</td>';
			$out.= '<td align="center" width="9%" class="sflabel">';
            $site = esc_url(SFHOMEURL."index.php?sp_ahah=profiles&amp;sfnonce=".wp_create_nonce('forum-ahah')."&amp;action=delavatar&amp;file=".$file);
			$out.= '<img src="'.SFCOMMONIMAGES.'delete.png" title="'.spa_text('Delete Avatar').'" alt="" onclick="spjDelRowReload(\''.$site.'\', \'sfreloadav\');" />';
			$out.= '</td>';
			$out.= '</tr>';
			$out.= '</table>';
		}
	}
	$out.= '</div>';
	$out.= '</td></tr>';
	closedir($dlist);

	echo $out;
}
?>