$(function () {


    $('.visual_slide01').on('init', function () {
        $('.main_itm').eq(0).addClass('on')
    })

    // 메인페이지
    $('.visual_slide01').slick({
        dots: false,
        autoplay: true,
        arrows: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplaySpeed: 4000,
        infinite: true,
        speed: 1000,
        fade: true,
        //cssEase: 'linear',
    });

    $('.visual_slide01').on('afterChange', function (e, s, c) {
        var c = $('.slick-current');
        c.addClass('on').siblings().removeClass('on')

    })

    // $(".visual_slide01").slick.refresh();


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
        if (height > 900) {
            $('#top_btn_my a').addClass('on');
        } else if (height < 900) {
            $('#top_btn_my a').removeClass('on');
        }
    });

    // 스크롤 이벤트 막기(true의 경우 화면 떨림현상 생김)
    window.addEventListener("wheel", function (e) {
        e.preventDefault();
    }, { passive: false });


    $(window).scroll(function () {
        var height = $(document).scrollTop();
        if (height > 0) {
            $('.page_nav a').addClass('on');
        } else if (height < 0) {
            $('.page_nav a').removeClass('on')

        }

    });
    $(window).scroll(function () {
        var height = $(document).scrollTop();
        if (height > 900) {
            $('.main_side_nav').addClass('on');
        } else if (height < 900) {
            $('.main_side_nav').removeClass('on');
        }
    });
    $(window).scroll(function () {
        var height = $(document).scrollTop();
        if (height == 937) {
            $('.page_nav li:nth-child(2) a').addClass('active');
            $('.page_nav li:nth-child(2)').addClass('active');

        } else if (height == 1874) {
            $('.page_nav li:nth-child(3) a').addClass('active');
            $('.page_nav li:nth-child(3)').addClass('active');

        } else if (height >= 2808) {
            $('.page_nav li:nth-child(4) a').addClass('active');
            $('.page_nav li:nth-child(4)').addClass('active');
            $('.main_side_nav').removeClass('on');

        }
        else {
            $('.page_nav li a').removeClass('active');
            $('.page_nav li').removeClass('active');
        }
    });

    $('.main_side_nav a').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 700);
        return false;
    });
    $('#top_btn_my a').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 700);
        return false;
    });


    // $.scrollify({
    //     interstitialSection: "#main_section01, #main_section02, #main_section03, #main_section04,#footer",
    //     scrollSpeed: 700,
    //     scrollbars: true,

    // });

    // $(window).on("wheel", function (e) {
    //     console.log(e.originalEvent.deltaY)
    //     // Returns a value between -100 and 100 depending on the direction you are scrolling
    // });

    var HTML_SC = $("html");
    var page = 1;


    HTML_SC.animate({ scrollTop: 0 }, 10);
    $(window).on("wheel", function (e) {
        if (HTML_SC.is(":animated")) return;
        if (e.originalEvent.deltaY > 0) {
            if (page == 5) return;
            page++;
        } else if (e.originalEvent.deltaY < 0) {
            if (page == 1) return;
            page--;
        }
        var posTop = (page - 1) * $(window).height();
        HTML_SC.animate({ scrollTop: posTop });
    })

});