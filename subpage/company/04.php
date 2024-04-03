<?php
include "../../../../common.php";

$tNum="회사소개";
$sNum="오시는 길";

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="common">
  <div class="width">
    <div class="board_title wow fadeInup"  data-wow-duration="1s">
      <h2  class="fw500"><?=$sNum?></h2>
      <p>오시는 방법을 보다 쉽게 안내해 드립니다.</p>
    </div>

    <div class="map_wrap wow fadeInup" id="map"  data-wow-duration="1s"  data-wow-delay=".7s">
      <!-- * 카카오맵 - 지도퍼가기 -->
      <!-- 1. 지도 노드 -->
      <div id="daumRoughmapContainer1680135758355" class="root_daum_roughmap root_daum_roughmap_landing"></div>

      <!--
      	2. 설치 스크립트
      	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
      -->
      <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

      <!-- 3. 실행 스크립트 -->
      <script charset="UTF-8">
      	new daum.roughmap.Lander({
      		"timestamp" : "1680135758355",
      		"key" : "2e9pp",
      		"mapHeight" : "400"
      	}).render();
      </script>

      <div class="map_company">
        <h2><img src="<?php echo G5_THEME_IMG_URL ?>/logo.png" alt=""></h2>
        <ul>
          <li><i class="ri-map-pin-line"></i>서울특별시 중구 한강대로 405</li>
          <li><i class="ri-phone-line"></i>000-000-0000</li>
        </ul>
      </div>
    </div>

    <div class="map_btn">
      <a href="#" target="_blank"><i class="xi-naver"></i>네이버 지도</a>
      <a href="#" target="_blank"><i class="xi-kakaotalk"></i>카카오 지도</a>
    </div>

    <div class="visit_wrap">
      <div class="visit_box">
        <h3><i class="fa-solid fa-bus"></i> 버스 이용시</h3>
        <ul>
          <li><span class="bus1">간선</span> 000, 111, 222, 333</li>
          <li><span class="bus2">지선</span> 8888, 4356</li>
          <li><span class="bus3">버스</span> 8888, 4356</li>
        </ul>
      </div>
      <div class="visit_box">
        <h3><i class="fa-solid fa-train-subway"></i>지하철역 이용시</h3>
        <ul>
          <li><span class="way1">1호선</span> 000, 111, 222, 333</li>
          <li><span class="way2">2호선</span> 8888, 4356</li>
          <li><span class="way3">7호선</span> 8888, 4356</li>
          <li><span class="way4">분당선</span> 8888, 4356</li>
        </ul>
      </div>
      <div class="visit_box">
        <h3><i class="fa-solid fa-car"></i>자가용 이용시</h3>
        <ul>
          <li>네비게이션에 서울특별시 중구 한강대로 405 입력 후, 건물 뒤편 주차장에 주차 가능(최대 3시간)</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
