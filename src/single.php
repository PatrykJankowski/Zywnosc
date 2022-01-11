<?php get_header(); ?>

<section class="recipes__top">
    <div class="container recipes__container">
        <h1 class="recipes__header"><?php the_title(); ?></h1>
    </div>

    <?php
        if ( get_field('img_top') ) { ?>
            <img src="<?php echo get_field('img_top'); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
        <?php } else {
            the_post_thumbnail();
        }
    ?>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="recipes__bar">
                    <div class="recipes__date">
                        <svg width="34" height="34" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d)"><path d="M2.158 11.444V30a1 1 0 001 1h28a1 1 0 001-1V11.444m-30 0v-6.11a1 1 0 011-1h28a1 1 0 011 1v6.11m-30 0h30" stroke="#444" stroke-linejoin="round"/></g><g filter="url(#filter1_d)"><path d="M8.824 1v5" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter2_d)"><path d="M25.492 1v5" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter3_d)"><path d="M27.158 16h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter4_d)"><path d="M27.158 26h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter5_d)"><path d="M18.824 16h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter6_d)"><path d="M18.824 26h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter7_d)"><path d="M10.492 16H7.16" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter8_d)"><path d="M10.492 26H7.16" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter9_d)"><path d="M27.158 21h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter10_d)"><path d="M18.824 21h-3.333" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#filter11_d)"><path d="M10.492 21H7.16" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><defs><filter id="filter0_d" x=".658" y="3.833" width="33" height="29.667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter1_d" x="7.324" y=".5" width="3" height="8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter2_d" x="23.992" y=".5" width="3" height="8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter3_d" x="22.324" y="15.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter4_d" x="22.324" y="25.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter5_d" x="13.99" y="15.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter6_d" x="13.99" y="25.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter7_d" x="5.658" y="15.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter8_d" x="5.658" y="25.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter9_d" x="22.324" y="20.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter10_d" x="13.99" y="20.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter11_d" x="5.658" y="20.5" width="6.333" height="3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
                        <time class="time"><?php echo get_the_date(); ?></time>
                    </div>

                     <?php
                        $categories = get_the_terms(get_the_ID(), 'kategorie_przepisow');
                        if ($categories):
                     ?>

                    <div class="recipes__categories">
                        <svg width="26" height="27" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#a)"><path d="M17.837 3.652 3.694 17.794M17.837 3.652l4.419 4.42m-4.42-4.42 1.945-1.945a1 1 0 0 1 1.414 0l3.006 3.005a1 1 0 0 1 0 1.415L22.256 8.07M8.114 22.213l-4.42-4.42m4.42 4.42L22.256 8.071M8.114 22.213 2.369 23.54l1.325-5.745" stroke="#444" stroke-linecap="round" stroke-linejoin="round"/></g><defs><filter id="a" x=".869" y=".914" width="25.125" height="25.125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_986_456"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_986_456" result="shape"/></filter></defs></svg>
                        Kategorie:
                        <?php
                        $max = count($categories);
                        foreach  ($categories as $index=>$category) {
                            echo $category->name;
                            if ($max - 1 != $index) echo ', ';
                        }
                        ?>
                    </div>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (is_singular( array('przepisy'))): ?>
<section>
    <div class="container">
        <div class="row">
            <div class="recipes__icons-bar">
                <?php if (get_field('recipe_time')) : ?>
                <div class="recipes__icon">
                    <svg width="28" height="27" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="13.881" cy="13.5" r="12.5" stroke="#43A628" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.882 21.833V13.5H5.55" stroke="#43A628" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span><?php echo get_field('recipe_time') ?></span>
                </div>
                <?php endif; ?>
                <?php if (get_field('recipe_amount')) : ?>
                <div class="recipes__icon">
                    <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.53704 0C7.1058 0 6.7558 0.349215 6.7558 0.781242V8.20305C6.7558 8.8632 6.4894 9.47335 6.00503 9.92178C5.48159 10.4077 5.19331 11.0366 5.19331 11.6936V23.4373C5.04644 23.4552 4.80035 23.4537 4.62457 23.4521L4.41207 23.4506L4.19957 23.4513C4.02301 23.4537 3.7777 23.4552 3.63083 23.4373V11.6929C3.63083 11.035 3.34177 10.4061 2.81912 9.92178C2.33475 9.47335 2.06834 8.8632 2.06834 8.20305V0.781242C2.06834 0.349215 1.71835 0 1.2871 0C0.855856 0 0.505859 0.349215 0.505859 0.781242V8.20305C0.505859 9.28663 0.961324 10.3312 1.75741 11.0679C1.87303 11.1757 2.06834 11.3991 2.06834 11.6929V23.4506C2.06834 23.9162 2.20819 24.2912 2.48318 24.5646C2.94724 25.0248 3.55739 24.9998 4.21207 24.9998C4.21207 24.9998 4.74019 24.9998 4.80426 24.9998C5.34644 24.9998 5.92534 24.9779 6.34096 24.5646C6.61596 24.2912 6.7558 23.9162 6.7558 23.4506V11.6929C6.7558 11.3999 6.95111 11.1749 7.06673 11.0671C7.86282 10.3312 8.31828 9.28663 8.31828 8.20305V0.781242C8.31828 0.349215 7.96829 0 7.53704 0Z" fill="#43A628"/>
                        <path d="M4.4121 8.98429C4.84335 8.98429 5.19334 8.63507 5.19334 8.20305V0.781242C5.19334 0.349215 4.84335 0 4.4121 0C3.98086 0 3.63086 0.349215 3.63086 0.781242V8.20305C3.63086 8.63507 3.98086 8.98429 4.4121 8.98429Z" fill="#43A628"/>
                        <path d="M17.1388 0C16.1997 0 15.363 0.630463 15.1037 1.5328L12.4732 10.6905C12.1615 11.6264 12.3131 12.6233 12.8904 13.4241C13.3107 14.0061 13.8998 14.4085 14.5701 14.5835V23.4373C14.5701 24.299 15.2708 24.9998 16.1326 24.9998H17.6943C18.556 24.9998 19.2567 24.299 19.2567 23.4373V2.11795C19.2567 0.949991 18.3068 0 17.1388 0ZM16.1318 23.4373V13.9022C16.1318 13.4702 15.7818 13.121 15.3505 13.121C14.8716 13.121 14.4373 12.8983 14.1576 12.51C13.8779 12.1218 13.8037 11.639 13.9646 11.1538L16.6044 1.96482C16.6724 1.72811 16.8919 1.56248 17.1388 1.56248C17.445 1.56248 17.6943 1.8117 17.6943 2.11795V23.4373H16.1318Z" fill="#43A628"/>
                    </svg>
                    <span><?php echo get_field('recipe_amount') ?></span>
                </div>
                <?php endif; ?>
                <?php if (get_field('recipe_difficulty')) : ?>
                <div class="recipes__icon">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.3422 2.34687C17.7294 2.325 17.1306 2.40781 16.5516 2.58672C15.5569 0.994531 13.7945 0 11.8797 0C9.96493 0 8.20257 0.994531 7.20864 2.58672C6.62957 2.40703 6.03636 2.32344 5.41564 2.34687C2.58314 2.43828 0.196929 4.80156 0.0971429 7.61562C0.0154286 9.92891 1.41636 12.0516 3.58257 12.8984C3.84579 13.0016 4.02257 13.2906 4.02257 13.6188V18.9188V24.2188C4.02257 24.6508 4.37457 25 4.80829 25H18.9511C19.3849 25 19.7369 24.6508 19.7369 24.2188V13.6188C19.7369 13.2961 19.9176 13 20.1776 12.8984C22.3446 12.0516 23.7448 9.92813 23.6623 7.61484C23.5617 4.80078 21.1747 2.43672 18.3422 2.34687ZM19.6025 11.4438C18.7429 11.7797 18.1654 12.6531 18.1654 13.6188V23.4375H5.594V20.3125H15.8083C16.242 20.3125 16.594 19.9633 16.594 19.5312C16.594 19.0992 16.242 18.75 15.8083 18.75H15.0226V14.8438C15.0226 14.4117 14.6706 14.0625 14.2369 14.0625C13.8031 14.0625 13.4511 14.4117 13.4511 14.8438V18.75H10.3083V14.8438C10.3083 14.4117 9.95629 14.0625 9.52257 14.0625C9.08886 14.0625 8.73686 14.4117 8.73686 14.8438V18.75H5.594V13.6188C5.594 12.6539 5.0165 11.7797 4.15693 11.4445C2.60986 10.8398 1.60886 9.32344 1.66779 7.67109C1.7385 5.66172 3.4435 3.97422 5.46671 3.90859C6.08036 3.89766 6.67907 4.01172 7.244 4.27188C7.43571 4.35938 7.65414 4.36719 7.85057 4.29453C8.04779 4.22109 8.20729 4.07266 8.29214 3.88125C8.92464 2.47266 10.3326 1.5625 11.8797 1.5625C13.4268 1.5625 14.8348 2.47266 15.4665 3.88125C15.4681 3.88438 15.4712 3.88672 15.4728 3.88984C15.6944 4.3875 15.8083 4.91875 15.8083 5.46875C15.8083 6.24062 15.582 6.9875 15.1538 7.62813C14.9134 7.9875 15.0124 8.47266 15.3738 8.71172C15.5074 8.8 15.6582 8.84219 15.8075 8.84219C16.0621 8.84219 16.3111 8.71953 16.4628 8.49375C17.0631 7.59531 17.3797 6.55 17.3797 5.46875C17.3797 4.98125 17.309 4.50469 17.1833 4.04219C17.5463 3.95 17.9171 3.90312 18.2911 3.90781C20.3151 3.97266 22.0194 5.66016 22.0909 7.66953C22.1506 9.32266 21.1504 10.8391 19.6025 11.4438Z" fill="#43A628"/>
                    </svg>
                    <span><?php echo get_field('recipe_difficulty') ?></span>
                </div>
                <?php endif; ?>
                <?php if (get_field('recipe_kcal')) : ?>
                <div class="recipes__icon">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.2559 2.34375H16.7559C15.573 0.86875 13.7801 0 11.8809 0C9.98164 0 8.18867 0.86875 7.00586 2.34375H2.50586C1.21367 2.34375 0.162109 3.39531 0.162109 4.6875V22.6562C0.162109 23.9484 1.21367 25 2.50586 25H21.2559C22.548 25 23.5996 23.9484 23.5996 22.6562V4.6875C23.5996 3.39531 22.548 2.34375 21.2559 2.34375ZM22.0371 22.6562C22.0371 23.0875 21.6863 23.4375 21.2559 23.4375H2.50586C2.07539 23.4375 1.72461 23.0875 1.72461 22.6562V4.6875C1.72461 4.25625 2.07539 3.90625 2.50586 3.90625H7.39648C7.65195 3.90625 7.89102 3.78203 8.03711 3.57188C8.91602 2.31406 10.3527 1.5625 11.8809 1.5625C13.409 1.5625 14.8457 2.31406 15.7246 3.57188C15.7277 3.57656 15.7324 3.57969 15.7363 3.58437C16.2801 4.37031 16.5684 5.29063 16.5684 6.25C16.5684 8.83516 14.466 10.9375 11.8809 10.9375C9.2957 10.9375 7.19336 8.83516 7.19336 6.25C7.19336 5.81797 6.84336 5.46875 6.41211 5.46875C5.98086 5.46875 5.63086 5.81797 5.63086 6.25C5.63086 9.69609 8.43477 12.5 11.8809 12.5C15.327 12.5 18.1309 9.69609 18.1309 6.25C18.1309 5.43516 17.9582 4.64687 17.6574 3.90625H21.2559C21.6863 3.90625 22.0371 4.25625 22.0371 4.6875V22.6562Z" fill="#43A628"/>
                        <path d="M11.8815 7.03121C12.03 7.03121 12.1808 6.98824 12.3144 6.89996L14.6581 5.33746C15.0167 5.09762 15.1136 4.61324 14.8745 4.25387C14.6347 3.89449 14.1503 3.79762 13.7909 4.03746L11.4472 5.59996C11.0886 5.8398 10.9917 6.32418 11.2308 6.68355C11.3815 6.90933 11.6292 7.03121 11.8815 7.03121Z" fill="#43A628"/>
                        <path d="M7.97461 16.4062H4.84961C4.41836 16.4062 4.06836 16.7555 4.06836 17.1875C4.06836 17.6195 4.41836 17.9688 4.84961 17.9688H7.97461C8.40586 17.9688 8.75586 17.6195 8.75586 17.1875C8.75586 16.7555 8.40586 16.4062 7.97461 16.4062Z" fill="#43A628"/>
                        <path d="M7.97461 19.5312H4.84961C4.41836 19.5312 4.06836 19.8805 4.06836 20.3125C4.06836 20.7445 4.41836 21.0938 4.84961 21.0938H7.97461C8.40586 21.0938 8.75586 20.7445 8.75586 20.3125C8.75586 19.8805 8.40586 19.5312 7.97461 19.5312Z" fill="#43A628"/>
                        <path d="M7.97461 13.2812H4.84961C4.41836 13.2812 4.06836 13.6305 4.06836 14.0625C4.06836 14.4945 4.41836 14.8438 4.84961 14.8438H7.97461C8.40586 14.8438 8.75586 14.4945 8.75586 14.0625C8.75586 13.6305 8.40586 13.2812 7.97461 13.2812Z" fill="#43A628"/>
                        <path d="M18.9121 16.4062H15.7871C15.3559 16.4062 15.0059 16.7555 15.0059 17.1875C15.0059 17.6195 15.3559 17.9688 15.7871 17.9688H18.9121C19.3434 17.9688 19.6934 17.6195 19.6934 17.1875C19.6934 16.7555 19.3434 16.4062 18.9121 16.4062Z" fill="#43A628"/>
                        <path d="M18.9121 19.5312H15.7871C15.3559 19.5312 15.0059 19.8805 15.0059 20.3125C15.0059 20.7445 15.3559 21.0938 15.7871 21.0938H18.9121C19.3434 21.0938 19.6934 20.7445 19.6934 20.3125C19.6934 19.8805 19.3434 19.5312 18.9121 19.5312Z" fill="#43A628"/>
                        <path d="M18.9121 13.2812H15.7871C15.3559 13.2812 15.0059 13.6305 15.0059 14.0625C15.0059 14.4945 15.3559 14.8438 15.7871 14.8438H18.9121C19.3434 14.8438 19.6934 14.4945 19.6934 14.0625C19.6934 13.6305 19.3434 13.2812 18.9121 13.2812Z" fill="#43A628"/>
                    </svg>
                    <span><?php echo get_field('recipe_kcal') ?></span>
                </div>
                <?php endif; ?>
                <?php if (get_field('recipe_kcal')) : ?>
                <div class="recipes__icon">
                    <svg width="17" height="25" viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.1934 15.2035C16.1934 9.94109 9.29875 0.686805 9.00496 0.295349C8.71039 -0.0984498 8.04937 -0.0984498 7.7548 0.295349C7.46102 0.686805 0.566406 9.94109 0.566406 15.2035C0.566406 18.557 1.96033 20.4885 3.13001 21.5175C4.34266 22.5841 5.90692 23.2334 7.59854 23.3865V24.2046C7.59854 24.6367 7.9478 24.9859 8.37988 24.9859C8.81197 24.9859 9.16123 24.6367 9.16123 24.2046V23.392C13.5805 23.0763 16.1934 20.0681 16.1934 15.2035ZM9.16123 21.8238V18.4367L13.4172 16.3083C13.8032 16.1153 13.9595 15.6457 13.7665 15.2597C13.5727 14.8737 13.1047 14.719 12.7179 14.9105L9.16123 16.6888V13.7478L11.8545 12.4008C12.2405 12.2078 12.3968 11.7382 12.2038 11.3522C12.01 10.9662 11.5404 10.8115 11.1552 11.0029L9.16123 12.0007V7.01494C9.16123 6.58285 8.81197 6.23359 8.37988 6.23359C7.9478 6.23359 7.59854 6.58285 7.59854 7.01494V12.0015L5.60375 11.0045C5.21777 10.8131 4.74896 10.9678 4.55519 11.3538C4.36219 11.7397 4.51846 12.2093 4.90445 12.4023L7.59854 13.7486V16.6896L4.04106 14.9112C3.65507 14.7198 3.18548 14.8745 2.99249 15.2605C2.7995 15.6465 2.95577 16.1161 3.34175 16.3091L7.59854 18.4367V21.8105C6.29837 21.6613 5.07634 21.1487 4.16295 20.3447C2.81356 19.1571 2.1291 17.4272 2.1291 15.2035C2.1291 11.3225 6.68436 4.50369 8.37988 2.09948C10.0754 4.50291 14.6307 11.3225 14.6307 15.2035C14.6307 20.3877 11.4936 21.6215 9.16123 21.8238Z" fill="#43A628"/>
                    </svg>
                    <span>wege</span>
                </div>
                <?php endif; ?>
                <div class="recipes__right">
                    <div class="recipes__icon recipes__icon--right btn-print" onclick="javascript:window.print()">
                        <svg width="61" height="60" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="30.592" cy="30" r="30" fill="#444"/><g filter="url(#a)"><path d="M39.26 36.419h1.889a1 1 0 0 0 1-1V24.58a1 1 0 0 0-1-1h-21.11a1 1 0 0 0-1 1V35.42a1 1 0 0 0 1 1h1.889" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#b)"><path d="M22.89 29.716a1 1 0 0 1 1-1h13.407a1 1 0 0 1 1 1v10.839a1 1 0 0 1-1 1H23.89a1 1 0 0 1-1-1V29.716Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#c)"><path d="M22.89 19.445a1 1 0 0 1 1-1h13.407a1 1 0 0 1 1 1v4.136H22.89v-4.136Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#d)"><path d="M26.1 31.925h8.987" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#e)"><path d="M26.1 38.345h8.987" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g><g filter="url(#f)"><path d="M26.1 35.136h8.987" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g><defs><filter id="a" x="17.289" y="22.83" width="26.609" height="16.339" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_986:542"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_986:542" result="shape"/></filter><filter id="b" x="21.141" y="27.966" width="18.906" height="16.339" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_986:542"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_986:542" result="shape"/></filter><filter id="c" x="21.141" y="17.695" width="18.906" height="8.636" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_986:542"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_986:542" result="shape"/></filter><filter id="d" x="24.35" y="31.175" width="12.486" height="3.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_986:542"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_986:542" result="shape"/></filter><filter id="e" x="24.35" y="37.595" width="12.486" height="3.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_986:542"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_986:542" result="shape"/></filter><filter id="f" x="24.35" y="34.386" width="12.486" height="3.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feGaussianBlur stdDeviation=".5"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_986:542"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_986:542" result="shape"/></filter></defs></svg>
                    </div>

                    <a href="#" class="recipes__icon recipes__icon--right btn-print" id="donwload-link" onClick="myFunction()">
                        <svg width="61" height="60" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="30.592" cy="30" r="30" fill="#444"/><path d="M21.23 31.444a.75.75 0 0 0-1.5 0h1.5Zm20.221 0a.75.75 0 0 0-1.5 0h1.5Zm-21.72 0v9.11h1.5v-9.11h-1.5Zm21.72 9.11v-9.11h-1.5v9.11h1.5Zm-1.75.25h-18.22v1.5H39.7v-1.5Zm.25-.25a.25.25 0 0 1-.25.25v1.5a1.75 1.75 0 0 0 1.75-1.75h-1.5Zm-20.22 0c0 .967.783 1.75 1.75 1.75v-1.5a.25.25 0 0 1-.25-.25h-1.5Z" fill="#fff"/><path d="M30.59 18.445v17.332m0 0L36.367 30m-5.777 5.777L24.812 30" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<script>
    function myFunction() {
        var content = document.documentElement.innerHTML;
        download(content, "index", "html")
    }
    function download(content, fileName, fileType) {
        var link = document.getElementById("donwload-link");
        var file = new Blob([content], {type: "html"});
        var donwloadFile = fileName + "." + fileType;
        link.href = URL.createObjectURL(file);
        link.download = donwloadFile
    }
</script>

<?php if (is_singular( array('przepisy'))): ?>
<section class="section relative przepisy">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="header header--mb-xs mt-n"><?php the_title(); ?></h2>
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



<?php else: ?>
    <section class="section woocommerce post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="header header--mb-xs mt-n"><?php the_title(); ?></h2>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php $featured_product_1 = get_field('product_1'); ?>
                <?php $featured_product_2 = get_field('product_2'); ?>
                <?php $featured_product_3 = get_field('product_3'); ?>
                <?php $featured_product_4 = get_field('product_4'); ?>
                <?php $featured_product_5 = get_field('product_5'); ?>
                <?php $product_1 = new WC_Product($featured_product_1->ID); ?>
                <?php $product_2 = new WC_Product($featured_product_2->ID); ?>
                <?php $product_3 = new WC_Product($featured_product_3->ID); ?>
                <?php $product_4 = new WC_Product($featured_product_4->ID); ?>
                <?php $product_5 = new WC_Product($featured_product_5->ID); ?>

                <?php if ($featured_product_1): ?>
                <div class="col-sm-3">
                    <?php if ($featured_product_1): ?>
                    <div class="post__related-products">
                        <h3 class="text-center mt-n">Powiązane produkty</h3>

                        <div class="post__related-product post__related-product--first product">
                            <a href="<?php echo get_permalink( $product_1->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($featured_product_1->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $featured_product_1->post->post_title); ?>"></a>
                            <?php echo esc_html( $featured_product_1->post_title ); ?>

                            <span class="price">
                                <?php if ($product_1->get_sale_price()): ?>
                                <del aria-hidden="true">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><?php echo $product_1->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                    </span>
                                </del>
                                <?php endif; ?>
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><?php echo $product_1->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                    </span>
                                </ins>
                            </span>

                            <a href="?add-to-cart=<?php echo $featured_product_1->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $featured_product_1->ID;?>" aria-label="Dodaj <?php echo $featured_product_1->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                        </div>
                        <?php endif; ?>

                        <?php if ($featured_product_2): ?>
                        <div class="post__related-product product">
                            <a href="<?php echo get_permalink( $product_2->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($featured_product_2->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $featured_product_2->post->post_title); ?>"></a>
                           <?php echo esc_html( $featured_product_2->post_title ); ?>

                            <span class="price">
                                <?php if ($product_2->get_sale_price()): ?>
                                    <del aria-hidden="true">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><?php echo $product_2->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                    </span>
                                </del>
                                <?php endif; ?>
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><?php echo $product_2->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                    </span>
                                </ins>
                            </span>

                            <a href="?add-to-cart=<?php echo $featured_product_2->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $featured_product_2->ID;?>" aria-label="Dodaj <?php echo $featured_product_2->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                        </div>
                        <?php endif; ?>

                        <?php if ($featured_product_3): ?>
                            <div class="post__related-product product">
                                <a href="<?php echo get_permalink( $product_3->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($featured_product_3->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $featured_product_3->post->post_title); ?>"></a>
                                <?php echo esc_html( $featured_product_3->post_title ); ?>

                                <span class="price">
                                <?php if ($product_3->get_sale_price()): ?>
                                    <del aria-hidden="true">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><?php echo $product_3->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                    </span>
                                </del>
                                <?php endif; ?>
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><?php echo $product_3->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                    </span>
                                </ins>
                            </span>

                                <a href="?add-to-cart=<?php echo $featured_product_3->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $featured_product_3->ID;?>" aria-label="Dodaj <?php echo $featured_product_3->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                            </div>
                        <?php endif; ?>

                        <?php if ($featured_product_4): ?>
                            <div class="post__related-product product">
                                <a href="<?php echo get_permalink( $product_4->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($featured_product_4->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $featured_product_4->post->post_title); ?>"></a>
                                <?php echo esc_html( $featured_product_4->post_title ); ?>

                                <span class="price">
                                <?php if ($product_4->get_sale_price()): ?>
                                    <del aria-hidden="true">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><?php echo $product_4->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                    </span>
                                </del>
                                <?php endif; ?>
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><?php echo $product_4->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                    </span>
                                </ins>
                            </span>

                                <a href="?add-to-cart=<?php echo $featured_product_4->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $featured_product_4->ID;?>" aria-label="Dodaj <?php echo $featured_product_4->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                            </div>
                        <?php endif; ?>

                        <?php if ($featured_product_5): ?>
                            <div class="post__related-product product">
                                <a href="<?php echo get_permalink( $product_5->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($featured_product_5->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $featured_product_5->post->post_title); ?>"></a>
                                <?php echo esc_html( $featured_product_5->post_title ); ?>

                                <span class="price">
                                <?php if ($product_5->get_sale_price()): ?>
                                    <del aria-hidden="true">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><?php echo $product_5->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                    </span>
                                </del>
                                <?php endif; ?>
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><?php echo $product_5->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                    </span>
                                </ins>
                            </span>

                                <a href="?add-to-cart=<?php echo $featured_product_5->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $featured_product_5->ID;?>" aria-label="Dodaj <?php echo $featured_product_5->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>





<?php
global $wp_query;

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4
);
$posts = new WP_Query($args);
$posts->set('posts_per_page', 4);
$posts->query($posts->query_vars);
?>

<?php if (!is_singular( array('przepisy'))): ?>

<section class="section bg-gray1 pt-60 pb-60 related">
    <h2>Podobne artykuły</h2>
    <div class="container">
        <div class="row">
                <?php if ($posts->have_posts()) { ?>
                    <?php while ($posts->have_posts()) {
                        $posts->the_post(); ?>
                        <div class="col-3">
                            <article class="blog__post">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>" class="blog__image" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>">
                                <div class="blog__content">
                                    <div class="blog__date"><?php echo apply_filters('the_date', mysql2date('d.m.Y', $posts->post->post_date)); ?></div>
                                    <h3 class="blog__title"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h3>
                                    <?php echo wp_trim_words(wp_strip_all_tags(apply_filters( 'the_content', $posts->post->post_content)), 30, '...'); ?>
                                    <a href="<?php echo the_permalink(); ?>" class="blog__link">Czytaj więcej...</a>
                                    <?php echo '<!-- (' . get_the_score() . ')-->'; ?>
                                </div>
                            </article>
                        </div>
                    <?php } // end while ?>
                <?php }?>
                <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<?php else: ?>

    <?php $recipe_product_1 = get_field('recipe_product_1'); ?>
    <?php $recipe_product_2 = get_field('recipe_product_2'); ?>
    <?php $recipe_product_3 = get_field('recipe_product_3'); ?>
    <?php $recipe_product_4 = get_field('recipe_product_4'); ?>
    <?php $recipe_product_5 = get_field('recipe_product_5'); ?>
    <?php $recipe_product_6 = get_field('recipe_product_6'); ?>
    <?php $product_1 = new WC_Product($recipe_product_1->ID); ?>
    <?php $product_2 = new WC_Product($recipe_product_2->ID); ?>
    <?php $product_3 = new WC_Product($recipe_product_3->ID); ?>
    <?php $product_4 = new WC_Product($recipe_product_4->ID); ?>
    <?php $product_5 = new WC_Product($recipe_product_5->ID); ?>
    <?php $product_6 = new WC_Product($recipe_product_6->ID); ?>

    <?php if ($recipe_product_1): ?>
    <section class="section bg-gray1 pt-60 pb-60 related woocommerce">
        <h2>Dodaj produkty do koszyka i odtwórz ten przepis!</h2>
        <div class="container">
            <div class="row">
                <?php if ($recipe_product_1): ?>
                <div class="col-sm-3 col-lg-2">
                    <div class="post__related-product post__related-product--first product">
                        <a href="<?php echo get_permalink( $product_1->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($recipe_product_1->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $recipe_product_1->post->post_title); ?>"></a>
                        <h4 class="woocommerce-loop-product__title"><?php echo esc_html( $recipe_product_1->post_title ); ?></h4>

                        <span class="price">
                            <?php if ($product_1->get_sale_price()): ?>
                                <del aria-hidden="true">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_1->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </del>
                            <?php endif; ?>
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_1->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </ins>
                        </span>

                        <a href="?add-to-cart=<?php echo $recipe_product_1->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $recipe_product_1->ID;?>" aria-label="Dodaj <?php echo $recipe_product_1->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ($recipe_product_2): ?>
                    <div class="col-sm-3 col-lg-2">
                        <div class="post__related-product post__related-product--first product">
                            <a href="<?php echo get_permalink( $product_2->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($recipe_product_2->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $recipe_product_2->post->post_title); ?>"></a>
                            <h4 class="woocommerce-loop-product__title"><?php echo esc_html( $recipe_product_2->post_title ); ?></h4>

                            <span class="price">
                            <?php if ($product_2->get_sale_price()): ?>
                                <del aria-hidden="true">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_2->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </del>
                            <?php endif; ?>
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_2->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </ins>
                        </span>

                            <a href="?add-to-cart=<?php echo $recipe_product_2->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $recipe_product_2->ID;?>" aria-label="Dodaj <?php echo $recipe_product_2->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($recipe_product_3): ?>
                    <div class="col-sm-3 col-lg-2">
                        <div class="post__related-product post__related-product--first product">
                            <a href="<?php echo get_permalink( $product_3->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($recipe_product_3->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $recipe_product_3->post->post_title); ?>"></a>
                            <h4 class="woocommerce-loop-product__title"><?php echo esc_html( $recipe_product_3->post_title ); ?></h4>

                            <span class="price">
                            <?php if ($product_3->get_sale_price()): ?>
                                <del aria-hidden="true">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_3->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </del>
                            <?php endif; ?>
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_3->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </ins>
                        </span>

                            <a href="?add-to-cart=<?php echo $recipe_product_3->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $recipe_product_3->ID;?>" aria-label="Dodaj <?php echo $recipe_product_3->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($recipe_product_4): ?>
                    <div class="col-sm-3 col-lg-2">
                        <div class="post__related-product post__related-product--first product">
                            <a href="<?php echo get_permalink( $product_4->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($recipe_product_4->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $recipe_product_4->post->post_title); ?>"></a>
                            <h4 class="woocommerce-loop-product__title"><?php echo esc_html( $recipe_product_4->post_title ); ?></h4>

                            <span class="price">
                            <?php if ($product_4->get_sale_price()): ?>
                                <del aria-hidden="true">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_4->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </del>
                            <?php endif; ?>
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_4->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </ins>
                        </span>

                            <a href="?add-to-cart=<?php echo $recipe_product_4->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $recipe_product_4->ID;?>" aria-label="Dodaj <?php echo $recipe_product_4->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($recipe_product_5): ?>
                    <div class="col-sm-3 col-lg-2">
                        <div class="post__related-product post__related-product--first product">
                            <a href="<?php echo get_permalink( $product_5->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($recipe_product_5->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $recipe_product_5->post->post_title); ?>"></a>
                            <h4 class="woocommerce-loop-product__title"><?php echo esc_html( $recipe_product_5->post_title ); ?></h4>

                            <span class="price">
                            <?php if ($product_5->get_sale_price()): ?>
                                <del aria-hidden="true">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_5->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </del>
                            <?php endif; ?>
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_5->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </ins>
                        </span>

                            <a href="?add-to-cart=<?php echo $recipe_product_5->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $recipe_product_5->ID;?>" aria-label="Dodaj <?php echo $recipe_product_5->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($recipe_product_6): ?>
                    <div class="col-sm-3 col-lg-2">
                        <div class="post__related-product post__related-product--first product">
                            <a href="<?php echo get_permalink( $product_2->get_id()); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($recipe_product_6->ID), 'thumbnail' ); ?>" class="post__image" alt="<?php echo apply_filters('the_title', $recipe_product_6->post->post_title); ?>"></a>
                            <h4 class="woocommerce-loop-product__title"><?php echo esc_html( $recipe_product_6->post_title ); ?></h4>

                            <span class="price">
                            <?php if ($product_6->get_sale_price()): ?>
                                <del aria-hidden="true">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_6->get_sale_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </del>
                            <?php endif; ?>
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><?php echo $product_6->get_price(); ?>&nbsp;<span class="woocommerce-Price-currencySymbol">zł</span></bdi>
                                </span>
                            </ins>
                        </span>

                            <a href="?add-to-cart=<?php echo $recipe_product_6->ID; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $recipe_product_6->ID;?>" aria-label="Dodaj <?php echo $recipe_product_6->post_title ?> do koszyka" rel="nofollow">Dodaj do koszyka</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

<?php endif; ?>


<?php get_footer(); ?>
