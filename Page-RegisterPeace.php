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
					<div id="peace-map">
						<p id="peace-map-title">위치: 경기도 양평군 옥천면 신복리 100-3</p>
						<a href="http://map.daum.net/?urlX=601395&urlY=1135233&urlLevel=3&map_type=TYPE_MAP&map_hybrid=false&SHOWMARK=true" target="_blank"><span style="background:#000 no-repeat url(http://i1.daumcdn.net/localimg/localimages/07/2007/map/2007/arrow_yl.gif) 7px 50%;position:absolute;width:502px;opacity:.7;filter:alpha(opacity=70);color:#fff;overflow:hidden;font:12px/2 sans-serif;text-indent:15px;text-decoration:none">지도를 클릭하시면 위치정보를 확인하실 수 있습니다.</span><img width="500" height="350" src="http://map2.daum.net/map/mapservice?MX=601395&MY=1135233&SCALE=2.5&IW=500&IH=350&COORDSTM=WCONGNAMUL" style="border:1px solid #ccc"></a>
					</div>
				</div>
			</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>