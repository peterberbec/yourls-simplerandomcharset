<?php
/*
Plugin Name: Hexadecimal Keywords
Plugin URI: https://github.com/plttn/yourls-hexdec
Description: Makes YOURLS use hexadecimal incrementing keyword. Set to base 36.
Version: 1.0
Author: plttn
Author URI: http://plttn.me
*/

yourls_add_filter( 'random_keyword', 'plttn_hexdec_convert' );

function plttn_hexdec_convert( $in ) {
    $out = base_convert($in, 36, 16);
    return $out;
}
