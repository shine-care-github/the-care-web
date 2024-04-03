<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->
<script type="text/javascript">
var sections = $('section')
  , nav = $('.pmenu')
  , nav_height = nav.outerHeight();

$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();

  sections.each(function() {
    var top = $(this).offset().top - nav_height - 30,
        bottom = top + $(this).outerHeight() ;

    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').removeClass('active');
      sections.removeClass('active');

      $(this).addClass('active');
      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
    }
  });
});

nav.find('a').on('click', function () {
  var $el = $(this)
    , id = $el.attr('href');

  $('html, body').animate({
    scrollTop: $(id).offset().top - nav_height
  }, 500);

  return false;
});
</script>
<script src="<?php echo G5_THEME_JS_URL ?>/swiper.min.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/swiper-animation.min.js"></script>
<script>
    var swiper = new Swiper(".proSwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      loop:true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-next",
        prevEl: ".swiper-prev",
      },
    });
  </script>
  <script>
    $(function() {
      $(".pop-btn1").on("click", function() {
        $("#popup1").fadeIn(500);
      });
      $(".pop-btn2").on("click", function() {
        $("#popup2").fadeIn(500);
      });
      $(".pop-btn3").on("click", function() {
        $("#popup13").fadeIn(500);
      });
      $(".pop-btn4").on("click", function() {
        $("#popup4").fadeIn(500);
      });
    });

    function pop_close() {
      $("#popup1").fadeOut(300);
      $("#popup2").fadeOut(300);
      $("#popup3").fadeOut(300);
      $("#popup4").fadeOut(300);
    }
  </script>
<script src="<?php echo G5_THEME_JS_URL ?>/wow.min.js"></script>
<script>
	new WOW().init();
</script>

<?php run_event('tail_sub'); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7KW6QN2";
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다.
