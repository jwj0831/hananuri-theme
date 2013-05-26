<?php 

/**
 * Template Name: 하나누리 소개 페이지
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
	<div class="subpage_stretched">
		<div class="breadcrumb_stretched">
			<div class="breadcrumb_fixed">
				<p>
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 하나누리 소개 > 하나누리 소개
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?> 
			<div id="content">
				<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub1/sub1_introduction.gif'>
			</div><!--close content-->
		</div><!--close intro_fixed-->
	</div><!--close intro_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>