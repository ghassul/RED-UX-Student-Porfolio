
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
    
    var $window = $(window),
        $mainNav = $('.main-navigation'), // nav wrapper element
        stickyNavTop = $mainNav.offset().top;
    
    // A helper function to check whether nav should be fixed
    var stickyNav = function () {
        var scrollTop = $window.scrollTop();

        if ( scrollTop > stickyNavTop ) {
            if ( $('body').hasClass('logged-in') ) {
                $mainNav.addClass('under-admin-bar fixed-nav');
            } else {
                $mainNav.addClass('fixed-nav');
            }
        } else {
            if ( $('body').hasClass('logged-in') ) {
                $mainNav.removeClass('under-admin-bar fixed-nav');
            } else {
                $mainNav.removeClass('fixed-nav');
            }
        }
    };
    
    // Initialize nav classes...
    stickyNav();
    
    // Then re-run on scroll
    $window.scroll(function () {
        stickyNav();
    });
});
