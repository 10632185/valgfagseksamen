<?php 
add_theme_support('post-thumbnails');



function register_recipe_post_type() {
  register_post_type('recipe', [
    'labels' => [
      'name' => 'Recipes',
      'singular_name' => 'Recipe',
      'add_new_item' => 'Add New Recipe',
      'edit_item' => 'Edit Recipe',
      'all_items' => 'All Recipes',
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'recipes'],
    'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-carrot', 
  ]);
}
add_action('init', 'register_recipe_post_type');

function register_recipe_taxonomy() {
  register_taxonomy('recipe_type', 'recipe', [
    'label' => 'Recipe Type',
    'hierarchical' => true, 
    'show_in_rest' => true,
    'rewrite' => ['slug' => 'recipe-type'],
  ]);
}
add_action('init', 'register_recipe_taxonomy');

// ------------ WEEKLY CHEFS ----------------

function register_custom_chef_post_types() {
  // Weekly Chef
  register_post_type('weekly_chef', [
    'labels' => [
      'name' => 'Weekly Chefs',
      'singular_name' => 'Weekly Chef',
      'add_new_item' => 'Add New Weekly Chef',
      'edit_item' => 'Edit Weekly Chef',
      'all_items' => 'All Weekly Chefs',
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'weekly-chef'],
    'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-star-filled',
  ]);

  // Chef Profiles
  register_post_type('chef_profile', [
    'labels' => [
      'name' => 'Chef Profiles',
      'singular_name' => 'Chef Profile',
      'add_new_item' => 'Add New Chef Profile',
      'edit_item' => 'Edit Chef Profile',
      'all_items' => 'All Chef Profiles',
    ],
    'public' => true,
    'has_archive' => false,
    'rewrite' => ['slug' => 'chef-profile'],
    'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-groups',
  ]);
}
add_action('init', 'register_custom_chef_post_types');

// ------------- TIPS & ADVICE ------------
function create_tips_advice_cpt() {
    $labels = array(
    'name' => 'Tips & Advice',
    'singular_name' => 'Tip',
    );

    $args = array(
    'label'=> 'Tips & Advice',
    'public' => true,
    'show_in_rest' => true, 
    'has_archive' => true,
    'supports' => array(
    'title', 'editor', 'thumbnail', 'author', 'excerpt', 'comments'),
    'menu_icon' => 'dashicons-lightbulb',
    );

    register_post_type('tips_advice', $args);
}
add_action('init', 'create_tips_advice_cpt');
