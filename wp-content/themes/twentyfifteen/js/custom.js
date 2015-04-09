jQuery(function ($) {
    $(document).ready(function () {
        if ($("#site-navigation")) {
            $('#site-navigation .nav-menu li').each(function () {
                if ($(this).hasClass('current-menu-parent') || $(this).hasClass('current-page-ancestor')) {
                    $(this).children('button.dropdown-toggle').addClass('toggle-on').addClass('toggle-on-clicked').attr('aria-expanded', 'true');
                    $(this).children('ul.sub-menu').addClass('toggled-on');
                }
            });
        }
    });
});