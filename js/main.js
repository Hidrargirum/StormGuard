/**
 * Created by Trexer on 03.07.2018.
 */
(function ($) {
    $(document).ready(function () {
        $('.reviews__slider').slick({
            dots: true,
            arrows: false,
        });

        $('.header__bottom-toggle-menu-btn').on('click', function(){
            $(this).toggleClass('active');
            $('.header__bottom-menu').stop().slideToggle();
        });

        $('.menu-item-has-children').hover(function(){
            var subMenu = $(this).children('.sub-menu');
            $(subMenu).slideToggle();
            $(subMenu).focus(function(){
                $(subMenu).css('display', 'block');
            });
            console.log(1);
        });
    });
})(jQuery);

