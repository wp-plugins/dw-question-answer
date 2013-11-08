<?php  

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$template = get_option('template');

switch( $template ) {
    case 'twentyeleven' :
        echo '<div id="primary"><div role="main" class="dwqa-container">';
        break;
    case 'twentytwelve' :
        echo '<div id="primary"><div role="main" class="dwqa-container">';
        break;
    case 'twentythirteen' :
        echo '<div id="primary" class="site-content"><div role="main" class="entry-content twentythirteen dwqa-container">';
        break;
    default :
        echo '<div class="dwqa-container">';
        break;
}

?>