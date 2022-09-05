<?php
/*
Plugin Name: Convert
Plugin URI: 
Description: Convert
Author: Maxime Pham Thanh
Author URI: 
Version: 1.0
*/

if (!defined('ABSPATH') ){die;}

function Convert($atts, $content=null) { 

       wp_register_style('Convert_namespace', plugins_url('Convert.css',__FILE__ ));
       wp_enqueue_style('Convert_namespace'); 
       wp_register_script('Convert_namespace_js', plugins_url( 'Convert.js' , __FILE__ ) );
       wp_enqueue_script('Convert_namespace_js');
       wp_register_script('Convert_namespace_js_axios','https://unpkg.com/axios/dist/axios.min.js');
       wp_enqueue_script('Convert_namespace_js_axios');

       $attributes = shortcode_atts( array('id' => 'The Id','type' => 'The Type'), $atts );

       echo('
		<div class="content">
			<p>This is a converter</p>
		</div>
       	');
}

add_shortcode('Convert', 'Convert');  

