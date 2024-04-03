<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- https://sir.kr/g5_tip/17852?sfl=wr_subject%7C%7Cwr_content&stx=%EB%AA%A8%EC%95%84%EB%B9%84%EC%A6%88 모아비즈님 스마트 에디터 참고 -->
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->

<article id="bo_v" style="width:<?php echo $width; ?>" class="width common">
  <div class="bo_v_topcon">
    <?php if ($category_name) { ?>
    <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 ?></span>
    <?php } ?>
    <ul class="btn_bo_user bo_v_com">
  <li><a href="<?php echo $list_href ?>" class="btn_b01 btn" title="목록"><span class="view_btn">목록</span></a></li>
        <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><span class="view_btn">글쓰기</span></a></li><?php } ?>
        <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01 btn"><span class="view_btn">수정</span></a></li><?php } ?>
        <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn" onclick="del(this.href); return false;"><span class="view_btn">삭제</span></a></li><?php } ?>
      <?php if($update_href || $delete_href || $copy_href || $move_href || $search_href) { ?>
      <!-- <li>
        <button type="button" class="btn_more_opt is_view_btn btn_b01 btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
        <ul class="more_opt is_view_btn">
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" onclick="board_move(this.href); return false;">복사<i class="fa fa-files-o" aria-hidden="true"></i></a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" onclick="board_move(this.href); return false;">이동<i class="fa fa-arrows" aria-hidden="true"></i></a></li><?php } ?>
            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>">검색<i class="fa fa-search" aria-hidden="true"></i></a></li><?php } ?>
        </ul>
      </li> -->
      <?php } ?>
    </ul>
  </div>
    <header>
        <h2 id="bo_v_title">
            <span class="bo_v_tit">
            <?php
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?></span>
        </h2>
    </header>

    <section id="bo_v_info">
        <h2>페이지 정보</h2>
        <div class="profile_info">
        	<div class="pf_img"><?php echo get_member_profile_img($view['mb_id']) ?></div>
        	<ul class="profile_info_ct">
            <li><span class="pro_title"><i class="ri-user-3-line"></i></span><p><?php echo $view['name'] ?></p></li>
            <li><span class="pro_call pro_title"><i class="ri-phone-line"></i></span><p><?php echo $view['wr_1'] ?></p></li>
      		</ul>
          <ul class="profile_info_day">
            <li><span class="pro_title"><i class="ri-calendar-line"></i></span><p><?php echo date("Y-m-d", strtotime($view['wr_datetime'])) ?></p></li>
          </ul>
      	</div>

    	<!-- 게시물 상단 버튼 시작 { -->
	    <div id="bo_v_top">
	        <?php ob_start(); ?>

	        <script>

            jQuery(function($){
                // 게시판 보기 버튼 옵션
				$(".btn_more_opt.is_view_btn").on("click", function(e) {
                    e.stopPropagation();
				    $(".more_opt.is_view_btn").toggle();
				})
;
                $(document).on("click", function (e) {
                    if(!$(e.target).closest('.is_view_btn').length) {
                        $(".more_opt.is_view_btn").hide();
                    }
                });
            });
            </script>
	        <?php
	        $link_buttons = ob_get_contents();
	        ob_end_flush();
			?>
	    </div>
	    <!-- } 게시물 상단 버튼 끝 -->
    </section>

    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>

        <table class="contact_view_form">
          <tr>
            <th>업체명</th>
            <td><?=$view['wr_3']?></td>
          </tr>
          <tr>
            <th>성함</th>
            <td><?=$view['wr_name']?></td>
          </tr>
          <tr>
            <th>연락처</th>
            <td><?php echo $view['wr_1'] ?></td>
          </tr>
          <tr>
            <th>스토어명</th>
            <td><?=$view['wr_2']?></td>
          </tr>
          <tr>
            <th>문의내용</th>
            <td><?=$view['wr_4']?></td>
          </tr>
        </table>

        <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            echo "<div id=\"bo_v_img\">\n";

            foreach($view['file'] as $view_file) {
                echo get_file_thumbnail($view_file);
            }

            echo "</div>\n";
        }
         ?>

        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>


        <!--  추천 비추천 시작 { -->
        <?php if ( $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span class="bo_v_nogood"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <!-- }  추천 비추천 끝 -->
    </section>

    <div class="bo_v_file_wrap">
      <?php
      $cnt = 0;
      if ($view['file']['count']) {
          for ($i=0; $i<count($view['file']); $i++) {
              if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                  $cnt++;
          }
      }
  	?>

      <?php if($cnt) { ?>
      <!-- 첨부파일 시작 { -->
      <section id="bo_v_file">
          <h2>첨부파일</h2>
          <ul>
          <?php
          // 가변 파일
          for ($i=0; $i<count($view['file']); $i++) {
              if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
           ?>
              <li>
                 	<i class="fa fa-folder-open" aria-hidden="true"></i>
                  <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                      <strong><?php echo $view['file'][$i]['source'] ?></strong> <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                  </a>
                  <br>
                  <!-- <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span> -->
              </li>
          <?php
              }
          }
           ?>
          </ul>
      </section>
      <!-- } 첨부파일 끝 -->
      <?php } ?>

      <?php if(isset($view['link']) && array_filter($view['link'])) { ?>
      <!-- 관련링크 시작 { -->
      <section id="bo_v_link">
          <h2>관련링크</h2>
          <ul>
          <?php
          // 링크
          $cnt = 0;
          for ($i=1; $i<=count($view['link']); $i++) {
              if ($view['link'][$i]) {
                  $cnt++;
                  $link = cut_str($view['link'][$i], 70);
              ?>
              <li>
                  <i class="fa fa-link" aria-hidden="true"></i>
                  <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                      <strong><?php echo $link ?></strong>
                  </a>
                  <br>
                  <!-- <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span> -->
              </li>
              <?php
              }
          }
          ?>
          </ul>
      </section>
      <!-- } 관련링크 끝 -->
      <?php } ?>
    </div>

    <?php
    // 코멘트 입출력
    // include_once(G5_BBS_PATH.'/view_comment.php');
	?>
</article>
<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->
