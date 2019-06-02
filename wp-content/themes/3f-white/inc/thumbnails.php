<?php
// Theme thumbnails

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails
add_image_size( 'thumbnail_53x42', 53, 42, true );
add_image_size( 'thumbnail_1248x297', 1248, 297, true );
add_image_size( 'thumbnail_1215x603', 1215, 603, true );
add_image_size( 'thumbnail_140x126', 140, 126, true );