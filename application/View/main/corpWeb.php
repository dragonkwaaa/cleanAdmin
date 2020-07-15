
<div class="container webSort">
	<header>
		<h1 class="logo">
			<a href="javascript:void(0)" class="titleBtn">
				CleanZone
			</a>
		</h1>
		<div class="btnGroup headerSort">
			<a href="/main/corpWeb" class="btn headerBtn activated">업체관리</a>
			<a href="/main/deviceWeb" class="btn headerBtn">장비관리</a>
		</div>
	</header>
	<div class="content">
		<div class="listSection deviceSort">
			<div class="titleBox underSectionSort">업체 목록</div>
			<div class="searchGroup">
				<table class="tableMenu">
					<colgroup>
						<col width="150">
						<col width="450">
					</colgroup>
					<tbody>
					<tr>
						<th>업체코드</th>
						<td>
							<input class="tbox deviceSearchSort"/>
						</td>
					</tr>
					<tr>
						<th>기간</th>
						<td>
							<input class="tbox dateBox" id="startDate" readonly/>
							<span>~</span>
							<input class="tbox dateBox"  id="endDate" readonly/>
							<div class="btnGroup">
								<a	href="javascript:void(0);">오늘</a>
								<a	href="javascript:void(0);">어제</a>
								<a	href="javascript:void(0);">일주일</a>
								<a	href="javascript:void(0);">1개월</a>
								<a	href="javascript:void(0);">3개월</a>
								<a	href="javascript:void(0);">전체</a>
							</div>
						</td>
					</tr>
					</tbody>
				</table>
				<a href="javascript:void(0);" class="btn searchSort"> 검색</a>
			</div>
			<div class="listGroup">
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
					<tbody>
					<tr>
						<td>1171</td>
						<td>히얌</td>
						<td>서울시 마포구 마포대로 12 길</td>
					</tr>
					<tr>
						<td>1170</td>
						<td>에이디치</td>
						<td>서울시 영등포구 여의도동 여의나루 1번지</td>
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
			<a href="javascript:void(0);" class="btn addCorpBtn">업체 추가하기</a>
		</div>
		<div class="regSection deviceSort">
			<div class="titleBox underSectionSort">업체 상세 정보</div>
			<div class="regGroup">
				<div class="titleBox regGroupsort">업체정보</div>
				<table class="regTable">
					<colgroup>
						<col width="150">
						<col width="450">
					</colgroup>
					<tbody>
					<tr>
						<th>업체No.</th>
						<td>
							<input class="tbox regFullSort" value="1170" readonly/>
						</td>
					</tr>
					<tr>
						<th>업체명</th>
						<td>
							<input class="tbox regFullSort" value="에이디치히얌"/>
						</td>
					</tr>
					<tr>
						<th>대표자</th>
						<td>
							<input class="tbox regFullSort" value="곽반장"/>
						</td>
					</tr>
					<tr>
						<th>연락처</th>
						<td>
							<input class="tbox regFullSort" value="010-1122-3344"/>
						</td>
					</tr>
					<tr>
						<th>업체주소</th>
						<td>
							<a href="javascript:void(0);" class="btn searchSort">주소검색</a>
							<input class="tbox withBtnSort" value=""/>
							<input class="tbox addrSort" value=""/>
						</td>
					</tr>
					<tr>
						<th>등록일</th>
						<td>
							<input class="tbox regFullSort" value="2020-04-01-12:00" readonly/>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
			<!-- <div class="listGroup userInfoSort">
				<div class="titleBox listGroupsort">장비목록</div>
				<a href="javascript:void(0);" class="btn addDeviceBtn">추가하기</a>
				<table class="listTable">
					<colgroup>
						<col width="120">
						<col width="120">
						<col width="120">
						<col width="80">
					</colgroup>
					<thead>
						<th>장비No.</th>
						<th>담당업체</th>
						<th>등록일</th>
						<th>관리</th>
					</thead>
					<tbody>
					<tr>
						<td>200521023</td>
						<td>크린존</td>
						<td>2020-05-19 03:08:46</td>
						<td>
							<a href="javascript:void(0);" class="btn inTableSort">삭제</a>
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
			</div> -->
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
						<tbody>
                        <tr>
						    <td>dragonkwaaa</td>
						    <td>곽반장</td>
						    <td>010-8888-7313</td>
						    <td>
						    	<a href="javascript:void(0);" class="btn inTableSort">삭제</a>
						    </td>
					    </tr>
                        </tbody>
					</table>
					<div class="pagingBox"></div>
				</div>
			<a href="javascript:void(0);" class="btn saveSort">저장</a>
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
							<input class="tbox ventSearchSort"/>
						</td>
					</tr>
					</tbody>
				</table>
				<a href="javascript:void(0);" class="btn searchSort"> 검색</a>
			</div>
			<div class="listGroup">
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
			<a href="javascript:void(0);" class="addBotBtn ventSort">배출구 추가하기</a>
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
						</td>
					</tr>
					</tbody>
				</table>
				<a href="javascript:void(0);" class="btn searchSort"> 검색</a>
			</div>
			<div class="listGroup">
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
			<a href="javascript:void(0);" class="addBotBtn facSort">시설 추가하기</a>
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
						</td>
					</tr>
					</tbody>
				</table>
				<a href="javascript:void(0);" class="btn searchSort"> 검색</a>
			</div>
			<div class="listGroup">
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
			<a href="javascript:void(0);" class="addBotBtn compSort">항목 추가하기</a>
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
			<table class="regTable">
				<colgroup>
					<col width="100">
					<col width="300">
				</colgroup>
				<tbody>
				<tr>
					<th>업체명</th>
					<td>
						<input class="tbox regFullSort" value="에이디치히얌">
					</td>
				</tr>
				<tr>
					<th>대표자</th>
					<td>
						<input class="tbox regFullSort" value="곽반장">
					</td>
				</tr>
				<tr>
					<th>연락처</th>
					<td>
						<input class="tbox regFullSort" value="010-1122-3344">
					</td>
				</tr>
				<tr>
					<th>업체주소</th>
					<td>
						<a href="javascript:void(0);" class="btn searchSort">주소검색</a>
						<input class="tbox withBtnSort" value="">
						<input class="tbox addrSort" value="">
					</td>
				</tr>
				</tbody>
			</table>
		</div>
		<a href="javascript:choicePop();" class="btn regCorpBtn">등록</a>
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
<script>
// :: "업체 추가하기" 버튼 클릭 시, 업체 추가 팝업 나타나는 스크립트.
$(document).on('click', '.btn.addCorpBtn', function(){
	$('.popup.addCorpPop.corpSort').show();
	$('.container').addClass('overlay');
    $('.popup.addCorpPop.corpSort').css({
    	"top": (($(window).height()-$('.popup.addCorpPop.corpSort').outerHeight())/2+$(window).scrollTop())+"px",
    	"left": (($(window).width()-$('.popup.addCorpPop.corpSort').outerWidth())/2+$(window).scrollLeft())+"px"
    });
});
// :: 업체 추가 팝업창에서 "등록" 버튼 클릭 시, 팝업창 닫히는 스크립트.
function choicePop(){
	$('.popup').hide();
	$('.container').removeClass('overlay');
}
// :: "추가하기" 버튼 클릭 시, 장비 추가 팝업 나타나는 스크립트.
$(document).on('click', '.btn.addDeviceBtn', function(){
	$('.popup.addDeviceSort').show();
	$('.container').addClass('overlay');
});
// :: 팝업창의 X 버튼 클릭 시, 팝업 닫기 스크립트.
function closePop(){
	$('.popup.centerSort').hide();
	$('.container').removeClass('overlay');
}
// :: 장비 추가 팝업창에서 "선택" 버튼 클릭 시, 팝업창 닫히는 스크립트.
function choicePop(){
	$('.popup').hide();
	$('.container').removeClass('overlay');
}
// :: 장비 추가 팝업창 외부 클릭 시 팝업창 닫기 스크립트.
$(document).mouseup(function (e) {
	let overlay = $('.container');
	let popupM = $('.popup')

	if (!popupM.is(e.target) && popupM.has(e.target).length === 0){
		popupM.hide();
		overlay.removeClass('overlay');
	}
});
// :: 페이징 클릭 시, 선택한 숫자에 파란 불 들어오는 스크립트.
$(document).on('click', '.pagingBox a', function(){
	$(this).siblings('a').removeClass('activated');
	$(this).removeClass('activated');
	$(this).addClass('activated');
});
// :: 좌측의 장비 목록 클릭 시, 선택한 줄에 파란 불 들어오는 스크립트.
$(document).on('click', '.listTable.selectableSort tbody tr', function(){
	$(this).siblings('tr').removeClass('activated');
	$(this).removeClass('activated');
	$(this).addClass('activated');
});


// :: 측정값 달력 스크립트.
$( function() {
	$( "#singleDate").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd',
		prevText: '이전 달',
		nextText: '다음 달',
		monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
		monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
		dayNames: ['일', '월', '화', '수', '목', '금', '토'],
		dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
		dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
		showMonthAfterYear: true
	});
} );



// :: "사용자 추가하기" 버튼 클릭 시, 사용자 추가 팝업 나타나는 스크립트.
$(document).on('click', '.addUserBtn', function(){
	$('.popup.centerSort.userPop').show();
	$('.container').addClass('overlay');
    $('.popup.userPop').css({
    	"top": (($(window).height()-$('.popup.centerSort.userPop').outerHeight())/2+$(window).scrollTop())+"px",
    	"left": (($(window).width()-$('.popup.centerSort.userPop').outerWidth())/2+$(window).scrollLeft())+"px"
    });
});
// :: "배출구 추가하기" 버튼 클릭 시, 배출구 추가 팝업 나타나는 스크립트.
$(document).on('click', '.addBotBtn.ventSort', function(){
	$('.popup.ventSort').show();
	$('.container').addClass('overlay');
    $('.popup.ventSort').css({
    	"top": (($(window).height()-$('.popup.ventSort').outerHeight())/2+$(window).scrollTop())+"px",
    	"left": (($(window).width()-$('.popup.ventSort').outerWidth())/2+$(window).scrollLeft())+"px"
    });
});
// :: "시설 추가하기" 버튼 클릭 시, 시설 추가 팝업 나타나는 스크립트.
$(document).on('click', '.addBotBtn.facSort', function(){
	$('.popup.facSort').show();
	$('.container').addClass('overlay');
    $('.popup.facSort').css({
    	"top": (($(window).height()-$('.popup.facSort').outerHeight())/2+$(window).scrollTop())+"px",
    	"left": (($(window).width()-$('.popup.facSort').outerWidth())/2+$(window).scrollLeft())+"px"
    });
});
// :: "항목 추가하기" 버튼 클릭 시, 항목 추가 팝업 나타나는 스크립트.
$(document).on('click', '.addBotBtn.compSort', function(){
	$('.popup.compSort').show();
	$('.container').addClass('overlay');
    $('.popup.compSort').css({
    	"top": (($(window).height()-$('.popup.compSort').outerHeight())/2+$(window).scrollTop())+"px",
    	"left": (($(window).width()-$('.popup.compSort').outerWidth())/2+$(window).scrollLeft())+"px"
    });
});




</script>
