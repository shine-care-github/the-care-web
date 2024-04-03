<div class="lnb">
  <ul class="lnb_map width">
    <li class="home"><a href="<?php echo G5_URL ?>"><i class="ri-home-4-line"></i></a></li>

    <!-- 1차 메뉴 -->
    <li class="dep">
      <a href="#"><span><?=$tNum?> <i class="ri-arrow-down-s-line"></i></span></a>
				<ul>
					<?php

						foreach($topmenu as $tmenu=>$url){
					?>
						<li><a href="<?php echo $url?>" target="<?=$topmenu_target[$tmenu]?>"><?php echo $tmenu?></a></li>
					<?php }

					?>
				</ul>
			</li>
    <!-- 2차 메뉴 -->
    <li class="dep">
      <a href="#">
        <span><? if (false && $bo_table) { //게시판이 있다면 ?>
          <?=$board[bo_subject]?>
        <? } else { //그렇지 않다면 ?>
          <?=$sNum?>
        <?}?>
        <i class="ri-arrow-down-s-line"></i>
      </span>
      </a>
			<ul>
				<?php

					if(isset($submenu[$tNum])){
						foreach($submenu[$tNum] as $smenu=>$surl){
				?>
					<li><a href="<?php echo $surl?>" target="<?php echo $submenu_target[$tNum][$smenu]?>"><?php echo $smenu?></a></li>
				<?php
						}
					}
				?>
			</ul>
		</li>
  </ul>
</div>

<script type="text/javascript">
$(document).ready(function (){
	$('.lnb .dep a').click(function(){
		$('.lnb .dep ul').not($(this).siblings('ul')).hide();
		$(this).siblings('ul').toggle();
	});
});
</script>
