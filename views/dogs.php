<?php
$image_ids = get_post_meta($post->ID, 'dogs_image');
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

//$thumb = '<img class="img-fluid" src="' . wp_get_attachment_url($image) . '"/>';
$dogs_image_main = wp_get_attachment_url($image);
}


$image_ids = get_post_meta($post->ID, 'another_dogs_image_1', false);
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

$adi1 = wp_get_attachment_url($image);
}

$image_ids = get_post_meta($post->ID, 'another_dogs_image_2', false);
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

$adi2 = wp_get_attachment_url($image);
}

$image_ids = get_post_meta($post->ID, 'another_dogs_image_3', false);
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

$adi3 = wp_get_attachment_url($image);
}

$image_ids = get_post_meta($post->ID, 'another_dogs_image_4', false);
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

$adi4 = wp_get_attachment_url($image);
}