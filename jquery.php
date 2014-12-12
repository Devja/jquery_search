<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>실시간 검색?</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script src="search.word.js"></script>
<style>
	.ui-autocomplete-loading {
	background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
}
	.ui-autocomplete {
	max-height: 150px;
	overflow-y: auto;
	overflow-x: hidden;
}
	* html .ui-autocomplete {
	height: 150px;
}
</style>






<input type="text" value="" id="searchfield">




<script>
var opt = {
	dataUrl : "time_search_json.php",							// 검색 결과는 json 으로 리턴 해주는 주소
	mentWord : "@",										// @를 붙이고 검색 할때만 작동한다. 
	splitWord : " ",									// 필드에 들어가는 구분자
	showPhoto : "FALSE",									// 사진 사용여부
	delay : 0,										// 검색 딜레이 단위 ms
	multiSearch : true,									// 멀티 서치 사용여부
	minLength: 0,										// 검색하기 위한 최소 글자길이 (mentWord 는 제외)
	typingRestrict : true
}

$.stringSearch($("#searchfield"), opt);

</script>
</body>
</html>