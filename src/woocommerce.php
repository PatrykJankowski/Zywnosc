<?php get_header(); ?>

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


