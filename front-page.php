<?php get_header() ?>
	<div class="clear"></div>		
	<div id="main">
		<div id="event_slider">
			<?php dynamic_sidebar('event'); ?>
		</div>
		
		<div id="main_middle">
			<ul id="middle_banner">
				<li><a id="main_bannner1" href="<?php echo home_url() ?>"><img src='<?php bloginfo('template_url'); ?>/images/main_banner_t.gif' alt='하나누리 프로젝트'></a></li>		
				<li><a id="main_bannner2" href="<?php echo home_url() ?>/activities/northbiz"><img src='<?php bloginfo('template_url'); ?>/images/main_banner1.gif' alt='북한 사업'></a></li>		
				<li><a id="main_bannner3" href="<?php echo home_url() ?>/activities/overseas"><img src='<?php bloginfo('template_url'); ?>/images/main_banner2.gif' alt='해외 사업'></a></li>		
				<li><a id="main_bannner4" href="<?php echo home_url() ?>/domestic"><img src='<?php bloginfo('template_url'); ?>/images/main_banner3.gif' alt='국내 사업'></a></li>
				<li><a id="main_bannner5" href="<?php echo home_url() ?>/domestic/transformation"><img src='<?php bloginfo('template_url'); ?>/images/main_banner4.gif' alt='갈등전환센터'></a></li>
				<li><a id="main_bannner6" href="<?php echo home_url() ?>/introduction"><img src='<?php bloginfo('template_url'); ?>/images/main_banner5.gif' alt='하나누리 소개'></a></li>
				<li><a id="main_bannner7" href="<?php echo home_url() ?>/domestic/landliberty"><img src='<?php bloginfo('template_url'); ?>/images/main_banner6.gif' alt='토지자유 연구소'></a></li>
			</ul>
		</div><!--close main_middle-->
				
		<div id="main_low">
			<div id="low_banner">
				<div class="donation">
					<img src='<?php bloginfo('template_url'); ?>/images/main_support_btn.gif' usemap="#banner" alt='후원하기 이미지'>
					<map name="banner">
		 				<area shape="rect" coords="20,150,190,192" href="<?php echo getDonationPageURL() ?>" alt='후원하기 링크'>
		 				<area shape="rect" coords="202,150,300,192" href="http://happylog.naver.com/hananuri.do" target="_blank" alt='네이버 해피빈 링크'>
					</map>
				</div>
				<div class="news">
					<div class="news_logo">
						<img src='<?php bloginfo('template_url'); ?>/images/main_log.gif' alt='사업소식'>
					</div>
					<div class="new_contents">
						<?php
						/*  Notice!!!!!
						 * Category number 15 means notice num
						 */
						$news_query = new WP_Query('posts_per_page=5&order=DESC&orderby=date&cat=15');
						while ($news_query->have_posts()) : $news_query->the_post();
						$id = get_the_ID();
						$category = get_the_category($id); ?>
						<div class="news_row">
							<span class="new_cat">[<?php echo $category[1]->cat_name ?>]</span> <a href="<?php echo get_permalink($id) ?>" ><?php the_title(); ?></a>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div> 
				</div>
				<div class="fb_news">
					<div class="fb-like-box" data-href="https://www.facebook.com/hanaworld" data-width="324" data-height="217" data-show-faces="false" data-stream="true" data-show-border="true" data-header="true"></div>
				</div>
			</div>		
		</div><!--close main_low-->
		
		<div id="supporters">
			<div id="support_line">
				<div class="support">
					<img src='<?php bloginfo('template_url'); ?>/images/main_support.gif' alt='협력단체'>
				</div>
				
				<div class="support_banner">
					<?php do_action('slideshow_deploy', '63'); ?>
					<!--
					<a id="support_bannner1" href="http://www.samsungdisplay.com"><img src='<?php bloginfo('template_url'); ?>/images/cowork/samsung.gif' alt='삼성디스플레이'></a>
					<a id="support_bannner2" href="http://www.chest.or.kr"><img src='<?php bloginfo('template_url'); ?>/images/cowork/chest.gif' alt='사회복지공동모금회'></a>
					<a id="support_bannner3" href="http://eil21.co.kr"><img src='<?php bloginfo('template_url'); ?>/images/cowork/eil21.gif' alt='이일산업'></a>
					<a id="support_bannner4" href="http://www.kiha21.or.kr"><img src='<?php bloginfo('template_url'); ?>/images/cowork/kiha21.gif' alt='대한산업보건협회'></a>
					<a id="support_bannner5" href="http://www.bloodnet.or.kr"><img src='<?php bloginfo('template_url'); ?>/images/cowork/bloodnet.gif' alt='한마음혈액원'></a>
					<a id="support_bannner6" href="http://www.gaius.co.kr"><img src='<?php bloginfo('template_url'); ?>/images/cowork/gaius.gif' alt='가이오산업'></a>
					<a id="support_bannner7" href="http://www.canaelec.co.kr"><img src='<?php bloginfo('template_url'); ?>/images/cowork/canaelec.gif' alt='(주)카나'></a>
					<a id="support_bannner8" href="http://www.gscaltex.com"><img src='<?php bloginfo('template_url'); ?>/images/cowork/gs.gif' alt='GS칼텍스'></a>
					-->
				</div>
			</div>
		</div><!--close supporters-->
	</div><!--close main-->
<?php get_footer() ?>