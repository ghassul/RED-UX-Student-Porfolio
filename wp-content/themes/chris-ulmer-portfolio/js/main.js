
jQuery(document).ready(function(){
    jQuery('.skillbar').each(function(){
        jQuery(this).find('.skillbar-bar').animate({
            width:jQuery(this).attr('data-percent')
        },3000);
    });

    $('.bxslider').bxSlider({
        mode: 'horizontal',
        minSlides: 2,
        maxSlides: 3,
        moveSlides: 1,
        slideMargin: 0,
        infiniteLoop: true,
        pager: false,
        nextText: '<i class="fa fa-angle-double-right"></i>',
        prevText: '<i class="fa fa-angle-double-left"></i>'

    });

});
