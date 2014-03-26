<?php 

/**
 * Template Name: Register Peace Page
 *
 * A custom page template without sidebar.
 * 
 * @package WordPress
 * @subpackage Hananuri
 * @author NFM (jwj0831@gmail.com)
 * @since Hananuri 1.0
 */

get_header(); ?>
	<div class="subpage_stretched">
		<div class="subpage_fixed">
			<div id="register-content">
				<div id="register-div-outer">
					<p id="register-title">평화마을 사용 신청하기</p>
					<div class="form">
						<?php if (function_exists('iphorm')) echo iphorm(8); ?>
					</div>
					<div id="calendar">
						<p id="reservation-title">예약 일정</p>
						<div id="google-calendar">
							<iframe src="http://www.google.com/calendar/embed?src=pv%40hananuri.org&ctz=Asia/Seoul" style="border: 0" width="680" height="400" frameborder="0" scrolling="no"></iframe>
						</div>
					</div>
					<!--
					<div id="register-notice">
						<p id="notice-title">장소 사용에 관한 유의 사항</p>
						<p id="notice-detail">(체크를 완료해야 예약 신청이 되는 것으로 처리 바랍니다.)</p>
						<ul id="notice-list">
							<li>장소 사용 신청은 최소 2주 전까지 완료해주시기 바랍니다.</li>
							<li>비품과 시설을 깨끗이 쓰고, 사용 후 원상으로 복구 바랍니다.</li>
							<li>청소 및 정리가 제대로 되지 않으면 추후 평화마을 사용이 어려울 수 있습니다. </li>
							<li>세면도구 일체(수건, 욕실용품), 바비큐 장비(석쇠, 숯)는 준비해 오셔야 합니다.</li>
							<li>음식물 쓰레기는 해당 봉투에 담아 평화마을 입구(찻길 입구)에 있는 빨간통에 넣어주세요. </li>
							<li>일반 쓰레기는 해당 봉투에 담아 건물 뒤편에 가져다놓으세요. </li>
							<li>현관문 비밀번호는 접수완료 후 통보 드리겠습니다.</li>
							<li>바비큐는 지정된 장소에서만 가능합니다. (나무 데크에서 하시면 화재의 위험이 있습니다.)</li>
							<li>현관문을 살짝 닫도록 주의 부탁드립니다. (잠금장치가 손상됩니다.)</li>
							<li>평화마을의 부득이한 사정에 의해 일정이 조정될 수 있습니다.</li>
						</ul>				
					</div>
					-->
				</div>
			</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>