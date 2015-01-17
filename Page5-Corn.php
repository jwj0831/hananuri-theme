<?php 

/**
 * Template Name: Corn Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 후원 > 옥수수 국수기계 후원
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
			<div id="content">
				<img src='<?php bloginfo('template_url'); ?>/images/single/support_single_top.gif'>
				<div id="Corn-img-div">
					<img usemap="#Corn" src='http://hananuri07.cdn3.cafe24.com/campaign/2014corn.jpg'>
					<map name="Corn" id="Corn">
						<area shape="rect" coords="189,1616,335,1680" href="http://www.hananuri.org/support/periodic_support" target="_blank" />
						<area shape="rect" coords="357,1617,501,1679" href="http://www.hananuri.org/support/temporal_support" target="_blank" />
					</map>
				</div>
			</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>