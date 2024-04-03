<?php
include "../../../../common.php";

$tNum="회사소개";
$sNum="연혁";

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.php');
?>

<div class="common">
  <div class="width">
    <div class="board_title wow fadeInup"  data-wow-duration="1s">
      <h2  class="fw500"><?=$sNum?></h2>
    </div>

    <div class="history_circle wow fadeIn" data-wow-duration="1s"  data-wow-delay=".3s">
      <p>현재<br>~<br>2010</p>
    </div>

    <div class="history_wrap">
      <span class="history_line"></span>
      <div class="history_left history_box wow fadeInup" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".3s">
        <h2>2023.03</h2>
        <p>연혁을 입력해주세요.</p>
        <img src="<?php echo G5_THEME_IMG_URL ?>/history01.png" alt="">
      </div>
      <div class="history_right history_box  wow fadeInup" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".3s">
        <h2>2021.07</h2>
        <p>연혁을 입력해주세요.</p>
        <br>
        <p>연혁을 입력해주세요.</p>
      </div>
      <div class="history_left history_box wow fadeInup" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".3s">
        <h2>2021.03</h2>
        <p>연혁을 입력해주세요.</p>
      </div>
      <div class="history_right history_box wow fadeInup" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".3s">
        <h2>2020.12</h2>
        <p>연혁을 입력해주세요.</p>
        <img src="<?php echo G5_THEME_IMG_URL ?>/history01.png" alt="">
      </div>
      <div class="history_left history_box wow fadeInup" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".3s">
        <h2>2018.03</h2>
        <p>연혁을 입력해주세요.</p>
        <img src="<?php echo G5_THEME_IMG_URL ?>/history01.png" alt="">
      </div>
      <div class="history_right history_box wow fadeInup" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".3s">
        <h2>2016.12</h2>
        <p>연혁을 입력해주세요.</p>
      </div>
      <div class="history_left history_box wow fadeInup" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".3s">
        <h2>2015.03</h2>
        <p>연혁을 입력해주세요.</p>
      </div>
      <div class="history_right history_box wow fadeInup" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".3s">
        <h2>2012.12</h2>
        <p>연혁을 입력해주세요.</p>
        <img src="<?php echo G5_THEME_IMG_URL ?>/history01.png" alt="">
      </div>
      <div class="history_left history_box wow fadeInup" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".3s">
        <h2>2010.03</h2>
        <p>연혁을 입력해주세요.</p>
      </div>
    </div>
  </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
