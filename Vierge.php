<?php
/*
Plugin Name: Vierge
Plugin URI: 
Description: Vierge
Author: Maxime Pham Thanh
Author URI: 
Version: 1.0
*/

if (!defined('ABSPATH') ){
	die;
}

include 'Main.php';

class ViergePluging{

	function __construct(){
		add_action('admin_menu',array($this,'ViergeMenu'));
	}

	function ViergeMenu(){
		add_menu_page('Forms','Vierge','manage_options','ViergeMenu',array($this,'ViergeMenu_main'),'dashicons-awards',4);
	}

	function ViergeMenu_main(){
		echo '<div><h2>Vierge Plugin is active</h2></div>';
	}


}


if (class_exists('ViergePluging')){
	$Vierge = new ViergePluging();
}

