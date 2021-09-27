<?php /* Template Name: Promocje */ ?>

<?php get_header(); ?>

<section class="">
    <div class="top">
        <img src="/sklep/wp-content/themes/zywnosc/img/przepisy.webp" style="width:100%">
        <div class="container container-slider">
            <div class="text">
                <span>Promocje</span>
            </div>
        </div>
    </div>
</section>

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
