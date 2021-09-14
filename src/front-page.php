<?php get_header(); ?>

<section class="slider">
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="slide fade">
            <img src="/sklep/wp-content/themes/zywnosc/img/slide1.webp" style="width:100%">
            <div class="container container-slider">
                <div class="text">
                    <span>Zdrowe, dietetyczne, odżywcze? Sprawdź nasze produkty!</span>
                    <a class="button" href="#">Czytaj więcej</a>
                </div>
            </div>
        </div>

        <div class="slide fade">
            <img src="/sklep/wp-content/themes/zywnosc/img/slide1.webp" style="width:100%">
            <div class="container container-slider">
                <div class="text">
                    <span>Zdrowe, dietetyczne, odżywcze?</span>
                    <a class="button" href="#">Czytaj więcej</a>
                </div>
            </div>
        </div>

        <div class="slide fade">
            <img src="/sklep/wp-content/themes/zywnosc/img/slide1.webp" style="width:100%">
            <div class="container container-slider">
                <div class="text">
                    <span>Sprawdź nasze produkty!</span>
                    <a class="button" href="#">Czytaj więcej</a>
                </div>
            </div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- The dots/circles -->
    <div class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="box">
                    <p>Przepisy</p>
                    <h3 class="box__header">Inspiracje kulinarne</h3>
                    <a class="box__link" href="#">Zobacz przepisy</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box box--box-2">
                    <p>Sklep</p>
                    <h3 class="box__header">Naturalna pielęgnacja</h3>
                    <a class="box__link" href="#">Idź do sklepu</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-100 pb-100 bg-gray1">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-center mb-l">Promocje</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php echo do_shortcode('[sale_products per_page="5" columns="5" order="asc"]'); ?>
            </div>
        </div>
    </div>
</section>

<section class="pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-center mb-l">Nowości</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php echo do_shortcode('[recent_products per_page="5" columns="5" order="dsc"]'); ?>
            </div>
        </div>
    </div>
</section>

<section class="pt-100 pb-100 bg-gray1">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-center mb-m">Miło Cie widzieć!</h4>
            </div>
        </div>
        <div class="row">
            <div class="col mb-l">
                <p class="text-featured text-center">Jestesmy sklepem i blogiem pelnym zdrowych, prostych przepisow, z ktorych mozesz korzystac kazdego dnia.<br>Zapoznaj się z naszą misją i ofertą! Jestesmy sklepem i blogiem pelnym zdrowych, prostych przepisow, z ktorych mozesz korzystac kazdego dnia. Zapoznaj się z naszą misją i ofertą!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <p class="text-center">Sprawdzone, zdrowe produkty, certyfikowane, eco produkty</p>
            </div>
            <div class="col-lg-3">
                <p class="text-center">Zdrowe zamienniki popularnych produktówZdrowe zamienniki popularnych produktów</p>
            </div>
            <div class="col-lg-3">
                <p class="text-center">Proste, odzywcze przepisy ujmujące produkty dostępne na stronieProste, odzywcze przepisy ujmujące produkty dostępne na stronie</p>
            </div>
            <div class="col-lg-3">
                <p class="text-center">Inspiracje w kwestii pielęgnacji oraz prowadzenia zdrowego trybu życia</p>
            </div>
        </div>
    </div>
</section>


<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4,
);
$posts = new WP_Query($args);
?>

<section class="pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-center mb-l">Przepisy</h4>
            </div>
        </div>
        <div class="row">
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>

                <div class="col-lg-3">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>" class="" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>">
                    <div class="">
                        <div class=""><?php echo apply_filters('the_date', mysql2date('d/m/Y', $posts->post->post_date)); ?></div>
                        <h3 class=""><?php echo apply_filters('the_title', $posts->post->post_title); ?></h3>
                        <?php echo wp_trim_words(wp_strip_all_tags(apply_filters( 'the_content', $posts->post->post_content)), 60, '...'); ?>
                        <a href="<?php echo the_permalink(); ?>" class="">Read more...</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>

<section class="pt-100 pb-100 bg-gray1">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-center mb-l">Blog</h4>
            </div>
        </div>
        <div class="row">
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>

                <div class="col-lg-3">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>" class="" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>">
                    <div class="">
                        <div class=""><?php echo apply_filters('the_date', mysql2date('d/m/Y', $posts->post->post_date)); ?></div>
                        <h3 class=""><?php echo apply_filters('the_title', $posts->post->post_title); ?></h3>
                        <?php echo wp_trim_words(wp_strip_all_tags(apply_filters( 'the_content', $posts->post->post_content)), 60, '...'); ?>
                        <a href="<?php echo the_permalink(); ?>" class="">Read more...</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>





<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "flex";
        dots[slideIndex-1].className += " active";
    }
</script>



<?php get_footer(); ?>
