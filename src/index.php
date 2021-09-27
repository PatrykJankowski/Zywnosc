<?php get_header(); ?>

<?php
global $wp_query;
$paged = get_query_var('paged', 1);

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 7,
    'paged' => $paged
);
$posts = new WP_Query($args);
?>

<section class="section-paddings-xxl">
    <div class="container">

        <?php $counter = 0 ?>

        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <?php if ($counter == 0) : ?>
                <div class="row g-0 mb-l flex-column-reverse flex-xl-row">
                    <div class="col-xl-6">
                        <div class="blog__main-content">
                            <div class="blog__date"><?php echo apply_filters('the_date', mysql2date('d/m/Y', $posts->post->post_date)); ?></div>
                            <h3 class="blog__main-title"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h3>
                            <?php echo wp_trim_words(wp_strip_all_tags(apply_filters( 'the_content', $posts->post->post_content)), 60, '...'); ?>
                            <a href="<?php echo the_permalink(); ?>" class="blog__link blog__link--reverted">Czytaj więcej...</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>" class="blog__main-image" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>">
                    </div>
                </div>
            <?php endif ?>

            <?php if ($counter == 1 || $counter == 4) : ?>
                <div class="row mb-l">
            <?php endif ?>

            <?php if ($counter != 0) : ?>
                <div class="col-xl-4">
                    <article class="blog__post">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>" class="blog__image" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>">
                        <div class="blog__content">
                            <div class="blog__date"><?php echo apply_filters('the_date', mysql2date('d/m/Y', $posts->post->post_date)); ?></div>
                            <h3 class="blog__title"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h3>
                            <?php echo wp_trim_words(wp_strip_all_tags(apply_filters( 'the_content', $posts->post->post_content)), 60, '...'); ?>
                            <a href="<?php echo the_permalink(); ?>" class="blog__link">Czytaj więcej...</a>
                        </div>
                    </article>
                </div>
            <?php endif ?>

            <?php if ($counter == 3 || $counter == 6) : ?>
                </div>
            <?php endif ?>

            <?php $counter++; ?>

        <?php endwhile; ?>

        <?php
        wp_reset_query();

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

<?php get_footer(); ?>
