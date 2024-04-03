<?php
include "../../../../common.php";

$tNum="회사소개";
$sNum="인사말";

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.php');
?>

<div class="common">
  <div class="width">
    <div class="board_title wow fadeInup"  data-wow-duration="1s">
      <h2  class="fw500"><?=$sNum?></h2>
    </div>

    <div class="greeting_wrap">
      <div class="greeting_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
        <h2>를 방문해주셔서 감사합니다.</h2>
        <p>안녕하세요 마일드테마입니다. 먼저 테마를 구매해주셔서 감사합니다. <br>자세한 테마 커스텀 방법과, 이미지 교체방법은 파일 안 메뉴얼에 포함되어있습니다. <br>궁금하시거나 오류에 관한 사항은 언제든지 문의해주세요.</p>
        <p>항상 좋은 컨텐츠를 개발 및 업그레이드 하겠습니다. 감사합니다.</p>
      </div>
      <div class="greeting_img">
        <img src="<?php echo G5_THEME_IMG_URL ?>/greeting.png" alt="">
      </div>
    </div>

    <ul class="greeting_info wow fadeInup" data-wow-duration="1s">
      <li>
        <p>회사명</p>
        <span></span>
      </li>
      <li>
        <p>대표</p>
        <span>000</span>
      </li>
      <li>
        <p>사업자등록번호</p>
        <span>000-000-000</span>
      </li>
      <li>
        <p>전화번호</p>
        <span>000-000-0000</span>
      </li>
      <li>
        <p>주소</p>
        <span>주소를 입력해주세요.</span>
      </li>
    </ul>
  </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
