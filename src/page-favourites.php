<?php /* Template Name: Ulubione */ ?>

<?php get_header(); ?>

<section class="">
    <div class="top">
        <img src="/wp-content/themes/zywnosc/img/przepisy.webp" style="width:100%">
        <div class="container container-slider">
            <div class="text">
                <span>Ulubione przepisy i artykuły</span>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-l">Lista ulubionych</h2>
                <?php echo do_shortcode('[user_favorites include_thumbnails="true" include_excerpts="true"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
