<?php /* Template Name: Search Page */?>

<?php get_header(); ?>

<section class="">
    <div class="top">
        <img src="/wp-content/themes/zywnosc/img/przepisy.webp" style="width:100%">
        <div class="container container-slider">
            <div class="text">
                <h1>Wyniki wyszukiwania</h1>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row">
            <?php
            global $wp_query;
            $total_results = $wp_query->found_posts;
            ?>

            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-xl-3">
                    <article class="blog__post">
                        <a href="<?php echo the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($total_results->ID), 'thumbnail' ); ?>" class="blog__image" alt="<?php echo apply_filters('the_title', $total_results->post->post_title); ?>"></a>
                        <div class="blog__content">
                            <h3 class="blog__title"><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php echo the_permalink(); ?>" class="blog__link">Czytaj więcej...</a>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
