</main>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer__menu mt-m">
                    <a href="/" class="footer__link">Strona główna</a>
                    <a href="/oferta" class="footer__link">Oferta</a>
                    <a href="/projekty" class="footer__link">Projekty</a>
                    <a href="/aktualnosci" class="footer__link">Aktualności</a>
                    <a href="/kontakt" class="footer__link">Kontakt</a>
                    <a href="/polityka-prywatnosci" class="footer__link">Polityka prywatności</a>
                </div>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-5">

            </div>
        </div>
    </div>
</footer>

<script defer src="https://www.googletagmanager.com/gtag/js?id=XXX"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'XXX');

    let navOpened = false;
    let initHeight = 260;

    function slideToggle() {
        let navMobile = document.getElementById('navbar__nav-mobile');

        if (navOpened) {
            navOpened = false;
            navMobile.style.height = '0';
            document.getElementById('navbar__toggle').classList.remove('navbar__toggle--open');
        } else {
            navOpened = true;
            navMobile.style.height = initHeight + 'px';
            document.getElementById('navbar__toggle').classList.add('navbar__toggle--open');
        }
    }
</script>

<?php wp_footer(); ?>

</body>
</html>
