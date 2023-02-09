<?php

    //Remove Gutenberg Block Library CSS from loading on the frontend // NO USAR ESTILOS DE GUTENBERG
    function smartwp_remove_wp_block_library_css(){
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
    } 
    add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

    // HABILITAR IMÁGENES DESTACADAS EN NUESTRO TEMA // AÑADIR SOPORTE PARA...
    add_theme_support ( 'post-thumbnails' );
    add_theme_support ( 'title-tag' );
    // ELIMINAR BASURA TAMAÑOS IMAGENES QUE NO NECESITO
    remove_image_size ( '1536x1536' );
    remove_image_size ( '2048x2048' );

    //REGISTRO DE MENÚS: 1er parámetro: ID, 2º parámetro: nombre en Wordpress
    register_nav_menu ( 'top', 'Menú superior' );
    register_nav_menu ( 'footer-left', 'Menú pie de página (izquierda)' );
    register_nav_menu ( 'footer-right', 'Menú pie de página (derecha)' );

    //REGISTRO SIDEBARS
    register_sidebar ( array
    (
        'id' => 'post-sidebar',
        'name' => 'Sidebar de las entradas',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>'
    ));

    register_sidebar ( array
    (
        'id' => 'page-sidebar',
        'name' => 'Sidebar de las páginas',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>'
    ));

    
?>