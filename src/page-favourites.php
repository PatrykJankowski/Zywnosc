<?php /* Template Name: Ulubione */ ?>

<?php get_header(); ?>


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo do_shortcode('[wp-favorite-posts]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
