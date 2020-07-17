<div class="container">
	<header></header>
	<div class="contents">
		<section class="topMenuSection">
    	    <a href="/" class="prevBtn"></a>
    	    <span class="titleText">기록조회</span>
		</section>
		<section class="dateScrollSection">
			<div class="monthDisplayGroup">
				<span><?=date('Y.m')?></span>
				<i class="calendarIcon ml10"></i>
			</div>
			<ul class="layerGroup dateSort">
				<?php
				while (strtotime($preDay) <= strtotime($today)) {
					echo '<li class="'.($date[date("w", strtotime($preDay))] == '일' || $date[date("w", strtotime($preDay))] == '토' ? 'holiday' : '').($preDay == $today ? ' activated' : '').'">';
					echo '	<div class="weekdayText">'.$date[date("w", strtotime($preDay))].'</div>';
					echo '	<div class="dayText">'.date('d', strtotime($preDay)).'</div>';
					echo '</li>';
					$preDay = date ("Y-m-d", strtotime("+1 day", strtotime($preDay)));
				}
				?>
			</ul>
		</section>
		<section class="tabSection">
			<ul class="layerGroup statusTabSort">
				<?php
				if($arr_sensor){
					$num	=	0;
					foreach($arr_sensor as $sensor => $channel){
						$tabClass			=	$num == 0 ? 'activated' : '';
						if($selectChannel){
							$tabClass		=	array_search($selectChannel, $channel['arr_channel']) ? 'activated' : '';
						}
				?>
				<li class="<?=$tabClass?>">
					<a href="javascript:void(0);"><?=$sensor?><?=$channel['subTitle']?></a>
				</li>
				<?php 
				$num++;
				}}?>
			</ul>
		</section>
		<section class="infoSection">

			<div class="infoSlideGroup">
				<?php
				if($arr_sensor){
					foreach($arr_sensor as $sensor => $values){
				?>
				<div class="statusCase">
					<ul class="statusTab channelSort<?=count($values['arr_channel']) == 4 ? ' quadMod' : ''?>">
						<?php 
						$num		=	0;
						foreach($values['arr_channel'] as $channel => $value){ 
							$tabClass			=	$num == 0 ? 'activated' : '';

							if($selectChannel && array_search($selectChannel, $values['arr_channel']) != false){
								// echo 'selectChannel - ' . $selectChannel;
								// echo 'value - ' . $value;
								$tabClass		=	($selectChannel == $value ? "activated" : "");
								// echo 'tabClass - ' . $tabClass;
							}
						?>
						<li class="<?=$tabClass?>">
							<a href="javascript:void(0);"><?=$value?></a>
						</li>
						<?php 
						$num++;
						} ?>
					</ul>
					<?php 
					$num	=	0;
					foreach($values['arr_channel'] as $channel => $value){ 
						$tabClass			= $num == 0 ? '' : 'hide';

						if($selectChannel && array_search($selectChannel, $values['arr_channel']) != false){
							$tabClass		= $selectChannel	== $value ? '' : 'hide';
						}
						
					?>
					
					<div class="statusInfogroup <?=$tabClass?>">
						<div class="chartGroup statusSort">
							<canvas id="chart" class="chart" style="height : 56.389vw; width : 86.111vw; min-width : 246px;"></canvas>
						</div>
						<div class="recordListGroup mt20">
							<div class="topPagerBox relative">
								<span>단위:</span>
								<span>℃</span>
							</div>
							<ul class="timeList">
								<?php for($k = 0; $k < 20; $k++){?>
								<li>
									<div>07:<?=sprintf('%02d', $k)?></div>
									<div>29.77</div>
								</li>
								<?php }?>
							</ul>
						</div>
					</div>

					<?php 
					$num++;
					} ?>
				</div>
			<?php }
			}?>
			</div>
		</section>
		<a href="javascript:moveTopFunction();" class="fixedR pageUpSort pageUpBtn"></a>
	</div>
	<div class="bottomTimeCheck">
		<span class="fs16 fw_bold">마지막 측정시간 : </span>
		<span class="fs16 fm_mon">2020-01-20 11:18:44</span>
	</div>
</div>
<script>
	const MAIN_NUM	=	<?=$mainNum?>;
	const SUB_NUM	=	<?=$subNum?>;
</script>
<script src="/js/common/Chart.min.js"></script>
<script src="/js/main/status.js"></script>
