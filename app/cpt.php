<?php
namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/** Add Custom Post Type - Rooms */
// add_action('init', function () {
//     $labels = array(
//         'name' => _x('Rooms', 'post type general name', 'your_text_domain'),
//         'singular_name' => _x('Rooms', 'post type Singular name', 'your_text_domain'),
//         'add_new' => _x('Add Room', '', 'your_text_domain'),
//         'add_new_item' => __('Add New Room', 'your_text_domain'),
//         'edit_item' => __('Edit Room', 'your_text_domain'),
//         'new_item' => __('New Room', 'your_text_domain'),
//         'all_items' => __('All Rooms', 'your_text_domain'),
//         'view_item' => __('View Room', 'your_text_domain'),
//         'search_items' => __('Search Room', 'your_text_domain'),
//         'not_found' => __('No Room found', 'your_text_domain'),
//         'not_found_in_trash' => __('No Room on trash', 'your_text_domain'),
//         'parent_item_colon' => '',
//         'Room_name' => __('Room', 'your_text_domain')
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'rooms'),
//         'capability_type' => 'page',
//         // 'has_archive' => true,
//         'hierarchical' => true,
//         'menu_position' => null,
//         'menu_icon' => 'dashicons-admin-home',
//         'supports' => array('title', 'thumbnail','custom-fields', 'page-attributes')
//     );
//     $labels = array(
//         'name' => __('Categories'),
//         'singular_name' => __('Category'),
//         'search_items' => __('Search'),
//         'popular_items' => __('More Used'),
//         'all_items' => __('All Categories'),
//         'parent_item' => null,
//         'parent_item_colon' => null,
//         'edit_item' => __('Add new'),
//         'update_item' => __('Update'),
//         'add_new_item' => __('Add new Category'),
//         'new_item_name' => __('New')
//     );
//     register_taxonomy('room_category', array('rooms'), array(
// 		'hierarchical' => true,
// 		'labels' => $labels,
// 		'singular_label' => 'room_category',
// 		'all_items' => 'Category',
// 		'query_var' => true,
// 		'rewrite' => array('slug' => 'cat'))
//     );
//     register_post_type('rooms', $args);
//     flush_rewrite_rules();
// }, 0);

// /** Add Custom Post Type - Things To Do */
// add_action('init', function () {
//     $labels = array(
//         'name' => _x('Galleries', 'post type general name'),
//         'singular_name' => _x('Gallery', 'post type Singular name'),
//         'add_new' => _x('Add Gallery ', ''),
//         'add_new_item' => __('Add New Gallery'),
//         'edit_item' => __('Edit Gallery'),
//         'new_item' => __('New Gallery'),
//         'all_items' => __('All Galleries'),
//         'view_item' => __('View Gallery'),
//         'search_items' => __('Search Gallery'),
//         'not_found' => __('No Gallery'),
//         'not_found_in_trash' => __('No Gallery on trash'),
//         'parent_item_colon' => '',
//         'menu_name' => __('Things To Do')
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'gallery'),
//         'capability_type' => 'page',
//         'has_archive' => true,
//         'hierarchical' => true,
//         'menu_position' => null,
//         'menu_icon' => 'dashicons-format-gallery',
//         'supports' => array('title', 'thumbnail','custom-fields', 'page-attributes')
//     );
//     $labels = array(
//         'name' => __('Categories'),
//         'singular_name' => __('Category'),
//         'search_items' => __('Search'),
//         'popular_items' => __('More Used'),
//         'all_items' => __('All Categories'),
//         'parent_item' => null,
//         'parent_item_colon' => null,
//         'edit_item' => __('Add new'),
//         'update_item' => __('Update'),
//         'add_new_item' => __('Add new Category'),
//         'new_item_name' => __('New')
//     );
//     register_taxonomy('things_todo_category', array('gallery'), array(
// 		'hierarchical' => true,
// 		'labels' => $labels,
// 		'singular_label' => 'things_todo_category',
// 		'all_items' => 'Category',
// 		'query_var' => true,
// 		'rewrite' => array('slug' => 'cat'))
//     );
//     register_post_type('gallery', $args);
//     flush_rewrite_rules();
// }, 0);

// // Offers Gallery
// add_action('init', function () {
//     $labels = array(
//         'name' => _x('Offers', 'post type general name'),
//         'singular_name' => _x('Offers', 'post type Singular name'),
//         'add_new' => _x('Add Offer ', ''),
//         'add_new_item' => __('Add New Offer'),
//         'edit_item' => __('Edit Offer'),
//         'new_item' => __('New Offer'),
//         'all_items' => __('All Offers'),
//         'view_item' => __('View Offer'),
//         'search_items' => __('Search Offer'),
//         'not_found' => __('No Offer'),
//         'not_found_in_trash' => __('No Offer on trash'),
//         'parent_item_colon' => '',
//         'menu_name' => __('Offers')
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'offers'),
//         'capability_type' => 'page',
//         'has_archive' => true,
//         'hierarchical' => true,
//         'menu_position' => null,
//         'menu_icon' => 'dashicons-calendar',
//         'supports' => array('title', 'thumbnail','custom-fields', 'page-attributes')
//     );
//     $labels = array(
//         'name' => __('Categories'),
//         'singular_name' => __('Category'),
//         'search_items' => __('Search'),
//         'popular_items' => __('More Used'),
//         'all_items' => __('All Categories'),
//         'parent_item' => null,
//         'parent_item_colon' => null,
//         'edit_item' => __('Add new'),
//         'update_item' => __('Update'),
//         'add_new_item' => __('Add new Category'),
//         'new_item_name' => __('New')
//     );
//     register_taxonomy('offers_category', array('offers'), array(
// 		'hierarchical' => true,
// 		'labels' => $labels,
// 		'singular_label' => 'offers_category',
// 		'all_items' => 'Category',
// 		'query_var' => true,
// 		'rewrite' => array('slug' => 'cat'))
//     );
//     register_post_type('offers', $args);
//     flush_rewrite_rules();
// }, 0);

// /** Add Custom Post Type - Menu */
// add_action('init', function () {
//     $labels = array(
//         'name' => _x('Menu', 'post type general name', 'your_text_domain'),
//         'singular_name' => _x('Menu', 'post type Singular name', 'your_text_domain'),
//         'add_new' => _x('Add Menu', '', 'your_text_domain'),
//         'add_new_item' => __('Add New Menu', 'your_text_domain'),
//         'edit_item' => __('Edit Menu', 'your_text_domain'),
//         'new_item' => __('New Menu', 'your_text_domain'),
//         'all_items' => __('All Menu', 'your_text_domain'),
//         'view_item' => __('View Menu', 'your_text_domain'),
//         'search_items' => __('Search Menu', 'your_text_domain'),
//         'not_found' => __('No Menu found', 'your_text_domain'),
//         'not_found_in_trash' => __('No Menu on trash', 'your_text_domain'),
//         'parent_item_colon' => '',
//         'menu_name' => __('Menu', 'your_text_domain')
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'menu'),
//         'capability_type' => 'page',
//         'has_archive' => true,
//         'hierarchical' => true,
//         'menu_position' => null,
//         'menu_icon' => 'dashicons-list-view',
//         'supports' => array('title', 'thumbnail','custom-fields', 'page-attributes')
//     );
//     $labels = array(
//         'name' => __('Categories'),
//         'singular_name' => __('Category'),
//         'search_items' => __('Search'),
//         'popular_items' => __('More Used'),
//         'all_items' => __('All Categories'),
//         'parent_item' => null,
//         'parent_item_colon' => null,
//         'edit_item' => __('Add new'),
//         'update_item' => __('Update'),
//         'add_new_item' => __('Add new Category'),
//         'new_item_name' => __('New')
//     );
//     register_taxonomy('menu_category', array('menu'), array(
// 		'hierarchical' => true,
// 		'labels' => $labels,
// 		'singular_label' => 'menu_category',
// 		'all_items' => 'Category',
// 		'query_var' => true,
// 		'rewrite' => array('slug' => 'cat'))
//     );
//     register_post_type('menu', $args);
//     flush_rewrite_rules();
// }, 0);