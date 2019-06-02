<?php
// Theme thumbnails

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails
// Header logo
add_image_size( 'thumbnail_53x42', 53, 42, true );
// Section 1
add_image_size( 'thumbnail_921x713', 921, 713, true );
// Section 2 and 4
add_image_size( 'thumbnail_544x713', 544, 713, true );
// Section 3
add_image_size( 'thumbnail_485x713', 485, 713, true );

// Popup
add_image_size( 'thumbnail_1248x297', 1248, 297, true );
add_image_size( 'thumbnail_1215x603', 1215, 603, true );
add_image_size( 'thumbnail_140x126', 140, 126, true );