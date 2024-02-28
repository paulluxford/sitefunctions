<?php
/*
Plugin Name: Site Functions
Description: Important plugin
Version: 1.0
Author: Gold Coast Business Websites
*/

// Security check to prevent direct access to the plugin file
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Register Year Shortcode
function year_shortcode () {
$year = date_i18n ('Y');
return $year;
}
add_shortcode ('year', 'year_shortcode');

// Add Google Analytics Script
add_action('wp_head', 'wpb_add_googleanalytics');
function wpb_add_googleanalytics() { ?>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EGM6YXTRPY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-EGM6YXTRPY');
    </script>
    <!-- End Google Analytics -->
<?php } ?>
