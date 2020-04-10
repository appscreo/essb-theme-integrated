<?php

/**
 * Plugin Name: Easy Social Share Buttons for WordPress - Theme Integrated
 * Description: Example showing how to set license state to Theme Integrated for bundled in product versions of Easy Social Share Buttons for WordPress.
 * Page Plugin URI: http://go.appscreo.com/essb
 * Version: 1.0
 * Author: AppsCreo 
 * Author URI: https://socialsharingplugin.com
 */


add_filter('essb_is_theme_integrated', '__return_true');
