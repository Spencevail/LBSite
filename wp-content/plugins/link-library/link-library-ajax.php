<?php
if( file_exists( '../../../wp-load.php' ) ) {
	require_once( '../../../wp-load.php');
}
// Oh dear, the plugin directory is not in the usual spot...
else if ( isset( $_REQUEST['xpath'] ) && file_exists( $_REQUEST['xpath'] . 'wp-load.php' ) ) {
	require_once( $_REQUEST['xpath'] .'wp-load.php');
}
	require_once('link-library.php');
	
	$catID = intval($_GET['id']);
	$settingsID = intval($_GET['settings']);
	$pageID = intval($_GET['linkresultpage']);
	
	$settingsname = 'AdminSettings' . $settingsID;
	
	echo $my_link_library_plugin->LinkLibrary($settingsname, true, true, false, false, false, false, '', false, false, false, false, '<br />', false, 
					'', '', '<li>', '</li>', '', '', false, '', '', false, '', '', '', 1, '', '', '', false, 'linklistcatname', false,
					0, '', '', '', false, true, false, $catID, '', false, 3, false, false, 1, '', '', '', 'ASC', 'ASC', 'name', false, 5, false,
					'', false, false, '', '', 'right', false, 900, 700, '', '', 'beforename', '', $pageID, false, false, 'AJAX',
					'1,2,3,4,5,6,7,8,9,10', true, 'false', 'primary', 'false', 'primary', 'false', false, '', '', '', '', '', '', '', '', '', 
					'', '', '', 'primary', 'primary', '', '');						
?>