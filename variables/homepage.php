<?php

$image_ids = get_post_meta($post->ID, 'parallax');
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

//$thumb = '<img class="img-fluid" src="' . wp_get_attachment_url($image) . '"/>';
$parallax = wp_get_attachment_url($image);
}

$parallax_description = get_post_meta($post->ID, 'parallax_description', true);

$icon1 = get_post_meta($post->ID, 'icon1', true);
$icon1_url = get_post_meta($post->ID, 'icon1_url', true); 
$icon2 = get_post_meta($post->ID, 'icon2', true);
$icon2_url = get_post_meta($post->ID, 'icon2_url', true); 
$icon3 = get_post_meta($post->ID, 'icon3', true);
$icon3_url = get_post_meta($post->ID, 'icon3_url', true); 

$image_ids = get_post_meta($post->ID, 'parallax_second');
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

//$thumb = '<img class="img-fluid" src="' . wp_get_attachment_url($image) . '"/>';
$parallax_second = wp_get_attachment_url($image);
}

$icon4 = get_post_meta($post->ID, 'icon4', true);
$icon4_url = get_post_meta($post->ID, 'icon4_url', true); 
$icon5 = get_post_meta($post->ID, 'icon5', true);
$icon5_url = get_post_meta($post->ID, 'icon5_url', true); 
$icon6 = get_post_meta($post->ID, 'icon6', true);
$icon6_url = get_post_meta($post->ID, 'icon6_url', true); 
