<div class="container">
	<header></header>
	<div class="contents">
		<section class="topMenuSection">
    	    <a href="javascript:hamburgerPop()" class="hamBtn"></a>
    	    <span class="titleText">장비 목록</span>
		</section>
    	<section class="listSection deviceListSect">
			<ul class="listGroup">
				<?php if($deviceList){
				for($i = 0; $i < count($deviceList); $i++){
					$device			=	$deviceList[$i];

				?>
				<li>
					<a href="javascript:select_device('<?=$device['deviceNo']?>')" class="listCover linkSort">
						<div class="deviceName">
							<span><?=$device['deviceNo']?></span>
						</div>
						<div class="deviceAdr"><?=$device['address1']?> <?=$device['address2']?></div>
						<div class="deviceCorp">관리업체 : <?=$device['corpName']?></div>
						<div class="deviceManager">관리자 : <?=$device['corpChargeName']?><?=$device['corpChargePhone'] ? ' ('.$device['corpChargePhone'].')' : ''?></div>
						<i class="arrowNext"></i>
					</a>
				</li>
				<?php }
				} else {?>
				<li class="emptyDevice">
					등록된 장비가 없습니다.
				</li>
				<?php }?>
			</ul>
    	</section>
	</div>
</div>
<div class="popup hamburgerPop">
    <div class="modal">
        <a href="javascript:closeHamburger()">
			<img src="<?=URL?>/image/close.png" class="close">
		</a>
        <ul class="menu">
			<li><a href="/main/deviceList">장비목록</a></li>
            <li><a href="/main/status">실시간측정</a></li>
            <li><a href="/setting/record">기록조회</a></li>
			<li><a href="/setting/systemSet">설정</a></li>
			<li><a href="javascript:logout();">로그아웃</a></li>
        </ul>
        <div class="lastCom">마지막통신<br>
            <span>2020-01-20 11:18:44</span>
        </div>
        <div class="timeDisplay">
            <?=date('Y-m-d H:i:s')?>
        </div>
    </div>
</div>
<script src="/js/main/deviceList.js"></script>
