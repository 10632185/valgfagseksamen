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
