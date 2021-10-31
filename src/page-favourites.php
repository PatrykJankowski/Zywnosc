<?php /* Template Name: Ulubione */ ?>

<?php get_header(); ?>

<section class="">
    <div class="top">
        <img src="/wp-content/themes/zywnosc/img/przepisy.webp" style="width:100%">
        <div class="container container-slider">
            <div class="text">
                <h1>Ulubione przepisy i artykuły</h1>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo do_shortcode('[user_favorites include_thumbnails="true" include_excerpts="true"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
