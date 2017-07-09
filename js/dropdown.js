(function ($) {

    $('.btn-dropdown').on(
        'click', function () {
            $(this).toggleClass('is-open').siblings('.dropdown__content').toggleClass('is-open').slideToggle();
        }
    );

    $(document).mouseup(
        function (e) {

            $('.btn-dropdown').each(
                function () {
                    if (!$(this).is(e.target) && !$(this).siblings('.dropdown__content').is(e.target) && $(this).siblings('.dropdown__content').has(e.target).length === 0) {
                        if ($(this).hasClass('is-open')) {
                            $(this).removeClass('is-open').siblings('.dropdown__content').removeClass('is-open');
                            $(this).siblings('.dropdown__content').slideUp();
                        }
                    }
                }
            );

        }
    );

    $('.dropdown__content li').on(
        'click', function () {
            $(this).parent().siblings('.btn-dropdown').html($(this).text());
            $(this).parent().removeClass('is-open').siblings('.btn-dropdown').removeClass('is-open');
            $(this).parent().slideUp();
        }
    );

})(jQuery);