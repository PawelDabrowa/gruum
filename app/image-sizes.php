<?php

/**
 * Custom image sizes
 * https://developer.wordpress.org/reference/functions/add_image_size/
 */

add_image_size('small', 50, 50, false);
add_image_size('hero', 1920, 1080, true);
add_image_size('icon', 100, 100, false);
add_image_size('logo', 390, 220, true);
add_image_size('square', '345', '345', true);
add_image_size('medium-crop', '800', '600', true);
add_image_size('large-crop', '1024', '768', true);

/**
 * Show images to user (optional)
 */

add_filter('image_size_names_choose', function ($sizes) {
    return array_merge($sizes, [
        'medium-crop' => __('Medium Crop', 'sage'),
        'large-crop' => __('Large Crop', 'sage'),
    ]);
});
