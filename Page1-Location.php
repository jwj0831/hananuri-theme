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
				<div class="map" style="text-align:center">
					<iframe src="http://dna.daum.net/include/tools/routemap/map_view.php?width=600&height=500&latitude=37.560182146658235&longitude=126.92847897049705&contents=%28%EC%82%AC%EB%8B%A8%29+%ED%95%98%EB%82%98%EB%88%84%EB%A6%AC&zoom=3" width="600" height="500" scrolling="no" frameborder="0"></iframe>
				</div>		
			</div><!--close content-->
		</div><!--close intro_fixed-->
	</div><!--close intro_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>