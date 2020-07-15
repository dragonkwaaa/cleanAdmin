
<div class="container webSort">
	<header>
		<h1 class="logo">
			<a href="/main/deviceWeb" class="titleBtn">
				CleanZone
			</a>
			<a href="javascript:logout();" class="titleBtn logoutSort">로그아웃</a>
		</h1>
		<div class="btnGroup headerSort">
			<a href="/main/corpWeb" class="btn headerBtn">업체관리</a>
			<a href="/main/deviceWeb" class="btn headerBtn activated">장비관리</a>
		</div>
	</header>
	<div class="content">
		<div class="listSection deviceSort">
			<div class="titleBox underSectionSort">장비 목록</div>
			<div class="searchGroup">
				<form id="searchFm" onkeypress="if(event.keyCode==13) {goPage(); return false;}">
					<input type="hidden" name="pno" value="1">
					<table class="tableMenu">
						<colgroup>
							<col width="150">
							<col width="450">
						</colgroup>
						<tbody>
							<tr>
								<th>장비코드</th>
								<td>
									<input class="tbox deviceSearchSort" name="searchWord" maxlength="20"/>
								</td>
							</tr>
							<tr>
								<th>기간</th>
								<td>
									<input class="tbox dateBox" id="startDate" name="sDate" maxlength="12" readonly/>
									<span>~</span>
									<input class="tbox dateBox" id="endDate" name="eDate" maxlength="12" readonly/>
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
					<a href="javascript:goPage();" class="btn searchSort"> 검색</a>
				</form>
			</div>
			<div class="listGroup">
				<table class="listTable selectableSort">
					<colgroup>
					<col width="80">
					<col width="100">
					<col width="100">
					</colgroup>
					<thead>
					<tr>
						<th>장비No.</th>
						<th>담당업체</th>
						<th>등록일</th>
					</tr>
					</thead>
					<tbody id="deviceTable">
					<?php if($deviceList){
						for($i = 0; $i < count($deviceList); $i++){
							$device			=	$deviceList[$i];
					?>
					<tr onclick="get_device('<?=$device['deviceNo']?>')">
						<td><?=$device['deviceNo']?></td>
						<td><?=$device['corpName']?></td>
						<td><?=$device['regDate']?></td>
					</tr>
					<?php }
					} else {?>
					<tr>
						<td colspan="6">등록된 기기가 없습니다.</td>
					</tr>
					<?php } ?>
					</tbody>
				</table>
				<div class="pagingBox" id="devicePaging">
					<?=$paging?>
				</div>
			</div>
		</div>
		<div class="regSection deviceSort">
			<div class="titleBox underSectionSort">장비 상세 정보</div>
			<form id="deviceFm">
				<div class="regGroup">
					<div class="titleBox regGroupsort">장비정보</div>
					<table class="regTable">
						<colgroup>
							<col width="150">
							<col width="450">
						</colgroup>
						<tbody>
							<tr>
								<th>장비No.</th>
								<td>
									<input class="tbox regFullSort" name="deviceNo" value="" readonly/>
								</td>
							</tr>
							<tr>
								<th>장비명</th>
								<td>
									<input class="tbox regFullSort" name="deviceName" value="" maxlength="20"/>
								</td>
							</tr>
							<tr>
								<th>담당업체</th>
								<td>
									<input class="tbox regFullSort" name="corpName" value="" maxlength="60"/>
								</td>
							</tr>
							<tr>
								<th>담당자</th>
								<td>
									<input class="tbox regFullSort" name="corpChargeName" value="" maxlength="10"/>
								</td>
							</tr>
							<tr>
								<th>연락처</th>
								<td>
									<input class="tbox regFullSort" name="corpChargePhone" value="" maxlength="20"/>
								</td>
							</tr>
							<tr>
								<th>장비주소</th>
								<td>
									<!-- <input type="hidden" name="latitude">
									<input type="hidden" name="longitude">
									<a href="javascript:search_address();" class="btn searchSort">주소검색</a> -->
									<input class="tbox withBtnSort" name="address1" placeholder="주소" value="" maxlength="255"/>
									<input class="tbox addrSort" name="address2" placeholder="상세주소" value="" maxlength="255"/>
								</td>
							</tr>
							<tr>
								<th>등록일</th>
								<td>
									<input class="tbox regFullSort" name="regDate" value="" readonly/>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="listGroup userInfoSort">
					<div class="titleBox listGroupsort">사용자정보</div>
					<a href="javascript:userPop()" class="btn addUserBtn">추가하기</a>
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
						<tbody id="userTable"></tbody>
					</table>
					<div class="pagingBox"></div>
				</div>
				<a href="javascript:save_device();" class="btn saveSort">저장</a>
			</form>
		</div>
		<div class="listSection statusListSort">
			<div class="titleBox underSectionSort">측정값</div>
			<div class="tableGroup">
				<div class="tableBox">
					<input class="tbox dateBox" id="singleDate" name="recordSDate" readonly="">
					<a href="javascript:goRecordPage();" class="btn searchSort">검색</a>
					<table class="listTable">
						<colgroup>
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="100">
						<col width="200">
						</colgroup>
						<thead>
						<tr>
							<th>온도1<br>(PT100)</th>
							<th>온도2<br>(PT100)</th>
							<th>전류1<br>(CT)</th>
							<th>전류2<br>(CT)</th>
							<th>센서1<br>(전류방식)</th>
							<th>센서2<br>(전류방식)</th>
							<th>센서3<br>(전류방식)</th>
							<th>센서4<br>(전류방식)</th>
							<th>릴레이출력1</th>
							<th>릴레이출력2</th>
							<th>TTL출력1</th>
							<th>TTL출력2</th>
							<th>TTL출력3</th>
							<th>TTL출력4</th>
							<th>o.c.출력1</th>
							<th>o.c.출력2</th>
							<th>o.c.출력3</th>
							<th>o.c.출력4</th>
							<th>마지막 업데이트</th>
						</tr>
						</thead>
						<tbody id="recordTable">
						<!-- <tr>
							<td>28.5</td>
							<td>0.75</td>
							<td>0.75</td>
							<td>0.75</td>
							<td>교류</td>
							<td>교류</td>
							<td>교류</td>
							<td>교류</td>
							<td>1.5</td>
							<td>1.5</td>
							<td>2</td>
							<td>2</td>
							<td>2</td>
							<td>2</td>
							<td>5.0</td>
							<td>5.0</td>
							<td>5.0</td>
							<td>5.0</td>
							<td>2020-04-01 12:00</td>
						</tr> -->
						</tbody>
					</table>
					<div class="pagingBox" id="recordPaging"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="popup centerSort">
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
						<option value="1">아이디</option>
						<option value="2">이름</option>
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
<script src="/js/common/datePick.js"></script>
<script src="/js/main/deviceWeb.js"></script>
