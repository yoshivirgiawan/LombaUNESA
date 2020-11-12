(function($) {
    "use strict";

    // Toggle the side navigation
    $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
        $("body").toggleClass("sidebar-toggled");
        $(".sidebar").toggleClass("toggled");
        if ($(".sidebar").hasClass("toggled")) {
            $('.sidebar .collapse').collapse('hide');
        }
    });

    $(window).resize(function() {
        if ($(window).width() < 768) {
            $('.sidebar .collapse').collapse('hide');
        }

        // Toggle the side navigation when window is resized below 480px
        if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
            $("body").addClass("sidebar-toggled");
            $(".sidebar").addClass("toggled");
            $('.sidebar .collapse').collapse('hide');
        }
    });

    $('.notify-list').slimScroll({
        height: '435px'
    });

    $('.content-container').slimScroll({
        height: 'calc(var(--vh, 1vh)*100 - 73px - 1.5rem)'
    });

    $('.body-chat-container').slimScroll({
        height: '100%'
    });

    $('.chat .chat-body').slimScroll({
        height: '100%'
    });

})(jQuery);