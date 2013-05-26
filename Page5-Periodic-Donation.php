<?php 

/**
 * Template Name: Periodic Donation Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 후원 > 정기후원
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
			<div id="content">
				<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub5/sub5_periodic_support.gif'>
				<?php if (function_exists('iphorm')) echo iphorm(1); ?>
			</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>