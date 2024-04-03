<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
add_javascript(G5_POSTCODE_JS, 0);    //다음 주소 js
include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');
?>

<div id="main" class="main page">
  <div class="main_text wow fadeInup" data-wow-duration=".7s" data-wow-offset="250" data-wow-delay=".3s">
    <h3 ><img src="<?php echo G5_THEME_IMG_URL ?>/textlogo.png" alt=""></h3>
    <h4>서울대학교 간호대학 출신 간호사와 교수가 기획한</h4>
    <h2>프리미엄 <b>간호사 동행 서비스</b></h2>
    <p>비의료인이 아닌 <b>서울대학교 간호대학 출신 간호사와 상급종합병원에서 근무한 간호사</b>
  중  <br>엄격한 심사 과정을 거친 분들이 직접 동행합니다</p>
    <!-- <a href="#page3">더 케어서비스 살펴보기</a> -->
  </div>
</div>

<div class="page1 page common">
  <div class="width">
    <h3 class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="250"><img src="<?php echo G5_THEME_IMG_URL ?>/img1.png" alt=""></h3>
    <h4 class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">3개월을 기다린 진료시간 <b>단, 3분</b></h4>
    <h5 class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">좋은 것만 드리고 싶은 부모님을 위한</h5>
    <h2 class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">프리미엄 의료 동행 서비스 <br> 더 케어</h2>
    <div class="box_wrap">
      <div class="box">
        <span><iframe width="560" height="315" src="https://www.youtube.com/embed/-DBLYumEahA?si=sNPxv0y9jmTko2nA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></span>
        <p><b>서은영 서울대 교수</b> 인사말</p>
      </div>
      <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
        <span><iframe width="560" height="315" src="https://www.youtube.com/embed/prEq8iHuQdw?si=qfXnM9_4258zcU5V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></span>
        <p><b>정영록 대표</b> 인사말</p>
      </div>
    </div>
  </div>
</div>

<div class="page2 page common">
  <div class="width">
    <div class="text wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>더 케어서비스는 이렇게 시작되었습니다.</h3>
      <h2>왜 이 서비스가 필요할까요?</h2>
      <h4>2019년 겨울, 이 <b>서비스의 모티브가 된 <br>
      어느 환자의 이야기</b>입니다</h4>
      <h5>김명환씨(가명)는 대장암을 진단 받고 항암치료를 받았습니다. <br>
      3주간 변을 보지 못한 게 이상했지만. 환자는 이를 대수롭지 않게 생각했습니다.
      </h5>
      <div class="cut1">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img2.png" alt="">
        <p>54세 김명환씨 (가명, 대장암 3기)</p>
      </div>
    </div>
    <div class="cut2 wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <span class="img">
        <img src="<?php echo G5_THEME_IMG_URL ?>/cut1.png" alt="" class="pc">
        <img src="<?php echo G5_THEME_IMG_URL ?>/mcut1.png" alt="" class="mob">
      </span>
      <h2>완치가 코앞이라 굳이 의사선생님께 <br>
      <b>이 사실을 말씀드리지도 않았습니다.</b></h2>
      <span class="line"></span>
    </div>
    <div class="cut3 wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h2>환자는 대장암이 대장을  막아 대변을 못 보던거였어요</h2>
      <span class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/cut2.png" alt=""></span>
    </div>
    <div class="cut4 wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h2>결국 이 분은 장이 터져 응급수술을 받고 <br>
      중환자실로 옮겨졌지만 돌아가시게 되었습니다
      </h2>
      <span class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/cut3.png" alt=""></span>
      <h3>간호사인 내가 이 환자분의 보호자로 <br>
      따라갔다면, 상황은 분명히 달라졌을 겁니다.
      </h3>
    </div>
    <div class="cut5 wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <span class="img">
        <img src="<?php echo G5_THEME_IMG_URL ?>/cut4.png" alt="" class="pc">
        <img src="<?php echo G5_THEME_IMG_URL ?>/mcut4.png" alt="" class="mob">
      </span>
      <h2 class="wow fadeInup">당신에게는 <br>
      <b>이런 일이 일어나지 않도록…</b>
      </h2>
    </div>
  </div>
</div>

<div id="page3" class="page3 page common">
  <div class="width">
    <div class="title wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>프리미엄 의료 동행 서비스</h3>
      <h2><b>더 케어</b>란?</h2>
    </div>
	<div class="seqbox none-768">
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_01.png" alt=""></div>
			<div style="width:5% !important;"><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_arrow.png" alt=""></div>
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_02.png" alt=""></div>
			<div style="width:5% !important;"><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_arrow.png" alt=""></div>
			<div>
				<img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_03.png" alt="">
			</div>
		</div>
		<div class="flexbox" style="justify-content: flex-end;">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_arrow.png" style="width:17%;transform:rotate(90deg);margin:20px 0;"></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_06.png" alt=""></div>
			<div style="width:5% !important;"><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_arrow.png" style="transform:rotate(180deg);"></div>
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_05.png" alt=""></div>
			<div style="width:5% !important;"><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_arrow.png" style="transform:rotate(180deg);"></div>
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_04.png" alt=""></div>
		</div>
	</div>
	<div class="seqbox block-768">
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_01.png" alt=""></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_arrow.png" style="width:14%;transform:rotate(90deg);margin:50px 0;"></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_02.png" alt=""></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_arrow.png" style="width:14%;transform:rotate(90deg);margin:50px 0 0px;"></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_03.png" alt=""></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_arrow.png" style="width:14%;transform:rotate(90deg);margin:50px 0;"></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_04.png" alt=""></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_arrow.png" style="width:14%;transform:rotate(90deg);margin:50px 0 0px;"></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_05.png" alt=""></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_arrow.png" style="width:14%;transform:rotate(90deg);margin:50px 0 0px;"></div>
		</div>
		<div class="flexbox">
			<div><img src="<?php echo G5_THEME_IMG_URL ?>/page3_top_06.png" alt=""></div>
		</div>
	</div>
    <div class="box_wrap wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <div class="text">
        <h4><i>POINT 01.</i> 전문의료인에 의한</h4>
        <p><b>더 케어</b>는 비의료인이 주로 동행하는 타서비스와 다르게 <br>
          서울대학교 간호대학 출신 간호사와 상급종합병원에서 근무한 간호사 중<br>
        엄격한 심사 과정을 거친 분들이 직접 동행합니다.</p>
      </div>
      <div class="img">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img3.png" alt="">
      </div>
    </div>
    <div class="box_wrap box_wrap2 wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <div class="text">
        <h4><i>POINT 02.</i> 집 앞부터 집 앞까지</h4>
        <p><b>더 케어</b>는 고객이 집을 나오면서부터 시작, 다시 집에 들어가실 때까지 <br>
안전하게 모시겠습니다. 보호자가 안심할 수 있도록, <br>
실시간으로 고객의 위치를 문자로 전송드립니다.</p>
      </div>
      <div class="img">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img4.png" alt="">
        <span class="img_text">
          <img src="<?php echo G5_THEME_IMG_URL ?>/t1.png" alt="" class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="150">
          <img src="<?php echo G5_THEME_IMG_URL ?>/t2.png" alt="" class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="150" data-wow-delay=".2s">
          <img src="<?php echo G5_THEME_IMG_URL ?>/t3.png" alt="" class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="150" data-wow-delay=".3s">
          <img src="<?php echo G5_THEME_IMG_URL ?>/t4.png" alt="" class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="150" data-wow-delay=".4s">
        </span>
      </div>
    </div>
    <div class="box_wrap box_wrap3 wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <div class="text">
        <h4><i>POINT 03.</i> 고객이 이해할 때까지</h4>
        <p><b>더 케어</b>는 <span>(요청 시)</span> 외래 진료가 끝나고 환자분께, <br>
        그리고 보호자분께는 전화를 통해 상세히 진료결과를 <br>
        안내해드립니다. </p>
        <br>
          <p>100% 이해가 될 때까지 고객님의 전담 간호사에게 <br>
        궁금한걸 물어보세요.
        </p>
      </div>
      <div class="img">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img5.png" alt="" class="pc">
        <img src="<?php echo G5_THEME_IMG_URL ?>/mimg5.png" alt="" class="mob">
      </div>
    </div>
  </div>
</div>

<div class="page4 page common">
  <div class="width">
    <div class="title wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>프리미엄 의료 동행서비스, 더 케어</h3>
      <h2>이런 분들께 추천해요</h2>
    </div>
    <!-- <div class="box_wrap">
      <span><img src="<?php echo G5_THEME_IMG_URL ?>/img6.png" alt=""></span>
      <div class="text">
        <h2>바쁜 일상과 자녀교육 때문에 (시)부모님 외래에 따라갈 시간적 여유가
        부족한 분</h2>
        <p>시부모님 외래, 믿고 맡길 수 있는 업체 없을까요?<br>
        어차피 내가 따라가도 무슨 말인지 잘 모르겠는데… 매번 부담이에요
        </p>
      </div>
    </div> -->
    <div class="text_wrap wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <img src="<?php echo G5_THEME_IMG_URL ?>/t5.png" alt="" class="pc">
      <img src="<?php echo G5_THEME_IMG_URL ?>/mt5.png" alt="" class="mob">
    </div>
    <div class="text_wrap text_wrap2 wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <img src="<?php echo G5_THEME_IMG_URL ?>/t6.png" alt="" class="pc">
      <img src="<?php echo G5_THEME_IMG_URL ?>/mt6.png" alt="" class="mob">
    </div>
    <div class="text_wrap wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <img src="<?php echo G5_THEME_IMG_URL ?>/t7.png" alt="" class="pc">
      <img src="<?php echo G5_THEME_IMG_URL ?>/mt7.png" alt="" class="mob">
    </div>
    <div class="text_wrap text_wrap2 wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <img src="<?php echo G5_THEME_IMG_URL ?>/t8.png" alt="" class="pc">
      <img src="<?php echo G5_THEME_IMG_URL ?>/mt8.png" alt="" class="mob">
    </div>
    <div class="text_wrap wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <img src="<?php echo G5_THEME_IMG_URL ?>/t9.png" alt="" class="pc">
      <img src="<?php echo G5_THEME_IMG_URL ?>/mt9.png" alt="" class="mob">
    </div>
  </div>
</div>

<div id="page5" class="page5 page common">
  <div class="title width wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
    <h4><img src="<?php echo G5_THEME_IMG_URL ?>/star.png" alt=""></h4>
    <h3>프리미엄 의료 동행서비스, 더 케어</h3>
    <h2>실제 후기</h2>
  </div>
  <div class="scroll wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
    <div class="box_wrap">
      <div class="box">
        <div class="text">
          <h2>신경과 진료받은 <br>
          고령 환자 보호자 (52세 여성)
          </h2>
          <p>어머니가 암 치료 중 신경과 진료를 받은 후 계속 낮에 잠만 주무셔서 걱정하던 중 외래 진료 날짜가 다가왔습니다. 그리고 간호사 동행 서비스가 생겼다고 해서 이 서비스를 신청하였습니다. 동행해 주신 간호사님 덕분에 외래에 들어가서 의사 선생님께 어머니가 자꾸 주무시는 걸 조리 있게 물어보고 증상을 해결할 수 있었습니다.</p>
          <br>
          <p>꼭 필요한 서비스라고 생각합니다.</p>
        </div>
        <h3>2023.12.14 서울대학교병원 신경과 동행</h3>
      </div>
      <div class="box">
        <div class="text">
          <h2>정형외과 진료받은 <br>
67세 남자 환자 보호자 (60대 여성)
          </h2>
          <p>지방에서 올라와서 처음 대형병원을 처음 가는
          것이라 자신 없어서 동행 서비스를 신청하였어요. 병원 내 복잡하고 이리저리 왔다 갔다 하는 내내, 저는 짐을 지키고 앉아있고, 동행 간호사가 남편을 잘 안내해 주어 아주 쉽게 외래 진료를 받고 왔습니다. 감사합니다.
          </p>
        </div>
        <h3>2023.12.28 서울대학교병원 정형외과 동행</h3>
      </div>
      <div class="box">
        <div class="text">
          <h2>종양내과 진료받은 <br>
48세 남성 보호자 (40대 여성)
          </h2>
          <p>복잡한 질병과 치료로 인한 증상이 병의 진행과 관련이 있는 것인지 궁금했고, 항암 치료과정이 복잡하여 동행 서비스를 신청했음. 외래를 오래 기다리는 동안 동행 간호사가 친절하게 궁금한 식사, 운동, 생활 수칙에 대해 잘 대답해 주어 궁금증이 많이 해소됨. 병원이 너무 복잡하고 오래 기다려서 아이들을 돌봐야 하는 우리집은 동행서비스가 꼭 필요함</p>
        </div>
        <h3>2023.12.26 서울대학교병원 혈액종양내과 동행</h3>
      </div>
      <div class="box">
        <div class="text">
          <h2>종양내과 항암화학요법 치료실
동행 서비스를 받은 75세 남성 보호자
(40대 여성)
          </h2>
          <p>아버지의 항암치료는 아침 일찍 시작하는데 멀리서 사는 제가 아이를 등교시키고 가야 하는 상황이라 동행 서비스를 신청하였습니다. 제가 병원에 도착할 때까지 동행 간호사님이 아버지를 만나 접수해 주시고 항암치료 시작까지 함께해 주셔서 얼마나 편하고 좋았는지 모릅니다. 너무 필요한 서비스이고, 친절하고 품격 있는 간호사님께 고맙고, 그 간호사님이 계속 동행해 주시면 좋겠어요.
          </p>
        </div>
        <h3>2023.12.26 서울대학교병원 혈액종양내과 동행</h3>
      </div>
    </div>
  </div>
</div>

<div id="page6" class="page6 page common">
  <div class="width3">
    <h2 class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">이용요금</h2>
    <div class="time wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>*시간당  <b>30,000원</b><span>(기본 3시간)</span></h3>
      <h4>(부가세 포함 / 교통비 별도)</h4>
    </div>
    <ul class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <li><span>*</span><p>3시간 미만도 이용 가능합니다. 다만 기본 서비스 시간을 채우지 못하고 조기 종료시 차액은 환불되지 않습니다.</p></li>
      <li><span>*</span><p>3시간을 초과하는 경우 매 30분당 15,000원이 추가로 청구됩니다. <br><span>예시)서비스 4시간 이용 → 기본 요금 3시간 9만원 + 추가 1시간 3만원 = 총 12만원<br>예시2)서비스 2시간 이용 → 기본 요금 3시간 9만원 = 총 9만원</span></p></li>
      <li><span>*</span><p>교통편은 대중교통, 택시 중 선택 가능합니다. <br class="mob"></p></li>
      <li><span>·</span><p><b>예약 시간이 초과할 경우 매 30분당 15,000원이 추가로 청구</b>됩니다.</p></li>
      <li><span>·</span><p>서비스가 조기 종료되어도 예약시간으로 정산되며 환불되지 않습니다.</p></li>
    </ul>
  </div>
</div>

<div class="page7 common page">
  <div class="width4">
    <h2 class="wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">FAQ</h2>
    <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>Q.</h3>
      <p>정말 경력 간호사분들만 서비스를 하나요?</p>
    </div>
    <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>A.</h3>
      <p>저희는 서울대학교 간호대학 출신 중심의 경력간호사들 중에서도, 저희가 엄선한 사람들만이 서비스를 제공해드려요.</p>
    </div>
    <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>Q.</h3>
      <p>누가 서비스를 이용할 수 있나요?</p>
    </div>
    <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>A.</h3>
      <p>대형병원, 중소병원 관계없이 간호사 동행 서비스가 필요한 분들이라면 누구나 이용 가능합니다. <br>단, 현재는 서울 지역에 있는 병원 이용객을 대상으로만 서비스가 시행되고 있습니다. </p>
    </div>
    <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>Q.</h3>
      <p>서울에 살지 않는 사람이 서울에 있는 병원을 이용하는 경우에도 서비스를 이용할 수 있나요?</p>
    </div>
    <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>A.</h3>
      <p>네, 비서울지역 고객들도 서비스 이용이 가능합니다. 단, 서비스는 서울 내 위치한 곳에서부터 (예. 고속버스터미널, 서울역 등) 시작됩니다. </p>
    </div>
    <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>Q.</h3>
      <p>단순 항암치료나 수면내시경, 당일 시술 동행도 가능한가요?</p>
    </div>
    <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>A.</h3>
      <p>네, 가능합니다.</p>
    </div>
    <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>Q.</h3>
      <p>서비스를 사용하는데 연령 제한이 있나요?</p>
    </div>
    <div class="box wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>A.</h3>
      <p>아니요. 더케어 서비스는 연령, 성별 제한 없이 누구나 이용 가능합니다</p>
    </div>
  </div>
</div>

<div class="page8 page common">
  <div class="width">
    <div class="title wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h3>THE CARE SERVICE</h3>
      <h2>운영진 약력</h2>
      <h4>Profile</h4>
    </div>
    <div class="swiper proSwiper wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="img">
            <img src="<?php echo G5_THEME_IMG_URL ?>/people1.png" alt="">
          </div>
          <div class="text">
            <h2><b>CEO 약력</b> Chief Executive Officer</h2>
            <ul>
              <h3>학력 (Education)</h3>
              <li><span>·</span>2009 대일외고 스페인어과</li>
              <li><span>·</span>2013 서울대학교 간호대학 (학사)</li>
              <li><span>·</span>2022 서울대학교 간호대학 (석사)</li>
            </ul>
            <ul>
              <h3>경력 (Career)</h3>
              <li><span>·</span>2019-2024 서울아산병원 중환자실</li>
              <li><span>·</span>2023 샤인케어 설립</li>
            </ul>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="img">
            <img src="<?php echo G5_THEME_IMG_URL ?>/people2.png" alt="">
          </div>
          <div class="text">
            <h2><b>COO 약력</b> Chief Operating Officer</h2>
            <ul>
              <h3>학력 (Education)</h3>
              <li><span>·</span>1994 서울대학교 간호대학 (BSN)</li>
              <li><span>·</span>1997 서울대학교 간호대학 (MSN)</li>
              <li><span>·</span>2004 University of Pennsylvania (PhD)</li>
              <li><span>·</span>2004 University of Californua, Irvine (FNP)</li>
            </ul>
            <ul>
              <h3>경력 (Career)</h3>
              <li><span>·</span>1994-1996 서울대학교 병원 흉부외과</li>
              <li><span>·</span>1996-1998 서울대학교 의과대학 암연구소</li>
              <li><span>·</span>1998-2000 Medicalodge, Inc</li>
              <li><span>·</span>2001-2004 Select Nursing, Inc</li>
              <li><span>·</span>2004-2006 San Diego State University</li>
              <li><span>·</span>2006.09 ~ 서울대학교 간호대학 교수</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="btn_wrap">
      <div class="swiper-prev"><</div>
      <div class="swiper-next">></div>
    </div>
    <div class="text2 wow fadeInup" data-wow-duration=".7s" data-wow-offset="250">
      <h4>*유의사항*</h4>
      <p>더케어는 우리나라의 의료전달체계에서 구조적으로 발생할 수 밖에 없는 3분 진료를 환자분들이 최대한으로 활용하실 수 있게
      도움을 드리는 프리미엄 동행 및 설명 서비스로,  질병의 진단과 치료의 결정은 전적으로 대학병원 교수님들께서 하시며, <br>
      그에 따른 의료적 책임을 지지 않습니다.
      </p>
    </div>
  </div>
</div>

<div id="popup1" class="pop_wrap">
  <div class="pop-inner">
    <h3>개인정보취급방침</h3>
    <div class="pop-text">
      <p><span>개인정보 수집 및 이용에 관한 사항</span><br>
<br>
상담신청과 관련하여 귀사가 본인으로부터 취득한 개인정보를 수집ㆍ이용하고자 하는 경우에는 개인정보보호법 제 15조 및 제 22조, 정보통신망이용촉진 및 정보보호등에 간한 법률 제 22조에 따라 본인의 동의를 얻어야 합니다. 이에 본인은 귀사가 본인의 개인정보를 아래와 같이 수집ㆍ이용하는 것에 동의합니다.<br>
<br>
1. 개인정보의 필수적 수집ㆍ이용에 관한사항<br>
■ 개인정보의 수집ㆍ이용 목적 : 상담신청 등<br>
■ 수집ㆍ이용할 개인정보의 내용 : 개인식별정보(성명, 연락처 등)<br>
■ 개인정보의 보유 및 이용기간 : 수집ㆍ이용 동의일로부터 개인정보의 수집ㆍ이용 목적을 달성할 때까지<br>
※ 귀하는 동의를 거부할 권리가 있으나, 이에 대한 동의가 없을 경우 상담신청 등이 불가능할 수 있음을 알려드립니다.</p>
    </div>
    <div class="pop-close" onclick="pop_close();"><i class="ri-close-line"></i></div>
  </div>
</div>

<div id="popup2" class="pop_wrap">
  <div class="pop-inner">
    <h3>더케어 <b>예약하기</b></h3>
    <div class="pop-text">
      <?php include_once(G5_THEME_PATH.'/contact.php'); ?>
    </div>
    <div class="pop-close" onclick="pop_close();"><i class="ri-close-line"></i></div>
  </div>
</div>
<div id="popup3" class="pop_wrap">
  <div class="pop-inner" style="max-height:420px;">
    <h3>더케어 <b>예약하기</b></h3>
    <div class="pop-text">
      <?php include_once(G5_THEME_PATH.'/contact_end.php'); ?>
    </div>
    <div class="pop-close" onclick="location.href='/'"><i class="ri-close-line"></i></div>
  </div>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
