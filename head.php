<?php
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/head.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH . '/shop.head.php');
    return;
}
include_once(G5_THEME_PATH . '/head.sub.php');
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_LIB_PATH . '/outlogin.lib.php');
include_once(G5_LIB_PATH . '/poll.lib.php');
include_once(G5_LIB_PATH . '/visit.lib.php');
include_once(G5_LIB_PATH . '/connect.lib.php');
include_once(G5_LIB_PATH . '/popular.lib.php');
?>

<!-- 상단 시작 { -->


<?php
if (defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH . '/newwin.inc.php'; // 팝업레이어
}
?>
<div class="Wrap">
    <header id="header" class="">
        <div class="inner">
            <h1>
                <a href="/">
                    <img class="h_c" src="<?php echo G5_THEME_URL ?>/img/logo.png" alt="">
                    <img class="h_w" src="<?php echo G5_THEME_URL ?>/img/logo_w.png" alt="">
                </a>
            </h1>
            <nav class="gnb">
                <?php
                include G5_THEME_PATH . '/doc/nav.php';
                ?>
            </nav>
        </div>
    </header>


    <!-- <?php
    if (!defined('_INDEX_')) {
        include G5_THEME_PATH . '/sub.head.php';
    }
    ?> -->