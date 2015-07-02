 <?php 
/*
Plugin Name: Greet User
*/ 

$username_get = $_GET['user'];
$username_post = $_POST['name_of_user'];	

function greet_user() {
	global $username_get;
	
	if( $username_get ){
		echo "Hi ". $username_get ."!";
	} else {
		echo "Why not tell me your name, by adding ?name=YOUR NAME to the URL above ^";
	}
}

function store_user_names(){
	global $username_get;
	global $username_post;

	if( $username_get ){ 
		$username_post = $username_get;
		echo $username_post;
	}
	 
}

function greet_user_shortcode( $atts, $content, $tag ){
	greet_user();
	store_user_names();
}
add_shortcode('greet_user', 'greet_user_shortcode'); 
?>