<?php
/*
Plugin Name: Until Shortcode
Description: Display content only until a specified date using [until yyyymmdd]...[/]until.
Version: 1.0
Author: PLUG-LAB
*/

function shortcode_until($atts, $content = null) {
    if (!$content || !isset($atts[0])) return '';

    $today = current_time('Ymd'); // WordPressのタイムゾーンに基づく
    $deadline = $atts[0];

    return ($today <= $deadline) ? do_shortcode($content) : '';
}

add_shortcode('until', 'shortcode_until');
?>
