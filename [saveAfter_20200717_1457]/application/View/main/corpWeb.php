<?php
$menu = 10;
?>
<div class="container webSort">
	<?php require APP . 'View/_templates/header.php';?>
	<div class="content">
		<div class="listSection deviceSort">
			<div class="titleBox underSectionSort">업체 목록</div>
			<div class="searchGroup">
				<form id="searchFm" onkeypress="if(event.keyCode==13) {goPage(); return false;}">
					<table class="tableMenu">
						<colgroup>
							<col width="150">
							<col width="450">
						</colgroup>
						<tbody>
						<tr>
							<th>업체명</th>
							<td>
								<input class="tbox deviceSearchSort" id="searchWord" name="searchWord" maxlength="20"/>
							</td>
						</tr>
						<tr>
							<th>기간</th>
							<td>
								<input class="tbox dateBox" id="startDate" name="sDate" maxlength="12" readonly/>
								<span>~</span>
								<input class="tbox dateBox"  id="endDate" name="eDate" maxlength="12" readonly/>
								<div class="btnGroup">
									<a href="javascript:setSearchDate('0d');">오늘</a>
									<a href="javascript:setSearchDate('1d');">어제</a>
									<a href="javascript:setSearchDate('1w');">일주일</a>
									<a href="javascript:setSearchDate('1m');">1개월</a>
									<a href="javascript:setSearchDate('3m');">3개월</a>
									<a href="javascript:setSearchDate('6m');">6개월</a>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
				</form>
				<a href="javascript:goPage();" class="btn searchSort"> 검색</a>
			</div>
			<div class="listGroup">

                <a href="javascript:void(0);" class="btn addCorpBtn">업체 추가하기</a>

				<table class="listTable selectableSort">
					<colgroup>
					<col width="40">
					<col width="80">
					<col width="150">
					</colgroup>
					<thead>
					<tr>
						<th>업체No.</th>
						<th>업체명</th>
						<th>주소</th>
					</tr>
					</thead>
					<tbody id="corpListTbody">
					<?php
					if($list){
						for($i = 0; $i < count($list); $i++){
							$corp			=	$list[$i];
					?>
					<tr onclick="get_corp('<?=$corp['corpNo']?>')">
						<td><?=$corp["corpNo"]?></td>
						<td><?=$corp["corpName"]?></td>
						<td><?=$corp["corpAddr1"] . " " . $corp["corpAddr2"]?></td>
					</tr>
					<?php }
					} else {?>
					<tr>
						<td colspan="4">등록된 업체가없습니다.</td>
					</tr>
					<?php }?>
					</tbody>
				</table>
				<div class="pagingBox" id="corpPaging">
					<?=$paging?>
				</div>
			</div>
			<!-- <a href="javascript:void(0);" class="btn addCorpBtn">업체 추가하기</a> -->
		</div>
		<div class="regSection deviceSort">
			<div class="titleBox underSectionSort">업체 상세 정보</div>
			<div class="regGroup">
				<div class="titleBox regGroupsort">업체정보</div>
				<form id="corpFrm" onkeypress="if(event.keyCode==13) {return false;}">
					<table class="regTable" id="corpInfoTable">
						<colgroup>
							<col width="150">
							<col width="450">
						</colgroup>
						<tbody>
						<tr>
							<th>업체No.</th>
							<td>
								<input class="tbox regFullSort" id="corpNo" name="corpNo" value="" readonly/>
							</td>
						</tr>
						<tr>
							<th>업장코드</th>
							<td>
								<input class="tbox regFullSort" id="corpCode" name="corpCode" value="" maxlength="20"/>
							</td>
						</tr>
						<tr>
							<th>업체명</th>
							<td>
								<input class="tbox regFullSort" id="corpName" name="corpName" value="" maxlength="20"/>
							</td>
						</tr>
						<tr>
							<th>대표자</th>
							<td>
								<input class="tbox regFullSort" id="corpManagerName" name="corpManagerName" value="" maxlength="20"/>
							</td>
						</tr>
						<tr>
							<th>연락처</th>
							<td>
								<input class="tbox regFullSort" id="corpManagerPhone" name="corpManagerPhone" value="" maxlength="20"/>
							</td>
						</tr>
						<tr>
							<th>업체주소</th>
							<td>
								<!-- <a href="javascript:void(0);" class="btn searchSort">주소검색</a> -->
								<!-- <input class="tbox withBtnSort" value=""/> -->
								<input class="tbox addrSort" id="corpAddr1" name="corpAddr1" value="" maxlength="60"/>
								<input class="tbox addrSort" id="corpAddr2" name="corpAddr2" value="" maxlength="60"/>
							</td>
						</tr>
						<tr>
							<th>등록일</th>
							<td>
								<input class="tbox regFullSort" id="regDate" value="" readonly/>
							</td>
						</tr>
						</tbody>
					</table>
				</form>
                <a href="javascript:save_corp();" class="btn saveSort">저장</a>

			</div>
                <div class="listGroup userInfoSort">
					<div class="titleBox listGroupsort">사용자정보</div>
					<a href="javascript:void(0)" class="btn addUserBtn">추가하기</a>
					<table class="listTable">
						<colgroup>
							<col width="120">
							<col width="120">
							<col width="120">
							<col width="80">
						</colgroup>
						<thead>
							<th>아이디</th>
							<th>이름</th>
							<th>전화번호</th>
							<th>관리</th>
						</thead>
						<tbody id="corpUserList"></tbody>
					</table>
					<div class="pagingBox" id="corpUserPaging"></div>
				</div>
			<!-- <a href="javascript:save_corp();" class="btn saveSort">저장</a> -->
		</div>
        <div class="listSection ventSort">
			<div class="titleBox underSectionSort">배출구 목록</div>
			<div class="searchGroup">
				<table class="tableMenu">
					<colgroup>
						<col width="150">
						<col width="450">
					</colgroup>
					<tbody>
					<tr>
						<th>배출구코드</th>
						<td>
							<input class="tbox ventSearchSort" id="chimneySearchWord"/>
                            <a href="javascript:get_chimney();" class="btn searchSort">검색</a>
						</td>
					</tr>
					</tbody>
				</table>
				<!-- <a href="javascript:get_chimney();" class="btn searchSort"> 검색</a> -->
			</div>
			<div class="listGroup">
                <a href="javascript:void(0);" class="addBotBtn ventSort">배출구 추가하기</a>
				<table class="listTable selectableSort">
					<colgroup>
					<col width="40">
					<col width="80">
					<col width="150">
					</colgroup>
					<thead>
					<tr>
						<th>배출구No.</th>
						<th>배출구명</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1171</td>
						<td>01번 배출구</td>
					</tr>
					<tr>
						<td>1170</td>
						<td>보조 배출구</td>
                    </tr>
					</tbody>
				</table>
				<div class="pagingBox">
					<a href="javascript:void(0)" class="pagingBtn prev"></a>
					<a href="javascript:void(0);" class="pagingBtn activated">1</a>
					<a href="javascript:void(0)" class="pagingBtn">2</a>
					<a href="javascript:void(0)" class="pagingBtn next"></a>
				</div>
			</div>
			<!-- <a href="javascript:void(0);" class="addBotBtn ventSort">배출구 추가하기</a> -->
		</div>

        <div class="listSection ventSort">
			<div class="titleBox underSectionSort">시설 목록</div>
			<div class="searchGroup">
				<table class="tableMenu">
					<colgroup>
						<col width="150">
						<col width="450">
					</colgroup>
					<tbody>
					<tr>
						<th>시설코드</th>
						<td>
                            <input class="tbox ventSearchSort"/>
                            <a href="javascript:void(0);" class="btn searchSort"> 검색</a>
						</td>
					</tr>
					</tbody>
				</table>
				<!-- <a href="javascript:void(0);" class="btn searchSort"> 검색</a> -->
			</div>
			<div class="listGroup">
                <a href="javascript:void(0);" class="addBotBtn facSort">시설 추가하기</a>
				<table class="listTable selectableSort">
					<colgroup>
					<col width="40">
					<col width="80">
					<col width="150">
					</colgroup>
					<thead>
					<tr>
						<th>시설No.</th>
						<th>시설명</th>
					</tr>
					</thead>
					<tbody>
                    <tr>
						<td>1171</td>
						<td>식당</td>
					</tr>
					<tr>
						<td>1170</td>
						<td>분체도장실</td>
					</tr>
					</tbody>
				</table>
				<div class="pagingBox">
					<a href="javascript:void(0)" class="pagingBtn prev"></a>
					<a href="javascript:void(0);" class="pagingBtn activated">1</a>
					<a href="javascript:void(0)" class="pagingBtn">2</a>
					<a href="javascript:void(0)" class="pagingBtn next"></a>
				</div>
			</div>
			<!-- <a href="javascript:void(0);" class="addBotBtn facSort">시설 추가하기</a> -->
		</div>


        <div class="listSection ventSort">
			<div class="titleBox underSectionSort">항목 목록</div>
			<div class="searchGroup">
				<table class="tableMenu">
					<colgroup>
						<col width="150">
						<col width="450">
					</colgroup>
					<tbody>
					<tr>
						<th>항목코드</th>
						<td>
                            <input class="tbox ventSearchSort"/>
                            <a href="javascript:void(0);" class="btn searchSort"> 검색</a>
						</td>
					</tr>
					</tbody>
				</table>
				<!-- <a href="javascript:void(0);" class="btn searchSort"> 검색</a> -->
			</div>
			<div class="listGroup">
                <a href="javascript:void(0);" class="addBotBtn compSort">항목 추가하기</a>
				<table class="listTable selectableSort">
					<colgroup>
					<col width="40">
					<col width="80">
					<col width="150">
					</colgroup>
					<thead>
					<tr>
						<th>항목No.</th>
						<th>항목명</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1171</td>
						<td>작업대 천장</td>
					</tr>
					<tr>
						<td>1170</td>
						<td>출입문 측면</td>
					</tr>
					</tbody>
				</table>
				<div class="pagingBox">
					<a href="javascript:void(0)" class="pagingBtn prev"></a>
					<a href="javascript:void(0);" class="pagingBtn activated">1</a>
					<a href="javascript:void(0)" class="pagingBtn">2</a>
					<a href="javascript:void(0)" class="pagingBtn next"></a>
				</div>
			</div>
			<!-- <a href="javascript:void(0);" class="addBotBtn compSort">항목 추가하기</a> -->
		</div>
	</div>
</div>
<div class="popup centerSort addDeviceSort">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="<?=URL?>/image/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			업체 추가
		</div>
		<div class="searchGroup underPopSort">
			<div class="sbox">
				<select>
					<option value="">- 선택 -</option>
					<option value="">장비No.</option>
					<option value="">담당자</option>
				</select>
			</div>
			<input class="tbox userSearchSort">
			<a href="javascript:void(0);" class="btn searchSort">검색</a>
		</div>
		<table class="listTable">
			<colgroup>
				<col width="120">
				<col width="120">
				<col width="120">
				<col width="80">
			</colgroup>
			<thead>
			<tr>
				<th>장비No.</th>
				<th>담당업체</th>
				<th>담당자</th>
				<th>선택</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>200521023</td>
				<td>에이디치</td>
				<td>곽반장</td>
				<td>
					<a href="javascript:choicePop();" class="btn inTableSort">선택</a>
				</td>
			</tr>
			</tbody>
		</table>
		<div class="pagingBox">
			<a href="javascript:void(0)" class="pagingBtn prev"></a>
			<a href="javascript:void(0);" class="pagingBtn activated">1</a>
			<a href="javascript:void(0)" class="pagingBtn">2</a>
			<a href="javascript:void(0)" class="pagingBtn next"></a>
		</div>
	</div>
</div>
<!-- :: 업체 추가 팝업 -->
<div class="popup addCorpPop centerSort corpSort">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="<?=URL?>/image/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			업체 추가
		</div>
		<div class="searchGroup underPopSort">
			<form id="newCorpFrm" onkeypress="if(event.keyCode==13) {return false;}">
				<table class="regTable">
					<colgroup>
						<col width="100">
						<col width="300">
					</colgroup>
					<tbody>
					<tr>
						<th>업장코드</th>
						<td>
							<input class="tbox regFullSort onlyNum" id="newCorpCode" name="corpCode" value="" maxlength="20">
						</td>
					</tr>
					<tr>
						<th>*업체명</th>
						<td>
							<input class="tbox regFullSort" id="newCorpName" name="corpName" value="" maxlength="20">
						</td>
					</tr>
					<tr>
						<th>대표자</th>
						<td>
							<input class="tbox regFullSort" id="newCorpManagerName" name="corpManagerName" value="" maxlength="20">
						</td>
					</tr>
					<tr>
						<th>연락처</th>
						<td>
							<input class="tbox regFullSort" id="newCorpManagerPhone" name="corpManagerPhone" value="" maxlength="20">
						</td>
					</tr>
					<tr>
						<th>업체주소</th>
						<td>
							<!-- <a href="javascript:void(0);" class="btn searchSort">주소검색</a> -->
							<!-- <input class="tbox withBtnSort" value=""> -->
							<input class="tbox addrSort" id="newCorpAddr1" name="corpAddr1" value="" maxlength="60">
							<input class="tbox addrSort" id="newCorpAddr2" name="corpAddr2" value="" maxlength="60">
						</td>
					</tr>
					</tbody>
				</table>
			</form>
		</div>
		<a href="javascript:add_corp();" class="btn regCorpBtn">등록</a>
	</div>
</div>

<!-- :: 사용자 정보 추가 팝업 -->
<div class="popup centerSort userPop">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="<?=URL?>/image/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			사용자 추가
		</div>
		<form id="popupSearchFm" onkeypress="if(event.keyCode==13) {goUserPage(); return false;}">
			<div class="searchGroup underPopSort">
				<div class="sbox">
					<select name="userSearchType">
						<option value="1">이름</option>
						<option value="2">아이디</option>
					</select>
				</div>
				<input class="tbox userSearchSort" name="userSearchWord" maxlength="60">
				<a href="javascript:goUserPage();" class="btn searchSort">검색</a>
			</div>
		</form>
		<table class="listTable">
			<colgroup>
				<col width="120">
				<col width="120">
				<col width="120">
				<col width="80">
			</colgroup>
			<thead>
				<tr>
					<th>아이디</th>
					<th>이름</th>
					<th>전화번호</th>
					<th>선택</th>
				</tr>
			</thead>
			<tbody id="popupUserTable">
			</tbody>
		</table>
		<div class="pagingBox" id="popupUserPaging"></div>
	</div>
</div>
<!-- :: 배출구 추가 팝업 -->
<div class="popup addCorpPop centerSort ventSort">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="<?=URL?>/image/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			배출구 추가
		</div>
		<div class="searchGroup underPopSort">
			<table class="regTable">
				<colgroup>
					<col width="100">
					<col width="300">
				</colgroup>
				<tbody>
                <tr>
					<th>배출구 코드</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>배출구명</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				</tbody>
			</table>
		</div>
		<a href="javascript:choicePop();" class="btn regCorpBtn">등록</a>
	</div>
</div>

<!-- :: 시설물 추가 팝업 -->
<div class="popup addCorpPop centerSort facSort">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="<?=URL?>/image/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
        시설물 추가
		</div>
		<div class="searchGroup underPopSort">
			<table class="regTable">
				<colgroup>
					<col width="100">
					<col width="300">
				</colgroup>
				<tbody>
                <tr>
					<th>시설물 코드</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>시설물명</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				</tbody>
			</table>
		</div>
		<a href="javascript:choicePop();" class="btn regCorpBtn">등록</a>
	</div>
</div>

<!-- :: 항목 추가 팝업 -->
<div class="popup addCorpPop centerSort compSort">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="<?=URL?>/image/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
        항목 추가
		</div>
		<div class="searchGroup underPopSort">
			<table class="regTable">
				<colgroup>
					<col width="100">
					<col width="300">
				</colgroup>
				<tbody>
                <tr>
					<th>항목 코드</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>항목명</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				</tbody>
			</table>
		</div>
		<a href="javascript:choicePop();" class="btn regCorpBtn">등록</a>
	</div>
</div>

<script src="/js/common/datePick.js"></script>
<script src="/js/main/corpWeb.js"></script>
