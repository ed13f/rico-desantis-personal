<?php
  //support
  add_theme_support('menus');
  add_theme_support('automatic-feed-links');
  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-background' );
  add_theme_support( 'post-thumbnails' );

   // CSS styles
  function wp_portfolio_theme_style(){
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Ubuntu');
  }

  add_action('wp_enqueue_scripts', 'wp_portfolio_theme_style');

  //Javascript link
  function wp_portfolio_scripts(){
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array( 'jquery' ));
  }

  add_action( 'wp_enqueue_scripts', 'wp_portfolio_scripts' );

  //remove admin nav bar
  add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}


// add_action('init', function() {
//   $labels = [
//     'name' => _x('Case Studies', 'team', 'mdg'),
//     'singular_name' => _x('Case Study', 'team', 'mdg'),
//     'add_new' => _x('Add Case Study', 'team', 'mdg'),
//     'add_new_item' => _x('Add Case Study', 'team', 'mdg'),
//     'edit_item' => _x('Edit Case Study', 'team', 'mdg'),
//     'new_item' => _x('New Case Study', 'team', 'mdg'),
//     'view_item' => _x('View Case Study', 'team', 'mdg'),
//     'search_items' => _x('Search Case Studies', 'team', 'mdg'),
//     'not_found' => _x('No Case Studies found', 'team', 'mdg'),
//     'not_found_in_trash' => _x('No Case Studies found in Trash', 'team', 'mdg'),
//     'parent_item_colon' => _x('Parent Case Study:', 'team', 'mdg'),
//     'menu_name' => _x('Case Studies', 'team', 'mdg'),
//   ];

//   $args = [
//     'labels' => $labels,
//     'hierarchical' => true,
//     'description' => 'Case Studies',
//     'supports' => ['title', 'editor', 'thumbnail', 'revisions'],
//     'show_ui' => true,
//     'show_in_menu' => true,
//     'menu_position' => 6,
//     'menu_icon' => 'dashicons-search',
//     'show_in_nav_menus' => false,
//     'publicly_queryable' => true,
//     'exclude_from_search' => false,
//     'query_var' => true,
//     'can_export' => true,
//     'public' => true,
//     'has_archive' => false,
//     'capability_type' => 'post',
//     'taxonomies' => ['industry', 'medium'],
//   ];

//   register_post_type('case-study', $args);
// });

?>