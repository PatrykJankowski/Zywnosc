<?php /* Template Name: Promocje */ ?>

<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo do_shortcode('[sale_products columns="5" order="asc"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
