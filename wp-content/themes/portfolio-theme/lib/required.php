<?php 

// CHECK SERVER PHP VERSION

// if (version_compare('7.4', phpversion(), '>')){
//     die('You must be using PHP 7.4 or greater.');
// }

// CHECK WP VERSION

if (version_compare($GLOBALS['wp_version'], '5.5.1', '<')){
    die('WP theme only works in WordPress 5.5 or later. Please upgrade your WP site.');
}

