<?php
/**
 * Accordion Template Style Five
 *
 * @package Radiantthemes
 */

$output .= '<div class="radiantthemes-accordion-set">';
$output .= '<a href="#"><h4 class="panel-title">' . esc_html( $shortcode['radiant_accordiontitle'] ) . '</h4><i class="fa fa-angle-down"></i></a>';
$output .= '<div class="radiantthemes-accordion-content">';
$output .= '<p>' . $content . '</p>';
$output .= '</div>';
$output .= '</div>';
