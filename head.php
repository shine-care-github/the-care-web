<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div class="all_wrap">

  <div class="quick pc">
    <a href="javascript:void(0)" class="pop-btn2"><img src="<?php echo G5_THEME_IMG_URL ?>/quick1.png" alt=""></a>
    <a href="#" class="tel">
      <img src="<?php echo G5_THEME_IMG_URL ?>/quick2.png" alt="">
      <button type="button" id="top_btn">
    		<span>TOP <i class="ri-skip-up-line"></i></span>
    	</button>
    </a>
  </div>
  <div class="mquick mob">
    <a href="javascript:void(0)" class="pop-btn2"><img src="<?php echo G5_THEME_IMG_URL ?>/quick3.png" alt=""> 예약하기</a>
    <a href="tel:010-7604-0747" class="tel">
      <img src="<?php echo G5_THEME_IMG_URL ?>/quick4.png" alt="">전화상담</a>
    <!-- <button type="button" id="top_btn">
      <span>TOP <i class="ri-skip-up-line"></i></span>
    </button> -->
  </div>

  <script>
  $(function() {
  		$("#top_btn").on("click", function() {
  				$("html, body").animate({scrollTop:0}, '500');
  				return false;
  		});
  });
  </script>

  <!-- pc 상단 메뉴 -->
<nav id="header">
  <?php if($is_admin){ ?>
    <ul class="main_admin">
      <li><a href="<?php echo G5_URL?>/adm">관리자</a></li>
      <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
      <li><a href="https://morecare.biz/adm/reserve_list.php">예약관리</a></li>
    </ul>
  <?php }?>
    <div class="head_menu width" id="mild_head">
      <div class="logo">
        <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/logo.png" alt=""></a>
      </div>
      <div class="pmenu">
        <a href="#main" class="topmenu" id="first_btn">홈</a>
        <a href="#page3" class="topmenu" id="second_btn">더 케어서비스란?</a>
        <a href="#page5" class="topmenu" id="third_btn">사용후기</a>
        <a href="#page6" class="topmenu" id="four_btn">이용요금</a>
      </div>
      <a href="javascript:void(0)" class="pop-btn2">예약하기</a>
      <a href="#" class="head_tel"><span><img src="<?php echo G5_THEME_IMG_URL ?>/icon1.png" alt=""></span><b>010·7604·0747</b></a>
    </div>

  <div class="menu_bg"></div>

</nav>

<!-- 모바일 메뉴 -->
<div class="mobile_head">
  <div class="mobile_logo">
    <a href="<?php echo G5_URL ?>/index.php"><img src="<?php echo G5_THEME_URL ?>/img/logo.png" alt=""></a>
  </div>
  <div class="mobile_btn">
    <a href="javascript:" class="mobile_open">
      <i class="ri-menu-line"></i>
    </a>
  </div>
</div>
<div class="mob_bg"></div>
<div id="mobile_menu" class="mobile_menu">

  <div class="mob_logo">
    <a href="<?php echo G5_URL ?>/index.php"><img src="<?php echo G5_THEME_URL ?>/img/logo.png" alt="" ></a>
    <div class="m_lang_wrap">
      <span class="mobile_close"><i class="ri-close-line"></i></span>
    </div>
  </div>

  <div class="mob_menu">
    <ul>
      <li class="topli"><a href="#main" class="momenu top_menu " id="first_btn">홈</a></li>
      <li class="topli"><a href="#page3" class="momenu top_menu" id="second_btn">더 케어서비스란?</a></li>
      <li class="topli"><a href="#page5" class="momenu top_menu" id="third_btn">사용후기</a></li>
      <li class="topli"><a href="#page6" class="momenu top_menu" id="four_btn">이용요금</a></li>
      <li class="topli"><a href="javascript:void(0)" class="pop-btn2 momenu top_menu" id="five_btn">예약하기</a></li>
    </ul>

  </div>
</div>
<div class="mob_bg"></div>

    <script type="text/javascript">
    $(function() {
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 150) {
                $("#header").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
               $("#header").removeClass("active");
            }
        });
    });
    </script>

<!-- 서브메뉴 -->
