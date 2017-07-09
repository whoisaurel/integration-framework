(function ($) {
    $(document).ready(
        function () {
            $('ul.tabs li').click(
                function () {
                    var tab_id = $(this).attr('data-tab');

                    $('ul.tabs li').removeClass('is-current');
                    $('.tabs__content').removeClass('is-current');

                    $(this).addClass('is-current');
                    $("#" + tab_id).addClass('is-current');
                }
            )
        }
    )
})(jQuery);