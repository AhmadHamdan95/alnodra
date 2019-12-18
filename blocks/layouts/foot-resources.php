<script src="assets/js/jQuery3.4.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function () {

        var swiper = new Swiper('.theSlider .swiper-container', {
            navigation: {
                nextEl: '.theSlider .swiper-button-next',
                prevEl: '.theSlider .swiper-button-prev',
            },
        });

        $('.header .nav-btn').on('click', function () {
            $('body').toggleClass('mobile-menu-active');
            $('body').removeClass('search-box-active');
        });

        $('.header .search').on('click', function () {
            $('body').toggleClass('search-box-active');
            $('body').removeClass('mobile-menu-active');
        });

    });
</script>