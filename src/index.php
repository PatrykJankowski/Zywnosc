<?php get_header(); ?>

<?php
global $wp_query;
$paged = get_query_var('paged', 1);

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 12,
    'paged' => $paged
);
$posts = new WP_Query($args);
?>

<section>
    <div class="top top--woocommerce top--blog">
        <div class="slider__icons">
            <a href="#" target="_blank">
                <svg width="42" height="41" viewBox="0 0 42 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40.001 0H2.46313C1.56039 0 0.831055 0.726409 0.831055 1.62553V39.0128C0.831055 39.9119 1.56039 40.6383 2.46313 40.6383H40.001C40.9037 40.6383 41.633 39.9119 41.633 39.0128V1.62553C41.633 0.726409 40.9037 0 40.001 0ZM35.2883 11.8613H32.0293C29.4741 11.8613 28.9793 13.0703 28.9793 14.8482V18.7647H35.0792L34.2836 24.896H28.9793V40.6383H22.6193V24.9011H17.2998V18.7647H22.6193V14.2437C22.6193 8.9963 25.8376 6.13638 30.54 6.13638C32.7943 6.13638 34.7273 6.30402 35.2934 6.38021V11.8613H35.2883Z" fill="#DBEDD5"></path></svg>
            </a>
            <a href="#" target="_blank">
                <svg width="43" height="41" viewBox="0 0 43 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.4486 13.7241C17.6618 13.7241 14.5714 16.769 14.5714 20.5001C14.5714 24.2311 17.6618 27.276 21.4486 27.276C25.2354 27.276 28.3258 24.2311 28.3258 20.5001C28.3258 16.769 25.2354 13.7241 21.4486 13.7241ZM42.0749 20.5001C42.0749 17.6941 42.1007 14.9136 41.9408 12.1127C41.7808 8.85948 41.0276 5.97221 38.6131 3.59326C36.1935 1.20923 33.2682 0.472164 29.9664 0.314584C27.1185 0.157004 24.2964 0.18242 21.4538 0.18242C18.6059 0.18242 15.7838 0.157004 12.9411 0.314584C9.63928 0.472164 6.70887 1.21431 4.29439 3.59326C1.87474 5.97729 1.12666 8.85948 0.966727 12.1127C0.806793 14.9187 0.832589 17.6992 0.832589 20.5001C0.832589 23.3009 0.806793 26.0865 0.966727 28.8874C1.12666 32.1406 1.8799 35.0279 4.29439 37.4069C6.71403 39.7909 9.63928 40.528 12.9411 40.6855C15.789 40.8431 18.6111 40.8177 21.4538 40.8177C24.3016 40.8177 27.1237 40.8431 29.9664 40.6855C33.2682 40.528 36.1986 39.7858 38.6131 37.4069C41.0328 35.0228 41.7808 32.1406 41.9408 28.8874C42.1059 26.0865 42.0749 23.306 42.0749 20.5001ZM21.4486 30.9257C15.5929 30.9257 10.8672 26.2695 10.8672 20.5001C10.8672 14.7306 15.5929 10.0744 21.4486 10.0744C27.3042 10.0744 32.03 14.7306 32.03 20.5001C32.03 26.2695 27.3042 30.9257 21.4486 30.9257ZM32.4634 12.0822C31.0962 12.0822 29.9922 10.9944 29.9922 9.64738C29.9922 8.30033 31.0962 7.21252 32.4634 7.21252C33.8306 7.21252 34.9346 8.30033 34.9346 9.64738C34.935 9.96724 34.8714 10.284 34.7474 10.5796C34.6233 10.8752 34.4413 11.1438 34.2117 11.37C33.9822 11.5962 33.7096 11.7755 33.4096 11.8977C33.1096 12.0199 32.788 12.0826 32.4634 12.0822Z" fill="#DBEDD5"/></svg>
            </a>
        </div>
        <div class="container container-slider">
            <div class="text">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</section>

<section class="section pb-60">
    <div class="container">

        <div class="row">
            <div class="col-12 mb-m">
                <?php echo do_shortcode('[ivory-search id="1035" title="Default Search Form"]'); ?>
            </div>
        </div>

        <div class="row">

        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <div class="col-md-4 col-xl-3">
                <article class="blog__post">
                    <a href="<?php echo the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>" class="blog__image" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>"></a>
                    <div class="blog__content">
                        <div class="blog__date"><?php echo apply_filters('the_date', mysql2date('d.m.Y', $posts->post->post_date)); ?></div>
                        <h3 class="blog__title"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h3>
                        <?php echo wp_trim_words(wp_strip_all_tags(apply_filters( 'the_content', $posts->post->post_content)), 30, '...'); ?>
                        <a href="<?php echo the_permalink(); ?>" class="blog__link">Czytaj wi??cej...</a>
                    </div>
                </article>
            </div>
        <?php endwhile; ?>

        <?php
        wp_reset_query();

        // manage pagination based on custom query
        $GLOBALS['wp_query']->max_num_pages = $posts->max_num_pages;

        the_posts_pagination(array(
            'mid_size' => 1,
            'prev_text' => __( '???', 'textdomain' ),
            'next_text' => __( '???', 'textdomain' )
        ));
        ?>
        </div>
    </div>

</section>


<section class="section extra-text pb-20 pt-20">
    <div class="container">
        <div class="row">
            <p><?php echo get_field('text_seo', 56) ?></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
