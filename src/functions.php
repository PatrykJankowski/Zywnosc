<?php

add_filter('wp_enqueue_scripts', 'remove_shit', PHP_INT_MAX);

function remove_shit() {
    wp_dequeue_style('wp-block-library');
    //wp_dequeue_style( 'contact-form-7' );
}

add_action('init', function() {
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}, PHP_INT_MAX - 1);



add_action('after_setup_theme', 'setup');
function setup() {
    load_theme_textdomain( 'zywnosc', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    //global $content_width;
    //if (!isset($content_width)) $content_width = 640;
    register_nav_menu('nav-menu',__('Menu nawigacyjne'));
    register_nav_menu('nav-menu-mobile',__('Menu mobilne'));

    add_theme_support( 'woocommerce');
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}


/* Filter menu classes and ids */
function nav_menu_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current_page_item', 'current-menu-ancestor', 'current_page_parent')) : '';
}
add_filter('nav_menu_css_class', 'nav_menu_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'nav_menu_attributes_filter', 100, 1);
add_filter('page_css_class', 'nav_menu_attributes_filter', 100, 1);


add_filter( 'document_title_separator', 'cyb_document_title_separator' );
function cyb_document_title_separator( $sep ) {
    return "|";
}

add_filter( 'the_title', 'title' );
function title( $title ) {
    if ( $title == '' ) {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter( 'wp_title', 'filter_wp_title' );
function filter_wp_title( $title ) {
    return $title . esc_attr( get_bloginfo( 'name' ) );
}



/*add_action('widgets_init', 'widgets_init');
function widgets_init()
{
    register_sidebar(array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
}*/

function zywnosc_widgets_init() {
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'zywnosc'),
        )
    );
}
add_action( 'widgets_init', 'zywnosc_widgets_init' );










add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    $total = WC()->cart->total;
    ?>
    <div id="cart-counter">
        <div class="mini-cart__counter"><?php echo $items_count ? $items_count : '0'; ?></div>
        <div class="mini-cart__price">(<?php echo $total ? $total : '0' ?> zł)</div>
    </div>
    <?php
    $fragments['#cart-counter'] = ob_get_clean();
    return $fragments;
}




