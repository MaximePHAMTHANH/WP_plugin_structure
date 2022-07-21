<?php
/*
Plugin Name: Blanck
Plugin URI: 
Description: Blanck
Author: Maxime Pham Thanh
Author URI: 
Version: 1.0
*/

if (!defined('ABSPATH') ){
	die;
}


function Blanck($atts, $content=null) { 

       wp_register_style('Blanck_namespace', plugins_url('Blanck.css',__FILE__ ));
       wp_enqueue_style('Blanck_namespace'); 
       wp_register_script( 'Blanck_namespace_js', plugins_url( 'Blanck.js' , __FILE__ ) );
       wp_enqueue_script( 'Blanck_namespace_js' );
       

       $attributes = shortcode_atts( array('id' => 'The Id','type' => 'The Type'), $atts );


       echo($attributes['id']." and ".$attributes['type']);


}


add_shortcode('Blanck', 'Blanck');  

