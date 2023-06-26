<?php

/**
 * Theme helpers.
 */

namespace App;

function excerpt_or_content($post, $words)
{
    $excerpt = "";

    // if excerpt exists
    if ($post->post_excerpt) {
        $excerpt = $post->post_excerpt;
    } else {
        $excerpt = $post->post_content;
    }

    // remove tags and shortcodes
    $excerpt = strip_tags(strip_shortcodes($excerpt)); //Strips tags and images

    // cut by words
    $excerpt_words = explode(' ', $excerpt, $words + 1);

    if (count($excerpt_words) > $words) :
        $excerpt_trimmed_words = array_slice($excerpt_words, 0, $words);
        $excerpt = implode(' ', $excerpt_trimmed_words) . "...";
    endif;

    return $excerpt;
}

function get_image_sizes()
{
    global $_wp_additional_image_sizes;
    $sizes=[];
    $get_intermediate_image_sizes = get_intermediate_image_sizes();
    // Create the full array with sizes and crop info
    foreach ($get_intermediate_image_sizes as $_size) {
        if (in_array($_size, array('thumbnail', 'medium', 'large'))) {
            $sizes[$_size]['width']  = get_option($_size . '_size_w');
            $sizes[$_size]['height'] = get_option($_size . '_size_h');
            $sizes[$_size]['crop']   = (bool) get_option($_size . '_crop');
        } elseif (isset($_wp_additional_image_sizes[$_size])) {
            $sizes[$_size] = array(
                'width'  => $_wp_additional_image_sizes[$_size]['width'],
                'height' => $_wp_additional_image_sizes[$_size]['height'],
                'crop'   => $_wp_additional_image_sizes[$_size]['crop'],
            );
        }
    }
    return $sizes;
}