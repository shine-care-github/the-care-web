<?php
include "./_common.php";

$re_answer03_1="";
$re_answer03_4="";
$re_answer03_5="";

if($re_answer03=="환자본인"){
	if(isset($_POST['re_answer03_1'])){
		$re_answer03_1=implode("-",$_POST['re_answer03_1']);
	}
}
if($re_answer03=="보호자"){
	if(isset($_POST['re_answer03_4'])){
		$re_answer03_4=implode("-",$_POST['re_answer03_4']);
	}
	if(isset($_POST['re_answer03_5'])){
		$re_answer03_5=implode("-",$_POST['re_answer03_5']);
	}
}

$sql="insert into g5_reserve set re_date='{$re_date}', re_time='{$re_time}', re_answer02='{$re_answer02}', re_answer03='{$re_answer03}', re_answer03_1='{$re_answer03_1}', re_answer03_1_2='{$re_answer03_1_2}', re_answer03_2='{$re_answer03_2}', re_answer03_3='{$re_answer03_3}', re_answer03_4='{$re_answer03_4}', re_answer03_5='{$re_answer03_5}', re_answer04='{$re_answer04}', re_answer05='{$re_answer05}', re_answer06_01='{$re_answer06_01}', re_answer06_02='{$re_answer06_02}', re_answer07_01='{$re_answer07_01}', re_answer07_02='{$re_answer07_02}', re_answer08='{$re_answer08}', re_answer08_01='{$re_answer08_01}', re_answer09='{$re_answer09}', re_answer10='{$re_answer10}', re_regdate=now(), re_ip='".$_SERVER['REMOTE_ADDR']."',re_status='예약신청'";
sql_query($sql);

//echo '<script>alert("예약접수 되었습니다.");parent.location.reload();</script>';
echo '<script>parent.order_end();</script>';
