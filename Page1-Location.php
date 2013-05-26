<?php 

/**
 * Template Name: Location Page
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
		<div class="breadcrumb_stretched">
			<div class="breadcrumb_fixed">
				<p>
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 하나누리 소개 > 오시는 길
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?> 
			<div id="content">
				<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub1/sub1_location.gif'>
				<div class="map">
					<iframe width="714" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.kr/maps?f=q&amp;source=s_q&amp;hl=ko&amp;geocode=&amp;q=%EC%84%9C%EC%9A%B8%EC%8B%9C+%EA%B0%95%EB%B6%81%EA%B5%AC+%EB%8F%84%EB%B4%89%EB%A1%9C+45%EA%B8%B8+18-4&amp;aq=&amp;sll=36.430122,128.056641&amp;sspn=7.890287,16.907959&amp;ie=UTF8&amp;hq=&amp;hnear=%EC%84%9C%EC%9A%B8%ED%8A%B9%EB%B3%84%EC%8B%9C+%EA%B0%95%EB%B6%81%EA%B5%AC+%EB%8F%84%EB%B4%89%EB%A1%9C45%EA%B8%B8+18-4&amp;t=m&amp;ll=37.625415,127.025063&amp;spn=0.006798,0.015299&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.kr/maps?f=q&amp;source=embed&amp;hl=ko&amp;geocode=&amp;q=%EC%84%9C%EC%9A%B8%EC%8B%9C+%EA%B0%95%EB%B6%81%EA%B5%AC+%EB%8F%84%EB%B4%89%EB%A1%9C+45%EA%B8%B8+18-4&amp;aq=&amp;sll=36.430122,128.056641&amp;sspn=7.890287,16.907959&amp;ie=UTF8&amp;hq=&amp;hnear=%EC%84%9C%EC%9A%B8%ED%8A%B9%EB%B3%84%EC%8B%9C+%EA%B0%95%EB%B6%81%EA%B5%AC+%EB%8F%84%EB%B4%89%EB%A1%9C45%EA%B8%B8+18-4&amp;t=m&amp;ll=37.625415,127.025063&amp;spn=0.006798,0.015299&amp;z=16" style="color:#0000FF;text-align:left">크게 보기</a></small>
				</div>		
			</div><!--close content-->
		</div><!--close intro_fixed-->
	</div><!--close intro_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>