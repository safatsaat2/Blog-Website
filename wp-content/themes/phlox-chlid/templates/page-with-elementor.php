<?php
/** 
 * 
 * Template Name: Page With Elementor
*/

get_header();
?>

<?php 
echo 'Before shortcode';
echo "<br>";
echo do_shortcode('[elementor-template, id="71"]');
echo "<br>";
echo 'After shortcode';
?>

<?php
get_footer();

