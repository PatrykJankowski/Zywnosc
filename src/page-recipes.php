<?php /* Template Name: Przepisy */ ?>

<?php get_header(); ?>

<?php
global $wp_query;
$paged = get_query_var('paged', 1);

$args = array(
    'post_type' => 'przepisy',
    'post_status' => 'publish',
    'posts_per_page' => 100,
    'paged' => $paged
);
$posts = new WP_Query($args);
?>

<section>
    <div class="top top--woocommerce top--recipes">
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
                <h1>Przepisy</h1>
            </div>
        </div>
    </div>
</section>


<section class="section pb-80">
    <div class="container">

        <div class="row">
            <div class="col-lg-2">
                <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter" class="recipes__filters">
                    <?php
                    if( $terms = get_terms( array(
                        'taxonomy' => 'kategorie_przepisow',
                        'orderby' => 'name'
                    ) ) ) :
                        foreach ( $terms as $term ) :
                            echo '<label class="checkbox-container">' . $term->name . '<input type="checkbox" checked name="categoryfilter[]" value="' . $term->term_id . '"><span class="checkmark"></span></label>';
                        endforeach;
                    endif;
                    ?>
                    <div id="loader" style="margin-top: 10px"></div>
                    <input type="hidden" name="action" value="myfilter">
                </form>
            </div>

            <div class="col-lg-10">
                <div id="response">

                    <?php $counter = 1 ?>
                    <div class="row">
                    <?php while ($posts->have_posts()) : $posts->the_post(); ?>

                        <?php if ($counter == 1 or ($counter - 1) % 5 == 0) : ?>

                        <?php endif; ?>

                            <div class="col-6 col-md-4 col-xxl-3">
                                <a href="<?php echo the_permalink(); ?>" class="recipes__wrapper">
                                    <article class="recipes__post">
                                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>" class="recipes__image" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>">
                                        <div class="recipes__content">
                                            <h4 class="recipes__title"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h4>
                                        </div>
                                    </article>
                                </a>
                            </div>

                            <?php if ($counter % 5 == 0) : ?>

                            <?php endif; ?>

                        <?php $counter++; ?>

                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                </div>
                </div>
            </div>


        </div>


        <?php
        //manage pagination based on custom Query.
        $GLOBALS['wp_query']->max_num_pages = $posts->max_num_pages;

        the_posts_pagination(array(
            'mid_size' => 1,
            'prev_text' => __( '‹', 'textdomain' ),
            'next_text' => __( '›', 'textdomain' )
        ));
        ?>

    </div>

</section>


<section class="section extra-text pb-20 pt-20">
    <div class="container">
        <div class="row">
            <p>Orzechy są najbardziej wartościowe ze wszystkich bakalii. Co prawda mają dużo tłuszczu i kalorii, ale są to korzystne dla zdrowia nienasycone kwasy tłuszczowe, zmniejszające ryzyko chorób serca. Orzechy mają wiele właściwości korzystnych dla zdrowia. Orzechy są najbardziej wartościowe ze wszystkich bakalii. Co prawda mają dużo tłuszczu i kalorii, ale są to korzystne dla zdrowia nienasycone kwasy tłuszczowe, zmniejszające ryzyko chorób serca. Orzechy mają wiele właściwości korzystnych dla zdrowia. Orzechy są najbardziej wartościowe ze wszystkich bakalii. Co prawda mają dużo tłuszczu i kalorii, ale są to korzystne dla zdrowia nienasycone kwasy tłuszczowe, zmniejszające ryzyko chorób serca. Orzechy mają wiele właściwości korzystnych dla zdrowia.</p>
        </div>
    </div>
</section>

<script>
    jQuery(function($){
        $('input[name="categoryfilter[]"]').click(function(){
            var filter = $('#filter');
            $.ajax({
                url:filter.attr('action'),
                data:filter.serialize(), // form data
                type:filter.attr('method'), // POST
                beforeSend:function(xhr){
                    filter.find('#loader').text('Przetwarzanie...'); // changing the button label
                },
                success:function(data){
                    filter.find('#loader').text(''); // changing the button label back
                    $('#response').html(data); // insert data
                }
            });
            //return false;
        });
    });
</script>

<?php get_footer(); ?>
