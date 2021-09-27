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
                    <a class="box__link" href="przepisy">Zobacz przepisy</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box box--box-2">
                    <p>Sklep</p>
                    <h3 class="box__header">Naturalna pielęgnacja</h3>
                    <a class="box__link" href="kategoria-produktu/kosmetyki-naturalne/">Idź do sklepu</a>
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
                <div class="front-page-info-box">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M45.7784 33.1506C47.0826 32.2288 48.1465 31.0076 48.8808 29.5894C49.6151 28.1712 49.9984 26.5975 49.9984 25.0005C49.9984 23.4035 49.6151 21.8298 48.8808 20.4116C48.1465 18.9934 47.0826 17.7722 45.7784 16.8504C45.925 16.2447 45.9992 15.6236 45.9994 15.0004C45.997 12.8794 45.1534 10.8459 43.6536 9.34613C42.1538 7.84634 40.1203 7.00272 37.9993 7.00033C38.0008 5.46865 37.4994 3.97884 36.572 2.75977C35.6447 1.5407 34.3428 0.6598 32.8663 0.252397C31.3898 -0.155006 29.8203 -0.066378 28.3991 0.504665C26.9778 1.07571 25.7834 2.09758 24.9992 3.4133C24.215 2.09758 23.0205 1.07571 21.5993 0.504665C20.178 -0.066378 18.6086 -0.155006 17.1321 0.252397C15.6556 0.6598 14.3537 1.5407 13.4263 2.75977C12.499 3.97884 11.9976 5.46865 11.9991 7.00033C9.87806 7.00272 7.84459 7.84634 6.34481 9.34613C4.84502 10.8459 4.00139 12.8794 3.99901 15.0004C3.99924 15.6233 4.07343 16.244 4.22001 16.8494C2.91583 17.7712 1.8519 18.9924 1.11758 20.4106C0.383257 21.8288 0 23.4025 0 24.9995C0 26.5965 0.383257 28.1702 1.11758 29.5884C1.8519 31.0066 2.91583 32.2278 4.22001 33.1496C4.0805 33.7569 4.00641 34.3775 3.99901 35.0006C4.00139 37.1216 4.84502 39.1551 6.34481 40.6549C7.84459 42.1546 9.87806 42.9983 11.9991 43.0006C11.9976 44.5323 12.499 46.0221 13.4263 47.2412C14.3537 48.4603 15.6556 49.3412 17.1321 49.7486C18.6086 50.156 20.178 50.0674 21.5993 49.4963C23.0205 48.9253 24.215 47.9034 24.9992 46.5877C25.7834 47.9034 26.9778 48.9253 28.3991 49.4963C29.8203 50.0674 31.3898 50.156 32.8663 49.7486C34.3428 49.3412 35.6447 48.4603 36.572 47.2412C37.4994 46.0221 38.0008 44.5323 37.9993 43.0006C40.1203 42.9983 42.1538 42.1546 43.6536 40.6549C45.1534 39.1551 45.997 37.1216 45.9994 35.0006C45.9951 34.3776 45.9209 33.757 45.7784 33.1506ZM18.9991 48.0007C17.673 48.0007 16.4013 47.4739 15.4636 46.5362C14.5259 45.5985 13.9991 44.3267 13.9991 43.0006C13.9991 41.6746 14.5259 40.4028 15.4636 39.4651C16.4013 38.5274 17.673 38.0006 18.9991 38.0006C19.2644 38.0006 19.5187 37.8952 19.7063 37.7077C19.8938 37.5202 19.9991 37.2658 19.9991 37.0006C19.9991 36.7354 19.8938 36.481 19.7063 36.2935C19.5187 36.1059 19.2644 36.0006 18.9991 36.0006C17.4953 36.0034 16.0322 36.4895 14.8258 37.3873C13.6194 38.2851 12.7336 39.5469 12.2991 40.9866C11.4874 41.0273 10.676 40.9026 9.91401 40.6202C9.152 40.3378 8.45531 39.9035 7.86618 39.3438C7.27705 38.784 6.80778 38.1104 6.48682 37.3638C6.16586 36.6172 5.99991 35.8132 5.99903 35.0006C6.00473 34.3363 6.11717 33.6772 6.33203 33.0486C6.73815 31.8681 7.50234 30.8438 8.51814 30.1182C9.53393 29.3926 10.7507 29.0019 11.9991 29.0005C12.2643 29.0005 12.5187 28.8952 12.7062 28.7076C12.8937 28.5201 12.9991 28.2657 12.9991 28.0005C12.9991 27.7353 12.8937 27.4809 12.7062 27.2934C12.5187 27.1059 12.2643 27.0005 11.9991 27.0005C10.5565 27.0016 9.14104 27.3924 7.90233 28.1317C6.66362 28.8711 5.64771 29.9314 4.96202 31.2005C3.96119 30.3925 3.17071 29.3543 2.65801 28.1746C2.1453 26.9949 1.92561 25.7086 2.01766 24.4256C2.10971 23.1426 2.51078 21.9009 3.18664 20.8065C3.8625 19.712 4.7931 18.7973 5.89903 18.1404C6.096 18.0224 6.24635 17.8402 6.32484 17.6244C6.40333 17.4086 6.40516 17.1724 6.33003 16.9554C6.01535 16.052 5.92178 15.0863 6.05715 14.1393C6.19253 13.1923 6.55292 12.2915 7.10811 11.5124C7.6633 10.7333 8.39713 10.0987 9.24811 9.66159C10.0991 9.22452 11.0424 8.99778 11.9991 9.00035C12.0991 9.00035 12.1991 9.00835 12.2991 9.01435C12.7336 10.454 13.6194 11.7159 14.8258 12.6137C16.0322 13.5115 17.4953 13.9976 18.9991 14.0004C19.2644 14.0004 19.5187 13.895 19.7063 13.7075C19.8938 13.52 19.9991 13.2656 19.9991 13.0004C19.9991 12.7352 19.8938 12.4808 19.7063 12.2933C19.5187 12.1057 19.2644 12.0004 18.9991 12.0004C18.0102 12.0004 17.0435 11.7071 16.2213 11.1577C15.399 10.6083 14.7581 9.8274 14.3797 8.91377C14.0013 8.00013 13.9022 6.99479 14.0952 6.02487C14.2881 5.05496 14.7643 4.16404 15.4636 3.46477C16.1628 2.7655 17.0538 2.28929 18.0237 2.09636C18.9936 1.90344 19.9989 2.00245 20.9126 2.3809C21.8262 2.75934 22.6071 3.4002 23.1565 4.22246C23.7059 5.04471 23.9992 6.01142 23.9992 7.00033V43.0006C23.9976 44.3263 23.4703 45.5971 22.533 46.5345C21.5956 47.4718 20.3247 47.9991 18.9991 48.0007ZM37.9993 41.0006C37.9043 41.0006 37.7993 40.9926 37.6993 40.9866C37.2648 39.5469 36.379 38.2851 35.1726 37.3873C33.9661 36.4895 32.5031 36.0034 30.9992 36.0006C30.734 36.0006 30.4797 36.1059 30.2921 36.2935C30.1046 36.481 29.9992 36.7354 29.9992 37.0006C29.9992 37.2658 30.1046 37.5202 30.2921 37.7077C30.4797 37.8952 30.734 38.0006 30.9992 38.0006C31.9882 38.0006 32.9549 38.2938 33.7771 38.8433C34.5994 39.3927 35.2402 40.1736 35.6187 41.0872C35.9971 42.0009 36.0961 43.0062 35.9032 43.9761C35.7103 44.946 35.2341 45.8369 34.5348 46.5362C33.8355 47.2355 32.9446 47.7117 31.9747 47.9046C31.0048 48.0975 29.9994 47.9985 29.0858 47.6201C28.1722 47.2416 27.3913 46.6008 26.8419 45.7785C26.2924 44.9563 25.9992 43.9896 25.9992 43.0006V7.00033C25.9992 6.01142 26.2924 5.04471 26.8419 4.22246C27.3913 3.4002 28.1722 2.75934 29.0858 2.3809C29.9994 2.00245 31.0048 1.90344 31.9747 2.09636C32.9446 2.28929 33.8355 2.7655 34.5348 3.46477C35.2341 4.16404 35.7103 5.05496 35.9032 6.02487C36.0961 6.99479 35.9971 8.00013 35.6187 8.91377C35.2402 9.8274 34.5994 10.6083 33.7771 11.1577C32.9549 11.7071 31.9882 12.0004 30.9992 12.0004C30.734 12.0004 30.4797 12.1057 30.2921 12.2933C30.1046 12.4808 29.9992 12.7352 29.9992 13.0004C29.9992 13.2656 30.1046 13.52 30.2921 13.7075C30.4797 13.895 30.734 14.0004 30.9992 14.0004C32.5031 13.9976 33.9661 13.5115 35.1726 12.6137C36.379 11.7159 37.2648 10.454 37.6993 9.01435C37.7993 9.00835 37.8993 9.00035 37.9993 9.00035C38.9558 8.9981 39.8989 9.22508 40.7496 9.66228C41.6003 10.0995 42.3339 10.7342 42.8889 11.5132C43.4438 12.2922 43.804 13.1929 43.9393 14.1398C44.0746 15.0867 43.981 16.0522 43.6664 16.9554C43.5914 17.1726 43.5935 17.409 43.6724 17.6248C43.7513 17.8406 43.902 18.0227 44.0994 18.1404C45.2053 18.7973 46.1359 19.712 46.8117 20.8065C47.4876 21.9009 47.8887 23.1426 47.9807 24.4256C48.0728 25.7086 47.8531 26.9949 47.3404 28.1746C46.8277 29.3543 46.0372 30.3925 45.0364 31.2005C44.3507 29.9314 43.3348 28.8711 42.0961 28.1317C40.8573 27.3924 39.4419 27.0016 37.9993 27.0005C37.7341 27.0005 37.4797 27.1059 37.2922 27.2934C37.1047 27.4809 36.9993 27.7353 36.9993 28.0005C36.9993 28.2657 37.1047 28.5201 37.2922 28.7076C37.4797 28.8952 37.7341 29.0005 37.9993 29.0005C39.5906 29.0005 41.1168 29.6327 42.242 30.7579C43.3672 31.8831 43.9994 33.4093 43.9994 35.0006C43.9994 36.5919 43.3672 38.118 42.242 39.2433C41.1168 40.3685 39.5906 41.0006 37.9993 41.0006Z" fill="#5EBD21"/>
                        <path d="M37.9994 16.0007C37.7341 16.0007 37.4798 16.1061 37.2922 16.2936C37.1047 16.4812 36.9993 16.7355 36.9993 17.0007C36.9972 18.8566 36.259 20.6359 34.9467 21.9482C33.6344 23.2605 31.8552 23.9987 29.9993 24.0008H28.9993C28.7341 24.0008 28.4797 24.1062 28.2922 24.2937C28.1046 24.4812 27.9993 24.7356 27.9993 25.0008C27.9993 25.266 28.1046 25.5204 28.2922 25.7079C28.4797 25.8955 28.7341 26.0008 28.9993 26.0008C29.5297 26.0008 30.0384 26.2115 30.4135 26.5866C30.7886 26.9617 30.9993 27.4704 30.9993 28.0008C30.9993 28.2661 31.1047 28.5204 31.2922 28.708C31.4797 28.8955 31.7341 29.0008 31.9993 29.0008C32.2645 29.0008 32.5189 28.8955 32.7064 28.708C32.894 28.5204 32.9993 28.2661 32.9993 28.0008C33 27.1806 32.7475 26.3802 32.2763 25.7088C34.2008 25.2027 35.9038 24.0742 37.1199 22.499C38.336 20.9239 38.9968 18.9907 38.9994 17.0007C38.9994 16.7355 38.894 16.4812 38.7065 16.2936C38.5189 16.1061 38.2646 16.0007 37.9994 16.0007Z" fill="#5EBD21"/>
                        <path d="M20.9991 24.0008H19.9991C18.1432 23.9987 16.364 23.2605 15.0517 21.9482C13.7393 20.6359 13.0012 18.8566 12.999 17.0007C12.999 16.7355 12.8937 16.4812 12.7061 16.2936C12.5186 16.1061 12.2643 16.0007 11.999 16.0007C11.7338 16.0007 11.4795 16.1061 11.2919 16.2936C11.1044 16.4812 10.999 16.7355 10.999 17.0007C11.0016 18.9907 11.6624 20.9239 12.8785 22.499C14.0945 24.0742 15.7976 25.2027 17.7221 25.7088C17.2509 26.3802 16.9984 27.1806 16.9991 28.0008C16.9991 28.2661 17.1044 28.5204 17.292 28.708C17.4795 28.8955 17.7339 29.0008 17.9991 29.0008C18.2643 29.0008 18.5187 28.8955 18.7062 28.708C18.8937 28.5204 18.9991 28.2661 18.9991 28.0008C18.9991 27.4704 19.2098 26.9617 19.5849 26.5866C19.96 26.2115 20.4687 26.0008 20.9991 26.0008C21.2643 26.0008 21.5187 25.8955 21.7062 25.7079C21.8938 25.5204 21.9991 25.266 21.9991 25.0008C21.9991 24.7356 21.8938 24.4812 21.7062 24.2937C21.5187 24.1062 21.2643 24.0008 20.9991 24.0008Z" fill="#5EBD21"/>
                    </svg>
                    <p class="text-center">Sprawdzone, zdrowe produkty, certyfikowane, eco produkty</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="front-page-info-box">
                    <svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.75 17.7088C43.7448 13.0139 41.8774 8.51275 38.5576 5.19292C35.2377 1.8731 30.7366 0.00572678 26.0417 0.000488281H17.7083C13.0134 0.00572678 8.51226 1.8731 5.19244 5.19292C1.87262 8.51275 0.0052395 13.0139 9.99682e-07 17.7088C-0.00019131 17.8472 0.0273643 17.9843 0.0810392 18.1118C0.134714 18.2394 0.213419 18.3549 0.312501 18.4515C0.109212 18.8693 0.00241477 19.3275 9.99682e-07 19.7922V21.8755C0.00271315 22.6467 0.292343 23.3894 0.812501 23.9588C0.292343 24.5283 0.00271315 25.2709 9.99682e-07 26.0422V30.2088C0.00271315 30.9801 0.292343 31.7227 0.812501 32.2922C0.292343 32.8616 0.00271315 33.6042 9.99682e-07 34.3755V42.7088C0.00248164 44.6419 0.771505 46.4952 2.13842 47.8621C3.50534 49.229 5.35856 49.998 7.29167 50.0005H36.4583C38.3914 49.998 40.2447 49.229 41.6116 47.8621C42.9785 46.4952 43.7475 44.6419 43.75 42.7088V34.3755C43.7473 33.6042 43.4577 32.8616 42.9375 32.2922C43.4577 31.7227 43.7473 30.9801 43.75 30.2088V26.0422C43.7473 25.2709 43.4577 24.5283 42.9375 23.9588C43.4577 23.3894 43.7473 22.6467 43.75 21.8755V17.7088ZM41.6667 26.0422V30.2088C41.6667 30.4851 41.5569 30.75 41.3616 30.9454C41.1662 31.1407 40.9013 31.2505 40.625 31.2505H31.7552L38.0052 25.0005H40.625C40.9013 25.0005 41.1662 25.1102 41.3616 25.3056C41.5569 25.5009 41.6667 25.7659 41.6667 26.0422ZM41.6667 34.3755V35.938C38.5417 36.5276 38.4146 39.1672 35.7583 39.1672C32.9687 39.1672 32.6906 35.8338 28.8083 35.8338C24.9615 35.8338 24.6333 39.1672 21.8635 39.1672C19.0938 39.1672 18.7875 35.8338 14.925 35.8338C11.0625 35.8338 10.7521 39.1672 7.98229 39.1672C5.35833 39.1672 5.16146 36.5203 2.08333 35.938V34.3755C2.08333 34.0992 2.19308 33.8343 2.38843 33.6389C2.58378 33.4436 2.84873 33.3338 3.125 33.3338H40.625C40.9013 33.3338 41.1662 33.4436 41.3616 33.6389C41.5569 33.8343 41.6667 34.0992 41.6667 34.3755ZM2.08333 30.2088V26.0422C2.08333 25.7659 2.19308 25.5009 2.38843 25.3056C2.58378 25.1102 2.84873 25.0005 3.125 25.0005H22.4115L28.6615 31.2505H3.125C2.84873 31.2505 2.58378 31.1407 2.38843 30.9454C2.19308 30.75 2.08333 30.4851 2.08333 30.2088ZM37.574 22.9172C37.2977 22.9172 37.0328 23.027 36.8375 23.2224L30.2083 29.8515L23.5792 23.2224C23.3839 23.027 23.119 22.9172 22.8427 22.9172H3.125C2.84873 22.9172 2.58378 22.8074 2.38843 22.6121C2.19308 22.4167 2.08333 22.1518 2.08333 21.8755V19.7922C2.08333 19.5159 2.19308 19.2509 2.38843 19.0556C2.58378 18.8602 2.84873 18.7505 3.125 18.7505H41.6667V21.8755C41.6667 22.1518 41.5569 22.4167 41.3616 22.6121C41.1662 22.8074 40.9013 22.9172 40.625 22.9172H37.574ZM17.7083 2.08382H26.0417C30.004 2.08866 33.8169 3.59667 36.7106 6.30341C39.6043 9.01015 41.3632 12.714 41.6323 16.6672H2.11771C2.38678 12.714 4.14573 9.01015 7.03943 6.30341C9.93312 3.59667 13.746 2.08866 17.7083 2.08382ZM36.4583 47.9172H7.29167C5.91084 47.9155 4.58704 47.3662 3.61065 46.3898C2.63425 45.4134 2.08499 44.0896 2.08333 42.7088V38.0786C3.86771 38.6776 4.61458 41.2505 7.98229 41.2505C11.8083 41.2505 12.1813 37.9172 14.925 37.9172C17.6885 37.9172 18.0021 41.2505 21.8635 41.2505C25.6906 41.2505 26.0646 37.9172 28.8083 37.9172C31.5979 37.9172 31.8771 41.2505 35.7583 41.2505C39.1958 41.2505 39.8104 38.7005 41.6667 38.0786V42.7088C41.665 44.0896 41.1157 45.4134 40.1394 46.3898C39.163 47.3662 37.8392 47.9155 36.4583 47.9172Z" fill="#5EBD21"/>
                    </svg>
                    <p class="text-center">Zdrowe zamienniki popularnych produktówZdrowe zamienniki popularnych produktów</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="front-page-info-box">
                    <svg width="51" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.86642e-05 22.7273V24.7474C-0.0105664 29.7007 1.71572 34.501 4.87857 38.313C8.04142 42.125 12.4406 44.7076 17.3108 45.6113C16.4706 46.5365 16.0037 47.7407 16.0007 48.9904C15.9994 49.1226 16.0243 49.2537 16.074 49.3762C16.1236 49.4987 16.1971 49.6101 16.2901 49.7041C16.3831 49.798 16.4938 49.8725 16.6158 49.9234C16.7378 49.9743 16.8686 50.0005 17.0008 50.0005H33.0015C33.1337 50.0005 33.2645 49.9743 33.3865 49.9234C33.5085 49.8725 33.6192 49.798 33.7122 49.7041C33.8052 49.6101 33.8786 49.4987 33.9283 49.3762C33.978 49.2537 34.0028 49.1226 34.0015 48.9904C33.9985 47.7407 33.5317 46.5365 32.6915 45.6113C37.5616 44.7076 41.9609 42.125 45.1237 38.313C48.2865 34.501 50.0128 29.7007 50.0022 24.7474V22.7273C50.0052 21.929 49.6918 21.162 49.1307 20.5941C48.5696 20.0263 47.8064 19.7038 47.0081 19.6972C47.3861 18.825 47.5847 17.8856 47.592 16.9351C47.5994 15.9846 47.4153 15.0423 47.0508 14.1643C46.6863 13.2864 46.1489 12.4909 45.4704 11.825C44.792 11.1592 43.9865 10.6367 43.1019 10.2888C42.4582 10.0419 41.7808 9.89393 41.0928 9.84974C41.6224 8.0223 41.491 6.0667 40.7218 4.3265C40.3006 3.35798 39.6913 2.48269 38.9293 1.7514C38.1673 1.0201 37.2677 0.447341 36.2826 0.0663182C36.1597 0.0193729 36.0288 -0.00285937 35.8972 0.000895711C35.7657 0.0046508 35.6363 0.0343194 35.5162 0.0882012C35.3962 0.142083 35.288 0.219119 35.1978 0.314895C35.1076 0.410672 35.0372 0.523306 34.9906 0.646343C34.8952 0.895641 34.9021 1.17247 35.0095 1.41678C35.117 1.66109 35.3164 1.85319 35.5646 1.9514C36.3038 2.23777 36.9787 2.66812 37.5502 3.21748C38.1217 3.76683 38.5784 4.42424 38.8937 5.15154C39.4978 6.52094 39.5744 8.06529 39.1087 9.48773C38.301 8.61936 37.284 7.97261 36.155 7.60927C35.0261 7.24594 33.8228 7.17815 32.6602 7.41238C31.4975 7.64661 30.4144 8.17504 29.5142 8.94719C28.614 9.71934 27.9268 10.7094 27.5182 11.8228C26.7269 14.3698 26.3828 17.0347 26.5012 19.6992H22.975C23.4924 19.0185 23.8279 18.2173 23.9498 17.3711C24.0718 16.5248 23.9761 15.6615 23.6719 14.8625C23.3677 14.0635 22.865 13.3551 22.2112 12.8042C21.5573 12.2533 20.774 11.8781 19.9349 11.7138C19.7576 10.3033 19.1592 8.97895 18.2178 7.91366C18.1309 7.81482 18.0252 7.73428 17.9068 7.67671C17.7884 7.61914 17.6598 7.58571 17.5284 7.57836C17.3969 7.571 17.2654 7.58988 17.1413 7.63388C17.0173 7.67788 16.9032 7.74613 16.8058 7.83466C16.6082 8.01457 16.4894 8.26493 16.4748 8.53171C16.4602 8.7985 16.551 9.06033 16.7278 9.26072C17.3478 9.96189 17.7609 10.8216 17.9208 11.7438C17.0992 11.93 16.3375 12.3194 15.7054 12.8764C15.0734 13.4334 14.5912 14.1402 14.3032 14.9319C14.0152 15.7236 13.9305 16.5749 14.0569 17.4078C14.1833 18.2407 14.5168 19.0286 15.0267 19.6992H10.9745C11.4919 19.0185 11.8274 18.2173 11.9493 17.3711C12.0712 16.5248 11.9756 15.6615 11.6714 14.8625C11.3672 14.0635 10.8645 13.3551 10.2106 12.8042C9.55682 12.2533 8.77344 11.8781 7.93439 11.7138C7.75711 10.3033 7.15871 8.97895 6.21732 7.91366C6.13039 7.81482 6.02465 7.73428 5.90628 7.67671C5.78791 7.61914 5.65926 7.58571 5.52784 7.57836C5.39642 7.571 5.26484 7.58988 5.14079 7.63388C5.01673 7.67788 4.90267 7.74613 4.80526 7.83466C4.60772 8.01457 4.48883 8.26493 4.47424 8.53171C4.45964 8.7985 4.55052 9.06033 4.72725 9.26072C5.34699 9.96134 5.76002 10.8203 5.92031 11.7418C5.09835 11.9279 4.33625 12.3173 3.70393 12.8744C3.07161 13.4316 2.5893 14.1385 2.30125 14.9305C2.0132 15.7225 1.92863 16.5742 2.05529 17.4073C2.18195 18.2405 2.51578 19.0286 3.02618 19.6992H3.00018C2.20119 19.7042 1.43678 20.0257 0.874425 20.5933C0.312075 21.1609 -0.00234906 21.9283 4.86642e-05 22.7273ZM7.00035 19.6992C6.39981 19.7051 5.81104 19.5325 5.30881 19.2032C4.80657 18.8738 4.41353 18.4027 4.17958 17.8496C3.94563 17.2964 3.88132 16.6862 3.99483 16.0965C4.10834 15.5067 4.39454 14.964 4.81709 14.5372C5.23964 14.1105 5.77949 13.8189 6.36808 13.6995C6.95667 13.5801 7.56746 13.6384 8.1229 13.8668C8.67833 14.0952 9.15336 14.4836 9.48766 14.9825C9.82196 15.4814 10.0005 16.0685 10.0005 16.669C10.0037 17.4685 9.68957 18.2365 9.12711 18.8046C8.56464 19.3727 7.79977 19.6944 7.00035 19.6992ZM19.0009 19.6992C18.4003 19.7051 17.8116 19.5325 17.3093 19.2032C16.8071 18.8738 16.4141 18.4027 16.1801 17.8496C15.9462 17.2964 15.8818 16.6862 15.9954 16.0965C16.1089 15.5067 16.3951 14.964 16.8176 14.5372C17.2402 14.1105 17.78 13.8189 18.3686 13.6995C18.9572 13.5801 19.568 13.6384 20.1234 13.8668C20.6789 14.0952 21.1539 14.4836 21.4882 14.9825C21.8225 15.4814 22.001 16.0685 22.001 16.669C22.0042 17.4685 21.6901 18.2365 21.1276 18.8046C20.5652 19.3727 19.8003 19.6944 19.0009 19.6992ZM44.79 19.6992H28.5013C28.394 17.2823 28.6932 14.8646 29.3863 12.5469C29.7084 11.6802 30.2655 10.9203 30.9951 10.3525C31.7248 9.78469 32.5982 9.43134 33.5175 9.33207C34.4367 9.23281 35.3654 9.39155 36.1995 9.79051C37.0336 10.1895 37.7401 10.8129 38.2397 11.5908C38.354 11.7647 38.5196 11.8986 38.7136 11.9739C38.9075 12.0492 39.1201 12.0621 39.3218 12.0108C40.3348 11.7419 41.4069 11.8 42.3849 12.1768C45.035 13.2069 46.5721 16.332 44.79 19.6992ZM21.001 45.9603H29.0013C29.624 45.9627 30.2306 46.1583 30.7374 46.5201C31.2441 46.882 31.6261 47.3922 31.8304 47.9804H18.1718C18.3762 47.3922 18.7582 46.882 19.2649 46.5201C19.7717 46.1583 20.3783 45.9627 21.001 45.9603ZM2.00014 22.7273C1.99907 22.4607 2.10374 22.2046 2.2912 22.0151C2.47866 21.8256 2.73362 21.7181 3.00018 21.7163H47.0021C47.2687 21.7181 47.5236 21.8256 47.7111 22.0151C47.8985 22.2046 48.0032 22.4607 48.0021 22.7273V24.7474C48.0216 29.8103 46.032 34.6741 42.4699 38.272C38.9079 41.8699 34.0641 43.908 29.0013 43.9392H21.001C15.9381 43.908 11.0944 41.8699 7.53233 38.272C3.97025 34.6741 1.98071 29.8103 2.00014 24.7474V22.7273Z" fill="#5EBD21"/>
                    </svg>
                    <p class="text-center">Proste, odzywcze przepisy ujmujące produkty dostępne na stronieProste, odzywcze przepisy ujmujące produkty dostępne na stronie</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="front-page-info-box">
                    <svg width="48" height="50" viewBox="0 0 48 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.1567 39.2449C28.0328 39.201 27.9015 39.182 27.7703 39.1889C27.639 39.1958 27.5104 39.2285 27.3918 39.2852C27.2732 39.3418 27.1669 39.4213 27.079 39.5191C26.9912 39.6168 26.9235 39.7309 26.8797 39.8549C26.7464 40.246 26.4939 40.5856 26.1579 40.826C25.8218 41.0665 25.419 41.1957 25.0057 41.1957C24.5925 41.1957 24.1897 41.0665 23.8536 40.826C23.5175 40.5856 23.2651 40.246 23.1317 39.8549C23.0425 39.6049 22.8576 39.4007 22.6178 39.287C22.3779 39.1734 22.1027 39.1597 21.8527 39.2489C21.6028 39.3381 21.3985 39.523 21.2849 39.7629C21.1712 40.0028 21.1575 40.2779 21.2467 40.5279C21.5169 41.3099 22.0242 41.9881 22.6979 42.4682C23.3717 42.9483 24.1784 43.2063 25.0057 43.2063C25.8331 43.2063 26.6398 42.9483 27.3135 42.4682C27.9873 41.9881 28.4946 41.3099 28.7647 40.5279C28.8537 40.2771 28.8396 40.0013 28.7257 39.7609C28.6117 39.5204 28.4072 39.3349 28.1567 39.2449Z" fill="#5EBD21"/>
                        <path d="M46.0076 10.0481C44.9445 10.0444 43.9263 9.6191 43.1764 8.86561C42.4265 8.11212 42.0061 7.09191 42.0074 6.02883C42.0074 5.7636 41.902 5.50923 41.7145 5.32168C41.5269 5.13414 41.2726 5.02877 41.0073 5.02877C40.7421 5.02877 40.4877 5.13414 40.3002 5.32168C40.1126 5.50923 40.0073 5.7636 40.0073 6.02883C40.0052 6.8849 39.7279 7.71761 39.2162 8.40396C37.3839 7.49159 35.3628 7.0223 33.3159 7.03389H32.5718C32.9897 6.75537 33.337 6.38334 33.5861 5.94729C33.8352 5.51124 33.9793 5.02316 34.0069 4.52174C34.0069 1.9446 30.1377 0.000488281 25.0064 0.000488281C19.8751 0.000488281 16.0059 1.9446 16.0059 4.52174C16.0335 5.02308 16.1774 5.5111 16.4263 5.94714C16.6753 6.38318 17.0223 6.75526 17.44 7.03389H16.6959C10.2496 7.03389 5.00528 11.5411 5.00528 17.0815V22.4468C5.01607 23.1396 5.17789 23.8218 5.47947 24.4457C5.78104 25.0696 6.21511 25.6201 6.75138 26.059L10.0056 28.8121V33.0124C9.14742 32.7887 8.38756 32.287 7.84475 31.5857C7.30194 30.8843 7.00678 30.023 7.0054 29.1361C7.0054 28.8709 6.90003 28.6165 6.71249 28.429C6.52494 28.2414 6.27057 28.1361 6.00534 28.1361C5.74011 28.1361 5.48574 28.2414 5.29819 28.429C5.11065 28.6165 5.00528 28.8709 5.00528 29.1361C5.00661 30.1991 4.58616 31.2192 3.8362 31.9726C3.08624 32.7259 2.06804 33.1509 1.00506 33.1544C0.738499 33.1544 0.482859 33.2603 0.294374 33.4487C0.10589 33.6372 0 33.8929 0 34.1594C0 34.426 0.10589 34.6816 0.294374 34.8701C0.482859 35.0586 0.738499 35.1645 1.00506 35.1645C2.06814 35.1682 3.08633 35.5934 3.83626 36.3469C4.5862 37.1004 5.00661 38.1206 5.00528 39.1837C5.00528 39.4489 5.11065 39.7033 5.29819 39.8909C5.48574 40.0784 5.74011 40.1838 6.00534 40.1838C6.27057 40.1838 6.52494 40.0784 6.71249 39.8909C6.90003 39.7033 7.0054 39.4489 7.0054 39.1837C7.00661 38.2968 7.30171 37.4354 7.84454 36.734C8.38737 36.0327 9.14733 35.531 10.0056 35.3075V39.4767C10.0426 40.8543 10.4877 42.1899 11.2846 43.3142C12.0815 44.4385 13.1943 45.3009 14.4818 45.7921L23.5693 49.7053C24.0236 49.9001 24.5127 50.0005 25.0069 50.0005C25.5012 50.0005 25.9902 49.9001 26.4445 49.7053L35.531 45.7921C36.8181 45.3011 37.9305 44.4391 38.7274 43.3154C39.5242 42.1917 39.9697 40.8568 40.0073 39.4797V28.8121L43.2615 26.059C43.7977 25.6201 44.2318 25.0696 44.5334 24.4457C44.8349 23.8218 44.9968 23.1396 45.0076 22.4468V17.0815C44.997 15.5489 44.5894 14.0453 43.8245 12.7172C44.4717 12.2879 45.231 12.0587 46.0076 12.0582C46.2742 12.0582 46.5298 11.9523 46.7183 11.7638C46.9068 11.5753 47.0127 11.3197 47.0127 11.0531C47.0127 10.7866 46.9068 10.5309 46.7183 10.3424C46.5298 10.1539 46.2742 10.0481 46.0076 10.0481ZM6.00534 35.8575C5.56159 35.1843 4.98804 34.6063 4.31825 34.1574C4.98704 33.7118 5.56053 33.1377 6.00534 32.4683C6.44963 33.1395 7.02316 33.7154 7.69244 34.1624C7.02313 34.6099 6.44961 35.1861 6.00534 35.8575ZM42.6944 11.0561C42.4405 11.2335 42.2007 11.4305 41.9774 11.6451C41.9654 11.6531 41.9504 11.6541 41.9384 11.6631C41.9264 11.6722 41.9014 11.7072 41.8784 11.7272C41.5511 12.0338 41.2589 12.3759 41.0073 12.7472C40.563 12.0761 39.9895 11.5002 39.3202 11.0531C39.549 10.8907 39.7659 10.7122 39.9693 10.5191C40.0264 10.4815 40.0794 10.4379 40.1273 10.3891C40.4585 10.0796 40.7537 9.73374 41.0073 9.35802C41.4519 10.0292 42.0253 10.6054 42.6944 11.0531V11.0561ZM18.006 4.52174C18.006 3.49769 20.7332 2.0096 25.0064 2.0096C29.2797 2.0096 32.0068 3.50069 32.0068 4.52174C32.0068 5.5428 29.2797 7.03389 25.0064 7.03389C20.7332 7.03389 18.006 5.5468 18.006 4.52174ZM34.743 43.948L25.6555 47.8612C25.4498 47.9481 25.2287 47.9929 25.0054 47.9929C24.7821 47.9929 24.5611 47.9481 24.3554 47.8612L15.2679 43.948C14.3438 43.6083 13.5409 43.0028 12.9604 42.2077C12.3799 41.4125 12.0477 40.4633 12.0057 39.4797V25.1639H12.0407C14.5436 25.1906 17.0183 24.6341 19.2688 23.5384C21.5193 22.4428 23.4837 20.8381 25.0064 18.8516C26.5292 20.8381 28.4936 22.4427 30.7441 23.5383C32.9946 24.634 35.4693 25.1905 37.9722 25.1639H38.0072V39.4797C37.965 40.4636 37.6325 41.4129 37.0516 42.2081C36.4707 43.0033 35.6674 43.6087 34.743 43.948ZM43.0074 22.4468C42.9985 22.8475 42.9012 23.2412 42.7225 23.6C42.5437 23.9587 42.2879 24.2735 41.9734 24.5219L40.0073 26.186V24.1149C40.001 23.9762 39.9673 23.8401 39.908 23.7145C39.8488 23.5889 39.7652 23.4764 39.6621 23.3834C39.5591 23.2903 39.4386 23.2187 39.3076 23.1726C39.1766 23.1265 39.0378 23.1068 38.8992 23.1148C36.3338 23.3057 33.7648 22.7956 31.4671 21.6389C29.1693 20.4823 27.2292 18.7227 25.8545 16.5484C25.764 16.4092 25.6406 16.2944 25.4951 16.2144C25.3496 16.1343 25.1866 16.0914 25.0205 16.0895C24.8545 16.0877 24.6905 16.1268 24.5432 16.2036C24.396 16.2803 24.27 16.3922 24.1764 16.5294C24.0764 16.5814 19.8761 24.0299 11.1136 23.1148C10.8345 23.1022 10.5617 23.2002 10.3543 23.3874C10.1469 23.5745 10.0216 23.8359 10.0056 24.1149V26.186L8.04046 24.5219C7.72562 24.2737 7.46957 23.9589 7.29063 23.6002C7.11169 23.2414 7.01428 22.8476 7.0054 22.4468V17.0815C7.0054 12.6492 11.3526 9.043 16.6959 9.043H33.3169C34.7003 9.04242 36.072 9.29703 37.3631 9.79404C36.9295 9.95775 36.4705 10.0437 36.007 10.0481C35.7405 10.0481 35.4848 10.1539 35.2964 10.3424C35.1079 10.5309 35.002 10.7866 35.002 11.0531C35.002 11.3197 35.1079 11.5753 35.2964 11.7638C35.4848 11.9523 35.7405 12.0582 36.007 12.0582C37.07 12.0616 38.0882 12.4866 38.8382 13.24C39.5882 13.9933 40.0086 15.0134 40.0073 16.0764C40.0073 16.3416 40.1126 16.596 40.3002 16.7835C40.4877 16.9711 40.7421 17.0765 41.0073 17.0765C41.2726 17.0765 41.5269 16.9711 41.7145 16.7835C41.902 16.596 42.0074 16.3416 42.0074 16.0764C42.0095 15.4786 42.1462 14.889 42.4074 14.3513C42.7943 15.21 42.9986 16.1397 43.0074 17.0815V22.4468Z" fill="#5EBD21"/>
                    </svg>
                    <p class="text-center">Inspiracje w kwestii pielęgnacji oraz prowadzenia zdrowego trybu życia</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    $args = array(
        'post_type' => 'przepisy',
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
                    <div class="article">
                        <h3 class="article__header"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h3>
                        <a class="article__more" href="<?php echo the_permalink(); ?>">Zobacz przepis...</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_query(); ?>
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
                    <div class="article">
                        <div class="article__date"><?php echo apply_filters('the_date', mysql2date('d/m/Y', $posts->post->post_date)); ?></div>
                        <h3 class="article__header"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h3>
                        <div class="article__content"><?php echo wp_trim_words(wp_strip_all_tags(apply_filters( 'the_content', $posts->post->post_content)), 60, '...'); ?></div>
                        <a class="article__more" href="<?php echo the_permalink(); ?>">Czytaj więcej...</a>
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
