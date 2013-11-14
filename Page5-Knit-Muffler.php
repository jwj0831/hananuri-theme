<?php 

/**
 * Template Name: Knit Mufflers Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 후원 > 목도리 뜨기
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
			<div id="content">
				<img src='<?php bloginfo('template_url'); ?>/images/single/support_single_top.gif'>
				<img id="knit_img" src='<?php bloginfo('template_url'); ?>/images/subpage/sub5/sub5_muffler_img.jpg' usemap="#knit">
				<map name="knit" id="Map">
					<area shape="rect" coords="13,1934,697,2076" href="<?php echo home_url() ?>/support/volunteer_auth_form">
					<area shape="rect" coords="2,2079,229,2201" href="<?php echo home_url() ?>/support/muffler_pay" />
					<area shape="rect" coords="229,2078,481,2200" href="<?php echo home_url() ?>/support/temporal_support" />
					<area shape="rect" coords="480,2078,720,2202" href="<?php echo home_url() ?>/support/periodic_support" />
				</map>
				<div>
					<p id="muffler-mobile">모바일로 접속시 하단 정보 입력후 결제해주세요.</p>
				</div>
				<div>
					<iframe src="https://docs.google.com/forms/d/1LBqkKAsmuvqJuVMyo6im_ZBjoOhyCB9KOWolCa-WZCU/viewform?embedded=true" width="712" height="700" frameborder="0" marginheight="0" marginwidth="0">로드 중...</iframe>
				</div> 
			</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>