<?php 
/*
Plugin Name: Greet User
*/ 
	function greet_user() {
		$username = $_GET['user'];
		if( $username ){
			echo "Hi ". $username ."!";
		} else {
			echo "Why not tell me your name";
		}
	}
	
	function greet_user_shortcode( $atts, $content, $tag ){
		greet_user();
	}
	add_shortcode('greet_user', 'greet_user_shortcode'); 
?>