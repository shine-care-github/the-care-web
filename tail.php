<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<!-- </div> -->
<!-- all_wrap 끝 -->

<!-- 하단 시작 { -->
<div id="ft">

  <div class="footer width">
    <a href="<?php echo G5_URL ?>" class="foot_logo"><img src="<?php echo G5_THEME_IMG_URL ?>/flogo.png" alt=""></a>

    <div class="foot_info">
      <span>상호명 : 샤인케어</span>
      <span>대표 : 정영록</span>
      <span>주소 : 서울특별시 서초구 양재동 160-2</span>
      <span>사업자 등록번호 : 370-75-00421</span>
      <br>
      <span>문의 : shinecare1214@gmail.com</span>
      <br>
      <a href="<?php echo G5_URL?>/adm">admin</a>
    </div>
  </div>

</div>
</div>
<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
