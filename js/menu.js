(function ($) {
// Mobile to tablet portrait Only JS
    if (matchMedia('(max-width: 767px)').matches) {

        // Open main-menu
        $('.button__menu-open').on(
            'click', function (e) {
                $(this).addClass('open');
                $('html').addClass('menu-mobile--active');
            }
        );

        // Close main-menu
        $('.button__menu-close').on(
            'click', function (e) {
                $('.button__menu-open').removeClass('open');
                $('html').removeClass('menu-mobile--active');
            }
        );
    }

//Tablet Landscape to Desktop only JS
    if (matchMedia('(min-width: 768px) and (orientation:landscape)').matches) {
        $('.button__menu-open').removeClass('open');
        $('html').removeClass('menu-mobile--active');
    }

    $(window).resize(
        function () {

            $('.button__menu-open').removeClass('open');
            $('html').removeClass('menu-mobile--active');

            // Open main-menu
            $('.button__menu-open').on(
                'click', function (e) {
                    $(this).addClass('open');
                    $('html').addClass('menu-mobile--active');
                }
            );

            // Close main-menu
            $('.button__menu-close').on(
                'click', function (e) {
                    $('.button__menu-open').removeClass('open');
                    $('html').removeClass('menu-mobile--active');
                }
            );

        }
    );
})(jQuery);