<?php

function ngo_widgets_init() {
  register_sidebar( array(
      'name'          => __( 'Primary Sidebar', 'ngo' ),
      'id'            => 'sidebar-1',
      'before_widget' => '<aside id="%1$s" class="widget %1$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
      'name'          => __( 'Secondary Sidebar', 'ngo' ),
      'id'            => 'sidebar-2',
      'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
      'after_widget'  => '</li></ul>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'footer1', 'ngo' ),
    'id'            => 'sidebar-3',
    'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li></ul>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );
register_sidebar( array(
    'name'          => __( 'footer2', 'ngo' ),
    'id'            => 'sidebar-4',
    'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li></ul>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );
register_sidebar( array(
    'name'          => __( 'footer3', 'ngo' ),
    'id'            => 'sidebar-5',
    'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li></ul>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );
register_sidebar( array(
    'name'          => __( 'footer4', 'ngo' ),
    'id'            => 'sidebar-6',
    'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li></ul>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );
}
add_action('widgets_init','ngo_widgets_init');