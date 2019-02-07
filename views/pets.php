<?php
$image_ids = get_post_meta($post->ID, 'pet_image');
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

//$thumb = '<img class="img-fluid" src="' . wp_get_attachment_url($image) . '"/>';
$pet_image_main = wp_get_attachment_url($image);
}


$image_ids = get_post_meta($post->ID, 'another_pet_image_1', false);
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

$adi1 = wp_get_attachment_url($image);
}

$image_ids = get_post_meta($post->ID, 'another_pet_image_2', false);
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

$adi2 = wp_get_attachment_url($image);
}

$image_ids = get_post_meta($post->ID, 'another_pet_image_3', false);
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

$adi3 = wp_get_attachment_url($image);
}

$image_ids = get_post_meta($post->ID, 'another_pet_image_4', false);
foreach ($image_ids as $image)
{
$myupload = get_post_meta($image);

$adi4 = wp_get_attachment_url($image);
}