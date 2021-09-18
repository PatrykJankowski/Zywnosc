<?php get_header(); ?>

<section class="recipes__top">
    <div class="container recipes__container">
        <h1 class="recipes__header"><?php the_title(); ?></h1>
    </div>

    <?php
    if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    }
    ?>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="recipes__bar">
                <div class="recipes__date">
                    <svg width="34" height="34" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d)"><path d="M2.158 11.444V30a1 1 0 001 1h28a1 1 0 001-1V11.444m-30 0v-6.11a1 1 0 011-1h28a1 1 0 011 1v6.11m-30 0h30" stroke="#444" stroke-linejoin="round"/></g><g filter="url(#filter1_d)"><path d="M8.824 1v5" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter2_d)"><path d="M25.492 1v5" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter3_d)"><path d="M27.158 16h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter4_d)"><path d="M27.158 26h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter5_d)"><path d="M18.824 16h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter6_d)"><path d="M18.824 26h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter7_d)"><path d="M10.492 16H7.16" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter8_d)"><path d="M10.492 26H7.16" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter9_d)"><path d="M27.158 21h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter10_d)"><path d="M18.824 21h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter11_d)"><path d="M10.492 21H7.16" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><defs><filter id="filter0_d" x=".658" y="3.833" width="33" height="29.667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter1_d" x="7.324" y=".5" width="3" height="8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter2_d" x="23.992" y=".5" width="3" height="8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter3_d" x="22.324" y="15.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter4_d" x="22.324" y="25.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter5_d" x="13.99" y="15.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter6_d" x="13.99" y="25.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter7_d" x="5.658" y="15.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter8_d" x="5.658" y="25.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter9_d" x="22.324" y="20.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter10_d" x="13.99" y="20.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter11_d" x="5.658" y="20.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
                    <time class="time"><?php echo get_the_date(); ?></time>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="recipes__icons-bar">
                <div class="recipes__icon">
                    <svg width="28" height="27" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="13.881" cy="13.5" r="12.5" stroke="#43A628" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.882 21.833V13.5H5.55" stroke="#43A628" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>30 minut</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="header header--mb-xs"><?php the_title(); ?></h3>
                <div>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


