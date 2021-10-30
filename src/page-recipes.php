<?php /* Template Name: Przepisy */ ?>

<?php get_header(); ?>

<?php
global $wp_query;
$paged = get_query_var('paged', 1);

$args = array(
    'post_type' => 'przepisy',
    'post_status' => 'publish',
    'posts_per_page' => 7,
    'paged' => $paged
);
$posts = new WP_Query($args);
?>

<section class="">
    <div class="top">
        <img src="/wp-content/themes/zywnosc/img/przepisy.webp" style="width:100%">
        <div class="container container-slider">
            <div class="text">
                <span>Przepisy</span>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter" class="recipes__filters">
                    <?php
                    if( $terms = get_terms( array(
                        'taxonomy' => 'kategorie_przepisow',
                        'orderby' => 'name'
                    ) ) ) :
                        foreach ( $terms as $term ) :
                            echo '<label><input type="checkbox" checked name="categoryfilter[]" value="' . $term->term_id . '"><span>' . $term->name . '</span></label>';
                        endforeach;
                    endif;
                    ?>

                    <div id="loader" style="margin-top: 10px"></div>
                    <input type="hidden" name="action" value="myfilter">
                </form>
            </div>

            <div class="col-lg-9">
                <div id="response">

                    <?php $counter = 1 ?>

                    <?php while ($posts->have_posts()) : $posts->the_post(); ?>

                        <?php if ($counter == 1 or ($counter - 1) % 4 == 0) : ?>
                        <div class="row">
                        <?php endif; ?>

                            <div class="col-xl-3">
                                <a href="<?php echo the_permalink(); ?>" class="recipes__wrapper">
                                    <article class="recipes__post">
                                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>" class="blog__image" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>">
                                        <div class="recipes__content">
                                            <h4 class="recipes__title"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h4>
                                        </div>
                                    </article>
                                </a>
                            </div>

                            <?php if ($counter % 4 == 0) : ?>
                            </div>
                            <?php endif; ?>

                        <?php $counter++; ?>

                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>

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
