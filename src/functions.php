<?php

add_filter('wp_enqueue_scripts', 'remove_shit', PHP_INT_MAX);

function remove_shit() {
    //wp_dequeue_style('wp-block-library');
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

// change woocommerce gallery image size
add_filter( 'woocommerce_get_image_size_single', 'override_woocommerce_image_size_single' );
function override_woocommerce_image_size_single( $size ) {
    // Single product image size
    return array(
        'width'  => '',
        'height' => 500,
        'crop'   => 1,
    );
}

// change woocommerce thumbnail image size
add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'override_woocommerce_image_size_gallery_thumbnail' );
function override_woocommerce_image_size_gallery_thumbnail( $size ) {
    // Gallery thumbnails: proportional, max width 200px
    return array(
        'width'  => '',
        'height' => 150,
        'crop'   => 0,
    );
}


add_filter( 'woocommerce_get_image_size_thumbnail', function( $size ) {
    return array('width' => 300, 'height' => 310, 'crop' => 0, );
} );



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
    register_nav_menu('footer-menu',__('Menu w stopce'));

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




add_action('wp_ajax_myfilter', 'filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_myfilter', 'filter_function');

function filter_function(){
    $args = array(
        'orderby' => 'date', // we will sort posts by date
        'order'	=> $_POST['date'] // ASC or DESC
    );

    // for taxonomies / categories
    if(isset($_POST['categoryfilter'])) {
        $args['tax_query'] = array(
            'relation' => 'OR',
        );

        foreach ($_POST['categoryfilter'] as $t) {
            $args['tax_query'][] = [
                'taxonomy' => 'kategorie_przepisow',
                'terms'    => $t,
                'field'    => 'id',
            ];
        }
    } else {
        $args['tax_query'][] = array(
            array(
                'taxonomy' => 'kategorie_przepisow',
                'field'    => 'id',
                'hide_empty' => false,
            )
        );
    }

    // create $args['meta_query'] array if one of the following fields is filled
    if( isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
        $args['meta_query'] = array( 'relation'=>'AND' ); // AND means that all conditions of meta_query should be true


    // if post thumbnail is set
    if( isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
        $args['meta_query'][] = array(
            'key' => '_thumbnail_id',
            'compare' => 'EXISTS'
        );
    // if you want to use multiple checkboxed, just duplicate the above 5 lines for each checkbox


    $query = new WP_Query( $args );
    echo '<div class="row">';

    while ($query->have_posts()) {
        $query->the_post();

            echo '<div class="col-6 col-md-4 col-xxl-3">
                  <a href="';
            echo the_permalink();
            echo '" class="recipes__wrapper">
                <article class="recipes__post">
                    <img src="';
            echo wp_get_attachment_url(get_post_thumbnail_id($query->ID), 'thumbnail');
            echo '" class="recipes__image" alt="';
            echo apply_filters('the_title', $query->post->post_title);
            echo '">
                  <div class="recipes__content">
                     <h4 class="recipes__title">';
            echo apply_filters('the_title', $query->post->post_title);
            echo '</h3>';
            echo '</div>
                </article>
                </a>
            </div>';

    wp_reset_postdata();
    }
    echo '</div>';

    die();
}



/**
 * Change number of related products output
 */
function woo_related_products_limit() {
    global $product;

    $args['posts_per_page'] = 6;
    return $args;
}
add_filter('woocommerce_output_related_products_args', 'jk_related_products_args', 20);
function jk_related_products_args( $args ) {
    $args['posts_per_page'] = 6;
    $args['columns'] = 6;
    return $args;
}


/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
    // $cols contains the current number of products per page based on the value stored on Options –> Reading
    // Return the number of products you wanna show per page.
    $cols = 28;
    return $cols;
}



//Sale percentage

add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3 );
function add_percentage_to_sale_badge( $html, $post, $product ) {

    if( $product->is_type('variable')){
        $percentages = array();

        // Get all variation prices
        $prices = $product->get_variation_prices();

        // Loop through variation prices
        foreach( $prices['price'] as $key => $price ){
            // Only on sale variations
            if( $prices['regular_price'][$key] !== $price ){
                // Calculate and set in the array the percentage for each variation on sale
                $percentages[] = round( 100 - ( floatval($prices['sale_price'][$key]) / floatval($prices['regular_price'][$key]) * 100 ) );
            }
        }
        // We keep the highest value
        $percentage = max($percentages) . '%';

    } elseif( $product->is_type('grouped') ){
        $percentages = array();

        // Get all variation prices
        $children_ids = $product->get_children();

        // Loop through variation prices
        foreach( $children_ids as $child_id ){
            $child_product = wc_get_product($child_id);

            $regular_price = (float) $child_product->get_regular_price();
            $sale_price    = (float) $child_product->get_sale_price();

            if ( $sale_price != 0 || ! empty($sale_price) ) {
                // Calculate and set in the array the percentage for each child on sale
                $percentages[] = round(100 - ($sale_price / $regular_price * 100));
            }
        }
        // We keep the highest value
        $percentage = max($percentages) . '%';

    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price    = (float) $product->get_sale_price();

        if ( $sale_price != 0 || ! empty($sale_price) ) {
            $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
        } else {
            return $html;
        }
    }
    return '<span class="onsale">' . esc_html__( '-', 'woocommerce' ) . $percentage . '</span>';
}









/* Move additional info tab to meta */
// Remove additional information tab
add_filter( 'woocommerce_product_tabs', 'remove_additional_information_tab', 100, 1 );
function remove_additional_information_tab( $tabs ) {
    unset($tabs['additional_information']);

    return $tabs;
}
// Add "additional information" after add to cart
add_action( 'woocommerce_single_product_summary', 'additional_info_under_add_to_cart', 35 );
function additional_info_under_add_to_cart() {
    global $product;

    if ( $product && ( $product->has_attributes() || apply_filters( 'wc_product_enable_dimensions_display', $product->has_weight() || $product->has_dimensions() ) ) ) {
        wc_display_product_attributes( $product );
    }
}
