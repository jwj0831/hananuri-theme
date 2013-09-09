<?php 

/**
 * Template Name: Volunteer Form Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 후원 > 자원봉사 인증
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
			<div id="content">
				<img src='<?php bloginfo('template_url'); ?>/images/single/support_single_top.gif'>
				<div id="volunteer_form_background">
					<div id="volunteer_form_adjust-box"></div>
					<?php if (function_exists('iphorm')) echo iphorm(4); ?>
				</div>
				<img id="volunteer_form_bottom"src='<?php bloginfo('template_url'); ?>/images/subpage/sub5/sub5_volunteer_form_bottom.jpg' usemap="#volunteer">
				<map name="volunteer">
  					<area shape="rect" coords="250,26,467,88" target="_blank" href="http://www.1365.go.kr" />
				</map>
			</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>