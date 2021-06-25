/*--------------------------------------------------------------
 Custom js
 --------------------------------------------------------------*/
jQuery(document).ready(function ($) {
    'use strict';

	$('nav#menu').mmenu({
		wrappers: ["wordpress"]
    });

    // mini-cart
    var $mini_cart = $('.mini-cart');
    $mini_cart.on('click', function (e) {
        $(this).addClass('open');
    });

    $(document).on('click', function (e) {
        if ($(e.target).closest($mini_cart).length == 0) {
            $mini_cart.removeClass('open');
        }
    });

    // search in menu
    var $search_btn = $('.search-box > i'),
        $search_form = $('form.search-form');

    $search_btn.on('click', function () {
        $search_form.toggleClass('open');
    });

    $(document).on('click', function (e) {
        if ($(e.target).closest($search_btn).length == 0
            && $(e.target).closest('input.search-field').length == 0
            && $search_form.hasClass('open')) {
            $search_form.removeClass('open');
        }
    });

});
