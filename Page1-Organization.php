<?php 

/**
 * Template Name: Organization Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 하나누리 소개 > 함께하는 이
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?> 
			<div id="content">
				<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub1/sub1_organization.gif'>			</div><!--close content-->
		</div><!--close intro_fixed-->
	</div><!--close intro_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>