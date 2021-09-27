<?php get_header(); ?>

<section class="">
    <div class="top">
        <img src="/sklep/wp-content/themes/zywnosc/img/przepisy.webp" style="width:100%">
        <div class="container container-slider">
            <div class="text">
                <span>Sklep</span>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php if (is_active_sidebar('sidebar-1')) : ?>
                    <ul class="categories" role="complementary">
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="col-lg-9">
                <?php woocommerce_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


