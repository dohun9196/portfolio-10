$(function () {


    // 메인페이지
    $('.visual_slide01').slick({
        dots: false,
        autoplay: false,
        arrows: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplaySpeed: 4000,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
    });

    // $(".visual_slide01").slick.refresh();

    AOS.init({
        duration: 1200
    });


    $('#header').hover(function () {
        $('#header').addClass('top');
    }, function () {
        $('#header').removeClass('top');
    });

    $(window).scroll(function () {
        var scrollValue = $(document).scrollTop();
        console.log(scrollValue);
    });

    $(window).scroll(function () {
        var header = $(document).scrollTop();
        if (header > 2) {
            $('#header').addClass('on');
        } else {
            $('#header').removeClass('on');
        }
    });




    $(window).scroll(function () {
        var height = $(document).scrollTop();
        if (height > 950) {
            $('#top_btn_my a').addClass('on');
        } else if (height < 950) {
            $('#top_btn_my a').removeClass('on');
        }
    });


    $('.main_side_nav a').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 700);
        return false;
    });


    $.scrollify({
        interstitialSection: "#main_section01, #main_section02, #main_section03, #main_section04,#footer",
        scrollSpeed: 700,
        scrollbars: true,

    });
    $('.page_nav li a').on('click', function () {
        $('.on').removeClass('on');
        $(this).addClass('on');
    })
    $('.p_w a').on('click', function () {
        $('.on').removeClass('on');
        $('.main_side_nav').addClass('on');
    })


});

