$(document).ready(function(){

    /* перевод картинки svg в код */
    $('.icon img, img.icon').each(function(){
        var $img = $(this);
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
        $.get(imgURL, function(data) {
            var $svg = $(data).find('svg');
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
            $svg = $svg.removeAttr('xmlns:a');
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }
            $img.replaceWith($svg);
        }, 'xml');
    });
    /* end перевод картинки svg в код */



    $('.hamburger').click(function () {
        $('.main_menu').toggleClass('open');
        $('html').toggleClass('page-noscroll');

        $('.main_menu .mm_close').click(function () {
            $('.main_menu').removeClass('open');
            $('html').removeClass('page-noscroll');
        });
        return false;
    });
    $(document).on('click', function(e) {
        if (!$(e.target).closest(".main_menu.open").length) {
            $(".main_menu.open").removeClass('open');
            $("html").removeClass('page-noscroll');
        }
        e.stopPropagation();
    });

    var arrow='<span class="arrow"></span>';
    $('.menu .sub-menu').before(arrow);

    $('.menu .arrow').click(function(){
        $(this).next().slideToggle();
        $(this).toggleClass('act');
        $(this).parent().toggleClass('active');
    });

    if($('.works_list > div').length > 3){
        $('.works_list').slick({
            slidesToShow:3,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            responsive: [

                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }else if($(window).innerWidth() < 575 && $('.works_list > div').length > 1){
        $('.works_list').slick({
            autoplay: false,
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    }else if($(window).innerWidth() < 991 && $('.works_list > div').length > 2){
        $('.works_list').slick({
            autoplay: false,
            dots: true,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1
        });
    }


    if($('.partners_list > div').length > 6){
        $('.partners_list').slick({
            slidesToShow:6,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    }else if($(window).innerWidth() < 575 && $('.partners_list > div').length > 2){
        $('.partners_list').slick({
            autoplay: false,
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1
        });
    }else if($(window).innerWidth() < 991 && $('.partners_list > div').length > 4){
        $('.partners_list').slick({
            autoplay: false,
            dots: false,
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1
        });
    }else if($(window).innerWidth() < 1200 && $('.product_list_slider > div').length > 5){
        $('.product_list_slider').slick({
            autoplay: false,
            dots: false,
            arrows: true,
            slidesToShow: 5,
            slidesToScroll: 1
        });
    }



    $(window).resize(function(){
        var header_height = $('header').outerHeight();
        $('header').next().css({'margin-top': header_height+'px'});
        $(window).scroll(function(){
            if ($(this).scrollTop() > header_height) {
                $('header').addClass('fixed');
            } else {
                $('header').removeClass('fixed');
            }

        });

    });
    $(window).resize();

});





