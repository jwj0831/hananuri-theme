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
				</div>
			</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>