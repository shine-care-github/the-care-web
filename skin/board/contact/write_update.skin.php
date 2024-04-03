<?php


// 최초 예약시에만 SMS 발송
if(false && $w=="") {

	include_once(G5_LIB_PATH.'/icode.lms.lib.php');
	$sms_type = $config['cf_sms_type'];
	//$send_number = str_replace("-","",$row['office_tel']); // 보내는 번호 '-' 제거
	$send_number = str_replace("-","",$row['office_tel']); // 보내는 번호 '-' 제거 (관리자휴대폰또는 회사일반전화로 지정)
	$recv_number = str_replace("-","",$row['office_hp']); // 받는 번호 (관리자휴대폰)

	// 예약시 문자는 관리자휴대폰과 예약자휴대폰으로 총 2개의 문자메세지가 발송됩니다.
	$strDestA = array();
	$strDestB = array();
	$strDestA[0] = $recv_number; // 받는번호 (관리자휴대폰)
	$strDestB[0] = $_POST['wr_homepage']; // 받는번호 - 예약자휴대폰번호

	$sms_msg = "[온라인 예약알림]\r\n";
	$sms_msg .= "일자:".$_POST['select']."\r\n";
	$sms_msg .= "전화:".$_POST['wr_homepage']."\r\n";
	$sms_msg .= "☞ ".$_POST['wr_subject']."\r\n";
	$sms_msg .= "☞ ".$_POST['wr_4'];
	$sms_content =$sms_msg;  // 문자 내용

	$SMS = new LMS; // SMS 연결
	$port_setting = get_icode_port_type($config['cf_icode_id'], $config['cf_icode_pw']);
	$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $port_setting);

	// 관리자에게 문자 발송.
	if($row['office_sms_admin']==1) {
		$SMS->Add($strDestA, $send_number, $config['cf_icode_id'],"","", iconv("utf-8", "euc-kr", stripslashes($sms_content)), "","1");
		$SMS->Send();
	}

	// 예약자에게 문자 발송.
	if($row['office_sms_user']==1) {
		$SMS->Add($strDestB, $send_number, $config['cf_icode_id'],"","", iconv("utf-8", "euc-kr", stripslashes($sms_content)), "","1");
		$SMS->Send();
	}

	$SMS->Init();
} // SMS 발송 끝.

if($w==""){
	include_once(G5_LIB_PATH.'/mailer.lib.php');

    ob_start();
?>
<table style="border:1px solid #ccc;min-width:500px;">
<tr style="height:35px;">
<th style="width:120px;text-align:right">성함 :</th><td style="padding-left:10px;"><?=$wr_name?></td>
</tr>
<tr style="height:35px;">
<th style="text-align:right">연락처 :</th><td style="padding-left:10px;"><?=$wr_1?></td>
</tr>
</table>
<?
    $content = ob_get_contents();
    ob_end_clean();

	$from_name=$config['cf_admin_email_name'];
	$from_email=$config['cf_admin_email'];
	$to_email="";
	$subject="[핌블마케팅] {$wr_name}님의 상담 신청이 접수 되었습니다.";


	mailer($from_name, $from_email, $to_email, $subject, $content, 1);

}

// if($w==""){
// 	if($_POST['JS']=="on"){
// 		alert("Confirm.", $_POST['go_url']);
// 		exit;
// 	}else{
// 		alert("Confirm.", G5_BBS_URL."/write.php?bo_table=inquiry");
// 		exit;
// 	}
// }
?>
