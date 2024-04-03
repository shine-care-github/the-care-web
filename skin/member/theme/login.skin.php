<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/info.css">', 0);
include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 로그인 시작 { -->
<div id="mb_login" class="mbskin">
    <div class="mbskin_box">
        <div class="mb_log_cate">
           <span>회원이 아니시라면?</span>
            <a href="<?php echo G5_BBS_URL ?>/register.php" class="join">회원가입</a>
        </div>

        <div class="mb_log_form">
          <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
          <input type="hidden" name="url" value="<?php echo $login_url ?>">

          <fieldset id="login_fs">
              <h2>로그인</h2>
              <div class="login_wrap_box">
                <label for="login_id">아이디</label>
                <input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="20" placeholder="아이디">
              </div>
              <div class="login_wrap_box">
                <label for="login_pw">비밀번호</label>
                <input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" maxLength="20" placeholder="비밀번호">
              </div>
              <?php @include_once(get_social_skin_path().'/social_login.skin.php'); // 소셜로그인 사용시 소셜로그인 버튼 ?>
              <button type="submit" class="btn_submit">로그인</button>

              <div id="login_info">
                  <div class="login_if_auto chk_box">
                      <input type="checkbox" name="auto_login" id="login_auto_login" class="selec_chk">
                      <label for="login_auto_login"><span></span> 자동로그인</label>
                  </div>
                  <div class="login_if_lpl">
                      <a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost">비밀번호를 잊으셨나요?</a>
                  </div>
              </div>
          </fieldset>
          </form>
        </div>
    </div>
</div>

<script>
jQuery(function($){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>
<!-- } 로그인 끝 -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
