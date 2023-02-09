<?php
if (!defined('_INDEX_'))
    define('_INDEX_', true);
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/index.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/index.php');
    return;
}

include_once(G5_THEME_PATH . '/head.php');
?>

<main>
    <section id="main_section01" class="mainVisual" data-section-name="first">

        <div class="visual_slide01">
            <div class="main_itm m_itm01">
                <div class="visual_txt">
                    <span>동원건설산업과 함께 하세요.</span>
                    <h2>당신의 생활 곳곳에서 <br>새로운 경험이 시작됩니다.</h2>
                    <p>일상과 예술의 경계를 지우는 건축미학, 도시의 감성을 자극하는 아름다움을 짓습니다.</p>
                </div>
                <div class="visual_sub_text">
                    <strong>건축부문</strong><br>
                    <span>한남동 UN빌리지 상월대</span>
                </div>
            </div>
            <div class="main_itm m_itm02">
                <div class="visual_txt">
                    <span>동원건설산업과 함께 하세요.</span>
                    <h2>당신의 생활 곳곳에서 <br>새로운 경험이 시작됩니다.</h2>
                    <p>일상과 예술의 경계를 지우는 건축미학, 도시의 감성을 자극하는 아름다움을 짓습니다.</p>
                </div>
                <div class="visual_sub_text">
                    <strong>건축부문</strong><br>
                    <span>원희캐슬 지식산업센터</span>
                </div>
            </div>
            <div class="main_itm m_itm03">
                <div class="visual_txt">
                    <span>동원건설산업과 함께 하세요.</span>
                    <h2>국토의 새영역을 개척하여 <br>하나로 이어가겠습니다.</h2>
                    <p>시대의 변화를 이끄는 첨단기술로 대한민국의 내일을 앞당기고 있습니다.</p>
                </div>
                <div class="visual_sub_text">
                    <strong>인프라부문</strong><br>
                    <span>경기 포천 샴발라 CC</span>
                </div>
            </div>
        </div>
    </section>
    <section id="main_section02" class="mainContent01 sec" data-section-name="second">
        <div class="inner">
            <div class="m_cont_tit">
                <h2>사업분야</h2>
                <p>건전한 기업정신과 체계적인 지식 경영으로 내일의 가치를 높여갑니다.</p>
            </div>
            <div class="content01_itm">
                <div class="con01_img con_img01">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_business01.jpg" alt="">
                    <div class="content_text">
                        <strong>건축</strong>
                        <span>도시에 감성을 더하는 건축문화</span>
                    </div>
                    <div class="content_link">
                        <a href="<?php echo G5_THEME_URL ?>/doc/business01.php">사업소개 <i class="xi-angle-right"></i></a>
                        <a href="#!">사업실적 <i class="xi-angle-right"></i></a>
                    </div>
                </div>
                <div class="con01_img con_img02">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_business02.jpg" alt="">
                    <div class="content_text">
                        <strong>인프라</strong>
                        <span>국토의 새영역을 개척하여 하나로</span>
                    </div>
                    <div class="content_link">
                        <a href="<?php echo G5_THEME_URL ?>/doc/business02.php">사업소개 <i class="xi-angle-right"></i></a>
                        <a href="#!">사업실적 <i class="xi-angle-right"></i></a>
                    </div>
                </div>
                <div class="con01_img con_img03">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_business03.jpg" alt="">
                    <div class="content_text">
                        <strong>부동산자산관리</strong>
                        <span>부동산의 자산가치 및 수익 극대화</span>
                    </div>
                    <div class="content_link">
                        <a href="<?php echo G5_THEME_URL ?>/doc/business03.php">사업소개 <i class="xi-angle-right"></i></a>
                        <a href="#!">사업실적 <i class="xi-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="main_section03" class="mainContent02 sec" data-section-name="third">
        <div class="inner">
            <div class="m_cont_tit">
                <h2>주요 사업실적</h2>
                <p>일상과 예술의 경계를 지우는 건축미학, 도시의 감성을 자극하는 아름다움을 짓습니다.</p>
            </div>
            <div class="content02_itm">
                <div class="con02_img">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_content02_img01.jpeg" alt="">
                    <div class="content_top_text">
                        <span>진행중</span>
                    </div>
                    <div class="content_bottom_text">
                        <p>동원시스템즈 아산 캔공장</p>
                    </div>
                </div>
                <div class="con02_img">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_content02_img02.jpeg" alt="">
                    <div class="content_top_text">
                        <span>진행중</span>
                    </div>
                    <div class="content_bottom_text">
                        <p>동원홈푸드 양산 물류센터</p>
                    </div>
                </div>
                <div class="con02_img">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_content02_img03.jpeg" alt="">
                    <div class="content_top_text">
                        <span>준 공</span>
                    </div>
                    <div class="content_bottom_text">
                        <p>동원로엑스 광양 물류창고</p>
                    </div>
                </div>
                <div class="con02_img">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_content02_img04.jpeg" alt="">
                    <div class="content_top_text">
                        <span>진행중</span>
                    </div>
                    <div class="content_bottom_text">
                        <p>안산 원시동 지식산업복합센터</p>
                    </div>
                </div>
                <div class="con02_img">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_content02_img05.jpeg" alt="">
                    <div class="content_top_text">
                        <span>진행중</span>
                    </div>
                    <div class="content_bottom_text">
                        <p>인천 석남 혁신물류센터</p>
                    </div>
                </div>
                <div class="con02_img">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_content02_img06.jpeg" alt="">
                    <div class="content_top_text">
                        <span>진행중</span>
                    </div>
                    <div class="content_bottom_text">
                        <p>부천 옥길 지식산업센터</p>
                    </div>
                </div>
                <div class="con02_img">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_content02_img07.jpg" alt="">
                    <div class="content_top_text">
                        <span>진행중</span>
                    </div>
                    <div class="content_bottom_text">
                        <p>동탄2A105BL 민간참여 공동주택</p>
                    </div>
                </div>
                <div class="con02_img">
                    <img src="<?php echo G5_THEME_URL ?>/img/m_content02_img08.jpg" alt="">
                    <div class="content_top_text">
                        <span>진행중</span>
                    </div>
                    <div class="content_bottom_text">
                        <p>배곧대교 민간투자사업 건설공사</p>
                    </div>
                </div>
            </div>
            <div class="view">
                <a href="#!">View more</a>
            </div>
        </div>
    </section>
    <section id="main_section04" class="mainContent03 sec" data-section-name="fourth">
        <div class="inner">
            <div class="m_cont_tit">
                <h2>Sales<br>
                    Information</h2>
                <p>미래를 내다보는 동원의 건설 과학으로<br>
                    21세기 첨단 건축 문화가 한걸음 가까워집니다.</p>
            </div>
            <div class="content03_itm">
                <a href="http://xn--9w3b97b52b1g23iu0iw5n.com/" target="_blank">
                    <div class="con03_img">
                        <img src="<?php echo G5_THEME_URL ?>/img/m_sales01.jpeg" alt="">
                        <div class="con03_over">
                            <span>분양중</span>
                        </div>
                        <div class="content03_bottom_text">
                            <h3>신안산 비즈스타</h3>
                            <p>(홍보관) 경기도 안산시 단원구 원시동 768-5번지</p>
                            <strong>1644-0226</strong>
                        </div>
                    </div>
                </a>
                <a href="http://www.arcentower.com" target="_blank">
                    <div class="con03_img">
                        <img src="<?php echo G5_THEME_URL ?>/img/m_sales02.jpeg" alt="">
                        <div class="con03_over">
                            <span>분양중</span>
                        </div>
                        <div class="content03_bottom_text">
                            <h3>가산 YPP아르센타워</h3>
                            <p>(홍보관) 서울시 금천구 디지털로 121, 에이스 가산타워 108호</p>
                            <strong>02)6949-3949</strong>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    // 스크롤 이벤트 막기(true의 경우 화면 떨림현상 생김)
    window.addEventListener("wheel", function (e) {
        e.preventDefault();
    },
        { passive: false });


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
</script>

<?php
include_once(G5_THEME_PATH . '/tail.php');
?>