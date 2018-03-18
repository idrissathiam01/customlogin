<?php
   /*
   Plugin Name: Custom Login Plugin 
   description: Example of action hook demonstrated by Andreas Lopez at WordCamp Miami 2018.  Implemented as plugin for more modular code. (As per Chris Flannagan)
   Author: Andreas Lopez
   License: GPL2
   */
?>
<?php
//'login_form' action hook fires after the "password" field in the login form.
function sample_theme_login_note() {
	?>
	<p style="font-weight: 700; font-size: .8em; text-align:center;">You are logging into Idrissa Thiam's WordPress WPCAMiami2018 practice site.<br><br>Child theme created using WP CLI.<br><br>WordPress installation created and pushed to GitHub using Amazon's Cloud9 IDE.<a href=http://www.c9.io>(http://www.c9.io)</a></br></br></p>
<?php
}
add_action('login_form','sample_theme_login_note'); //hook, function name

// Change the Login Logo via 'login_head' filter.
function sample_theme_login_logo() {
	echo '<style type="text/css">
		h1 a {
			background-image:url(https://media.licdn.com/dms/image/C5603AQFriQjM1e7Agg/profile-displayphoto-shrink_200_200/0?e=1526533200&v=alpha&t=CB8YvDeI8XWMPU2leGvBV2r7SwsXJJxarOMhYYFnKw8) !important;
			margin:0 auto;
			height: 210px !important;
			width: 210px !important;
			background-size: cover !important;
		}
		</style>';
//the WordPress logo is made with a background-image CSS command, so we have to override it with a filter hook and the appropriate '!important' tags.  The height, width and background-size commands are there to make sure the size is appropriate.
}
add_filter('login_head','sample_theme_login_logo');//hook, function name.
//The login_head filter can be used to filter the logo image on the WordPress login page.
//Note:  this is not the only possible use of this filter.  It can be used to add anything to the <head> section on the login page.
?>
