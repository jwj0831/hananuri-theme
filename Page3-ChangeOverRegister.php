<?php 

/**
 * Template Name: Change Over Register Form
 *
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 국내사업 > 갈등전환센터 가입 신청
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
			<div id="content">
				<img style="margin:20px 0;"  src='<?php bloginfo('template_url'); ?>/images/subpage/sub3/sub2_t.gif'>
				<div id="change-over-reg-form">
					<iframe src="https://docs.google.com/forms/d/1rhJCoPGIv5_svrsKY6lU3dlQfFjrIiYsFMYiXF_0Epg/viewform?embedded=true" width="714" height="2160" frameborder="0" marginheight="0" marginwidth="0">로드 중...</iframe>
				</div>
			</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>