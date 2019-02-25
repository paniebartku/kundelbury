<?php

$image_posts = get_post_meta($post->ID, 'post_image');
foreach ($image_posts as $post_image)
{
$myupload = get_post_meta($post_image);
$post_thumb = wp_get_attachment_url($post_image);
}
