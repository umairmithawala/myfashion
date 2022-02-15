<?php
/*
Plugin Name:feedback
Author:Myfashion
Description: This plugin is used to collect user feedback
*/
function calladd_data()
{
	include "adddata.php";
}
function call_about()
{
	include "about.php";
}
function call_viewfeedback()
{
	include "viewfeedback.php";
}
function menu_call()
{
add_menu_page("feedback","view feedback","manage_options","feedback","call_viewfeedback");
add_submenu_page("feedback","feedback","new feedback","manage_options","newdata","calladd_data");
}
add_action("admin_menu","menu_call");
add_shortcode('viewFeedbackLayout','calladd_data');


?>
