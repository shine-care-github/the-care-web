<style>
.view03_a,.view03_b	{display:none;}
.ui-datepicker{min-width:280px !important;z-index:99999!important;}
</style>
<script>
$(function(){
	autoHyphen2 = function(target){
	 target.value = target.value
	   .replace(/[^0-9]/g, '')
	  .replace(/^(\d{4})(\d{2})(\d{2})$/g, "$1.$2.$3").replace(/(\-{1,2})$/g, "");
	};
    $("#re_date2").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy.mm.dd",
        showButtonPanel: true,
    });
	$(".onlynumber").keyup(function (event) {
		regexp = /[^0-9]/gi;
		v = $(this).val();
		if (regexp.test(v)) {
			//alert("숫자만 입력가능 합니다.\n-(하이픈)을 제외한 숫자만 입력하여 주세요.");
			$(this).val(v.replace(regexp, ''));
		}
	});

	$("input[name='re_answer03']").on("click", function(){
		if($(this).val()=="환자본인"){
			$(".view03_a").show();
			$(".view03_b").hide();
		}else{
			$(".view03_a").hide();
			$(".view03_b").show();
		}
	});
	//name="re_answer08"
	$("input[name='re_answer08']").on("click", function(){
		if($(this).val()=="택시"){
			$("#re_answer08_01").attr("disabled", false);
		}else{
			$("#re_answer08_01").attr("disabled", true);
		}
	});

	$("#same_addr").on("click", function(){
		$("#re_answer07_01").val($("#re_answer06_01").val());
		$("#re_answer07_02").val($("#re_answer06_02").val());
	});
});
function order_end(){
	document.applyform.reset();
	$("#popup2").fadeOut(300);
	$("#popup3").fadeIn(500);
}
</script>
<script>
    function pop_zip(addr1) {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    //document.getElementById("sample6_extraAddress").value = extraAddr;

                } else {
                    //document.getElementById("sample6_extraAddress").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                //document.getElementById('sample6_postcode').value = data.zonecode;
                document.getElementById(addr1).value = addr;
                // 커서를 상세주소 필드로 이동한다.
            }
        }).open();
    }
</script>

<form name="applyform" id="applyform" action="/theme/nero/contact_order_update.php" method="post" target="hidfrm" placeholder="2024.01.01">
<input type="hidden" name="mode" value="">

  <div class="width">
    <div class="contact_form">
      <div class="input_wrap">
        <h4><span>1.</span><b>외래 진료 일정 : 정확한 요일과 시간을 알려주세요.</b></h4>
        <div class="inbox">
          <input type="date" name="re_date" id="re_date" value="" maxlength=10 >
          <input type="time" name="re_time" value="">
        </div>
      </div>
      <div class="input_wrap">
        <h4><span>2.</span><b>병원명, 진료과, 의사선생님 성함을 알려주세요.</b> (예: 서울대병원, 혈액종양 내과, 김진수 교수님)</h4>
        <textarea name="re_answer02" rows="8" cols="80" placeholder="참여자의 답변 입력란 (최대 2000자)"></textarea>
      </div>
      <div class="input_wrap">
        <h4><span>3.</span><b>환자 본인이신가요?</b></h4>
        <div class="inbox2">
          <div class="box">
            <input type="radio" name="re_answer03" id="re_answer03_a" value="환자본인">
            <label for="">환자본인</label>
          </div>
          <div class="box">
            <input type="radio" name="re_answer03" id="re_answer03_b" value="보호자">
            <label for="">보호자 (가족, 지인등)</label>
          </div>
        </div>
      </div>
      <!-- 환자본인을 클릭했을때 나오는 선택지 -->
      <div class="input_wrap view03_a">
        <h4><span>3-1.</span><b>연락처를 입력해주세요.</b></h4>
        <div class="inbox3">
          <select class="" name="re_answer03_1[]">
            <option value="010">010</option>
            <option value="011">011</option>
            <option value="019">019</option>
          </select>
          <span>-</span>
          <input type="text" name="re_answer03_1[]" value="" maxlength=4 class="onlynumber">
          <span>-</span>
          <input type="text" name="re_answer03_1[]" value="" maxlength=4 class="onlynumber">
        </div>
      </div>
      <!-- 환자본인 끝 -->
      <!-- 보호자를 클릭했을때 나오는 선택지 -->
      <div class="input_wrap view03_b">
        <h4><span>3-1.</span><b>관계를 입력해주세요.</b> (아들, 딸, 며느리, 지인 등)</h4>
        <input type="text" name="re_answer03_1_2" value="">
      </div>
      <div class="input_wrap view03_b">
        <h4><span>3-2.</span><b>외래 진료 내용을 환자 본인이 이해하도록 설명해주길 원하시나요?</b></h4>
        <div class="inbox2">
          <div class="box">
            <input type="radio" name="re_answer03_2" value="네">
            <label for="">네</label>
          </div>
          <div class="box">
            <input type="radio" name="re_answer03_2" value="아니요">
            <label for="">아니요</label>
          </div>
        </div>
      </div>
      <div class="input_wrap view03_b">
        <h4><span>3-3.</span><b>외래 진료 내용을 보호자에게 전화로 설명하기를 원하시나요?</b></h4>
        <div class="inbox2">
          <div class="box">
            <input type="radio" name="re_answer03_3" value="네">
            <label for="">네</label>
          </div>
          <div class="box">
            <input type="radio" name="re_answer03_3" value="아니요">
            <label for="">아니요</label>
          </div>
        </div>
      </div>
      <div class="input_wrap view03_b">
        <h4><span>3-4.</span><b>환자 연락처를 입력해주세요.</b></h4>
        <div class="inbox3">
          <select class="" name="re_answer03_4[]">
            <option value="010">010</option>
            <option value="011">011</option>
            <option value="019">019</option>
          </select>
          <span>-</span>
          <input type="text" name="re_answer03_4[]" value="" maxlength=4 class="onlynumber">
          <span>-</span>
          <input type="text" name="re_answer03_4[]" value="" maxlength=4 class="onlynumber">
        </div>
      </div>
      <div class="input_wrap view03_b">
        <h4><span>3-5.</span><b>보호자 연락처를 입력해주세요.</b></h4>
        <div class="inbox3">
          <select class="" name="re_answer03_5[]">
            <option value="010">010</option>
            <option value="011">011</option>
            <option value="019">019</option>
          </select>
          <span>-</span>
          <input type="text" name="re_answer03_5[]" value="" maxlength=4 class="onlynumber">
          <span>-</span>
          <input type="text" name="re_answer03_5[]" value="" maxlength=4 class="onlynumber">
        </div>
      </div>
      <!-- 보호자 끝 -->
      <div class="input_wrap">
        <h4><span>4.</span><b>외래 진료시 의사에게 궁금하신 점이 있으면 적어주세요.</b> (예: 지난주 부터 졸음이 심하게 오는데 약 부작용인가요?)</h4>
        <textarea name="re_answer04" rows="8" cols="80" placeholder="참여자의 답변 입력란 (최대 2000자)"></textarea>
      </div>
      <div class="input_wrap">
        <h4><span>5.</span><b>동행간호사가 알면 도움이 될만한 사항을 적어주세요.</b> (걷는 것이 불편해서 병원에서 휠체어로 움직여야해요.)</h4>
        <textarea name="re_answer05" rows="8" cols="80" placeholder="참여자의 답변 입력란 (최대 2000자)"></textarea>
      </div>
      <div class="input_wrap">
        <h4><span>6.</span><b>차량을 탑승하실 위치를 알려주세요.</b> (서비스 시작 지점, 서울 내)</h4>
        <div class="inbox4">
          <div class="box">
            <input type="text" name="re_answer06_01" id="re_answer06_01" value="" placeholder="주소검색">
            <button type="button" name="" onclick="pop_zip('re_answer06_01')">검색</button>
          </div>
          <div class="box">
            <input type="text" name="re_answer06_02" id="re_answer06_02" value="" placeholder="나머지 주소">
          </div>
        </div>
      </div>
      <div class="input_wrap">
        <h4><span>7.</span><b>진료를 받으실 병원의 위치를 알려주세요. </b></h4>
        <div class="inbox4">
          <div class="box">
            <input type="text" name="re_answer10" id="re_answer10" value="" placeholder="주소검색">
            <button type="button" name="button" onclick="pop_zip('re_answer10')">검색</button>
          </div>
        </div>
      </div>
      <div class="input_wrap">
        <h4><span>8.</span><b>외래 진료 후 행선지를 알려주세요.</b> (서비스 종료 지점, 서울 내)</h4>
        <div class="end">
          <input type="checkbox" name="same_addr" id="same_addr" value="">
          <label for="same_addr">출발지와 동일</label>
        </div>
        <div class="inbox4">
          <div class="box">
            <input type="text" name="re_answer07_01" id="re_answer07_01" value="" placeholder="주소검색">
            <button type="button" name="button" onclick="pop_zip('re_answer07_01')">검색</button>
          </div>
          <div class="box">
            <input type="text" name="re_answer07_02" id="re_answer07_02" value="" placeholder="나머지 주소">
          </div>
        </div>
      </div>

      <div class="input_wrap">
        <h4><span>9.</span><b>출발지에서 병원까지 어떤 교통 수단을 사용하고 싶으신가요?</b></h4>
        <div class="inbox2">
          <!-- <div class="box">
            <input type="radio" name="re_answer08" value="제휴 택시(20% 할인 적용)">
            <label for="">제휴 택시(20% 할인 적용)</label>
          </div> -->
          <div class="box">
            <input type="radio" name="re_answer08" value="택시">
            <label for="">택시</label>
          </div>
          <div class="box">
            <input type="radio" name="re_answer08" value="대중교통">
            <label for="">대중교통</label>
          </div>
          <div class="box">
            <input type="radio" name="re_answer08" value="휠체어 택시">
            <label for="">휠체어 택시</label>
          </div>
        </div>
        <div class="end" style="margin-top:10px;">
          <input type="checkbox" name="re_answer08_01" id="re_answer08_01" value="Y" disabled>
          <label for="same_addr">출발지에서 병원으로 이동시 일반 택시 요금으로 프리미엄 택시(파파택시)를 사용할 수 있는 혜택을 받겠습니다.</label>
        </div>
        <ul>
          <!-- <li>*제휴택시 선택시 파파택시를 사용합니다.</li> -->
          <li>*휠체어 이동이 필요한 경우에는 반드시 휠체어 택시를 선택해주세요.</li>
        </ul>
      </div>
      <div class="input_wrap">
        <h4><span>10.</span><b>어떤 경로로 서비스를신청하시게 되었는지 선택해주세요.</b></h4>
        <div class="inbox2">
          <div class="box">
            <input type="radio" name="re_answer09" value="지인소개/홍보">
            <label for="">지인소개/홍보</label>
          </div>
          <div class="box">
            <input type="radio" name="re_answer09" value="페이스북/인스타그램광고">
            <label for="">페이스북/인스타그램광고</label>
          </div>
          <div class="box">
            <input type="radio" name="re_answer09" value="네이버광고">
            <label for="">네이버광고</label>
          </div>
          <div class="box">
            <input type="radio" name="re_answer09" value="구글·네이버 검색">
            <label for="">구글·네이버 검색</label>
          </div>
          <div class="box">
            <input type="radio" name="re_answer09" value="기타">
            <label for="">기타</label>
          </div>
        </div>
      </div>
      <div class="con_tel">
        <h2>작성해주셔서 감사합니다.<br>
        빠른 시간 안에 연락드리도록하겠습니다.   </h2>
        <a href="#"><img src="<?php echo G5_THEME_IMG_URL ?>/tel.png" alt="">문의 : 010-7604-0747</a>
      </div>
      <div class="check">
        <input type="checkbox" name="agree" value="" id="agree">
        <label for="agree" name="agree" >개인정보 수집 및 열람 동의 <span></span></label>
        <div class="text">
          <h2>개인정보 수집 ‧ 이용 ‧ 제공 동의서</h2>
          <p>본인은 [개인정보 보호법] 제15조 및 제17조에 따라 더케어 서비스를 신청함에 있어 아래의 내용으로 개인정보를 수집, 이용 및 제공하는데 동의합니다.</p>
          <p>□ 개인정보의 수집 및 이용에 관한 사항<br>
          - 수집하는 개인정보 항목 (신청서양식 내용 일체) : 성명, 주민등록번호, 전화번호, <br>
          주소 등과 그 외 신청서 기재 내용<br>
          일체<br>
           - 개인정보의 이용 목적 : 수집된 개인정보를 서비스 제공 목적으로 활용하며, 목적 외의 용도로는 사용하지 않습니다.
          </p>
          <p>□ 개인정보의 보관 및 이용 기간 <br>
          - 귀하의 개인정보는 서비스 종료 후 3년간 보관됩니다. 이용 및 제공목적이 달성된 경우 [개인정보 보호법] 제21조에 따라 처리하며 삭제 요청 시 지원자의 개인정보를 재생이 불가능한 방법으로 즉시 파기합니다.
          </p>
          <p>□ 본인은 개인정보 수집 및 이용에 대하여 동의합니다.</p>
        </div>
      </div>
      <a href="javascript:applyformchk();" class="con_btn">신청하기</a>
    </div>
  </div>
</form>
<iframe name="hidfrm" style="display:none;"></iframe>

<script>
function applyformchk(){
	f=document.applyform;
	if(f.re_date.value==""){
		alert("외래 진료 날자를 입력해 주세요.");
		return;
	}
	if(f.re_time.value==""){
		alert("외래 진료 시간을 입력해 주세요.");
		return;
	}
	if(f.re_answer02.value==""){
		alert("병원명, 진료과, 의사선생님 성함을 입력하세요. ");
		return;
	}
	if(!f.re_answer03[0].checked && !f.re_answer03[1].checked){
		alert("환자와의 관계를 선택하세요.");
		return;
	}
	if(f.re_answer03[0].checked){
		if($("input[name='re_answer03_1[]']:eq(0)").val()==""){
			alert("연락처를 입력하세요.");
			return;
		}
		if($("input[name='re_answer03_1[]']:eq(1)").val()==""){
			alert("연락처를 입력하세요.");
			return;
		}
	}
	if(f.re_answer03[1].checked){
		if(f.re_answer03_1_2.value==""){
			alert("관계를 입력해주세요.");
			return;
		}
		if(!f.re_answer03_2[0].checked && !f.re_answer03_2[1].checked){
			alert("외래 진료 내용을 환자 본인이 이해하도록 설명해주길 원하시나요?");
			return;
		}
		if(!f.re_answer03_3[0].checked && !f.re_answer03_3[1].checked){
			alert("외래 진료 내용을 보호자에게 전화로 설명하기를 원하시나요?");
			return;
		}
		if($("input[name='re_answer03_4[]']:eq(0)").val()==""){
			alert("환자 연락처를 입력하세요.");
			return;
		}
		if($("input[name='re_answer03_4[]']:eq(1)").val()==""){
			alert("환자 연락처를 입력하세요.");
			return;
		}
		if($("input[name='re_answer03_5[]']:eq(0)").val()==""){
			alert("보호자 연락처를 입력하세요.");
			return;
		}
		if($("input[name='re_answer03_5[]']:eq(1)").val()==""){
			alert("보호자 연락처를 입력하세요.");
			return;
		}
	}

	if(f.re_answer04.value==""){
		alert("외래 진료시 의사에게 궁금하신 점이 있으면 적어주세요.");
		return;
	}
	if(f.re_answer05.value==""){
		alert("동행간호사가 알면 도움이 될만한 사항을 적어주세요.");
		return;
	}
	if(f.re_answer06_01.value==""){
		alert("차량을 탑승하실 위치를 알려주세요.");
		return;
	}
	if(f.re_answer07_01.value==""){
		alert("외래 진료 후 행선지를 알려주세요.");
		return;
	}
	if($("input[name='re_answer08']:checked").length==0){
		alert("출발지에서 병원까지 어떤 교통 수단을 사용하고 싶으신가요?");
		return;
	}
	if($("input[name='re_answer09']:checked").length==0){
		alert("어떤 경로로 서비스를신청하시게 되었는지 선택해주세요.");
		return;
	}

	if(!f.agree.checked){
		alert("개인정보 수집 및 열람 동의하셔야 합니다.");
		return;
	}
	f.submit();

}
</script>
