<?php
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/tail.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/shop.tail.php');
    return;
}
?>

<footer id="footer" class="footer">
    <div class="top">
        <div class="inner">
            <ul>
                <li><a href="#!">개인정보처리방침</a></li>
                <li><a href="#!">찾아오시는 길</a></li>
                <li><a href="#!">신용평가 등급</a></li>
                <li><a href="#!">결산공고</a></li>
                <li><a href="#!">정도경영신고센터</a></li>
                <li><a href="#!">이메일무단수집거부</a></li>
            </ul>
            <div class="family">
                <ul>
                    <li>Family Site <i class="xi-angle-up-min"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="f_content">
        <div class="inner">
            <div class="left_logo">
                <img src="<?php echo G5_THEME_URL ?>/img/ft-logo.png" alt="">
            </div>
            <div class="right">
                <div class="add">
                    <strong>서울영업소</strong><span>주소</span><strong class="lether">서울시 서초구 마방로 68(서울시 서초구 양재동 275)
                        동원산업빌딩
                        7층</strong><span>tel</span>
                    <strong>02) 589-4900</strong><span>FAX</span><strong>02) 589-4920</strong>
                </div>
                <div class="add last">
                    <strong>본점</strong><span>주소</span><strong>안양시 동안구 시민대로 327번길 7, 512호 (관양동,
                        대명글로벌비즈스퀘어)</strong><span>tel</span>
                    <strong>031) 425-4801</strong>
                </div>
            </div>
            <div class="copy">
                &copy;Copyright 2020 Dongwon Construction Industries. All Rights Reserved
            </div>
        </div>
    </div>
</footer>
<div id="top_btn_my">
    <a href="#!">
        top
    </a>
</div>

<?php
if (defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH . '/index-aside.php'; // 팝업레이어
}
?>

</div>


<script src="<?php echo G5_THEME_URL ?>/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/aos.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>



<?php
if (G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
    $(function () {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
    });
    AOS.init({
        duration: 2000,
    });
</script>


<?php
include_once(G5_THEME_PATH . "/tail.sub.php");