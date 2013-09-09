<?php 

/**
 * Template Name: Money Box Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 후원 > 저금통 신청
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
			<div id="content">
				<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub5/sub5_meal_donation_img.jpg' usemap="#knit">
				<!--
				<map name="knit" id="Map">
					<area shape="rect" coords="13,1934,697,2076" href="<?php echo home_url() ?>/support/volunteer_auth_form">
					<area shape="rect" coords="2,2079,229,2201" href="<?php echo home_url() ?>/support/muffler_pay" />
					<area shape="rect" coords="229,2078,481,2200" href="<?php echo home_url() ?>/support/temporal_support" />
					<area shape="rect" coords="480,2078,720,2202" href="<?php echo home_url() ?>/support/periodic_support" />
				</map> 
			-->
			</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>