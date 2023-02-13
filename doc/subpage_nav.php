<section class="subpage_top">
    <div class="inner">
        <div class="sp_top_tit">
            <strong>
                <?php echo $subtitle ?>
            </strong>
            <span>초우량 종합건설회사를 지향하는 동원건설산업은 고객을 위한 가치창조를 목표로 합니다.</span>
        </div>
    </div>
</section>
<section class="subpage_nav">
    <div class="inner">
        <ul>
            <li><a href="/" class="main_home"></a></li>
            <li><a href="#!" class="header_gnb">
                    <?php echo $title ?>

                    <ul class="subpage_drop">
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/company01.php">회사소개</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/business01.php">사업분야</a></li>
                        <li><a href="">지속가능경영</a></li>
                        <li><a href="">홍보센터</a></li>
                        <li><a href="">인재채용</a></li>
                        <li><a href="">고객센터</a></li>
                    </ul>
                </a>
            </li>
            <li id="sub_dep_company" class="sub_dep"><a href="<?php echo G5_THEME_URL ?>/doc/company01.php">
                    <?php echo $subtitle ?>
                    <ul class="subpage_drop">
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/company01.php">CEO 인사말</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/company02.php">">회사개요</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/company03.php">">기업연혁</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/company04.php">">조직구성</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/company05.php">">재무 / 신용정보</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/company06.php">">그룹사 소개</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/company07.php">">찾아오시는 길</a></li>
                    </ul>
                </a>
            </li>
            <li id="sub_dep_business" class="sub_dep"><a href="<?php echo G5_THEME_URL ?>/doc/business01.php">
                    <?php echo $subtitle ?>
                    <ul class="subpage_drop">
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/business01.php">건축부문</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/business02.php">인프라부문</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/business03.php">부동산자산관리</a></li>
                        <li><a href="#!">연도별 실적</a></li>
                    </ul>
                </a>
            </li>
        </ul>
    </div>
</section>
<script>


    // company 페이지 네비게이션
    var pageUrl = window.location.href;
    $(window).on('load', function () {
        if (pageUrl.indexOf('company') > -1) { // url에 company 글자가 있으면 실행
            $('#sub_dep_company').addClass('on');
            $('.subpage_top').css({ "background": "url(../img//sub/sub_top01.jpg)", 'background-repeat': 'no-repeat', 'background-position': 'center center', 'background-size': 'cover' });
        } else {
            $('#sub_dep_company').removeClass('on');
        }
    });

    // business 페이지 네비게이션
    var pageUrl = window.location.href;
    $(window).on('load', function () {
        if (pageUrl.indexOf('business') > -1) { // url에 business 글자가 있으면 실행
            $('#sub_dep_business').addClass('on');
            $('.subpage_top').css({ "background": "url(../img//sub/sub_top02.jpg)", 'background-repeat': 'no-repeat', 'background-position': 'center center', 'background-size': 'cover' });
        } else {
            $('#sub_dep_business').removeClass('on');
        }
    });

</script>