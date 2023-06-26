<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
* Remove emoji CDN hostname from DNS prefetching hints.
*
* @param array $urls URLs to print for resource hints.
* @param string $relation_type The relation type the URLs are printed for.
* @return array Difference betwen the two arrays.
*/
add_filter('wp_resource_hints', function ($urls, $relation_type) {
    if ('dns-prefetch' == $relation_type) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
   
        $urls = array_diff($urls, array( $emoji_svg_url ));
    }
   
    return $urls;
}, 10, 2);

/**
 * Disable the emoji's
 */
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

/**
* Filter function used to remove the tinymce emoji plugin.
*
* @param array $plugins
* @return array Difference betwen the two arrays
*/
add_filter('tiny_mce_plugins', function ($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array( 'wpemoji' ));
    } else {
        return array();
    }
});

// Remove all native Gutenberg blocks
add_filter( 'render_block', function ( $block_content, $block ) {
    if ( empty( trim( $block_content ) ) ) {
        return $block_content;
    }
    if(strpos($block['blockName'],'core') !== false || $block['blockName'] == null){
        $block_content = '<div class="container">' . $block_content  .'</div>';
    } else {
        return $block_content; 
    }
    return $block_content;
}, 10, 2 );