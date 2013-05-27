<?php 

/**
 * Template Name: Overseas Biz Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 북한∙해외사업 > 해외사업
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?> 
			
			<div id="content">
				<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub2/sub2_overseas.gif' usemap="#Overseas_Map">
				<map name="Overseas_Map" id="Map">
					<area shape="rect" coords="373,214,487,250" href="<?php echo home_url() ?>/activities/overseas_india" />
					<area shape="rect" coords="488,214,602,250" href="<?php echo home_url() ?>/activities/overseas_vietnam" />
					<area shape="rect" coords="603,213,717,249" href="<?php echo home_url() ?>/activities/overseas_mongolia" />
				</map>
				
				<div class="biz_update_banner">
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_update.gif'>
				</div>

				<div class="new_contents">
					<?php
						if ( get_query_var('paged') ) {
	                        $paged = get_query_var('paged');
		                } elseif ( get_query_var('page') ) {
		                        $paged = get_query_var('page');
		                } else {
		                        $paged = 1;
		                }
						
						query_posts(array(
							'cat' => getOverseasBizIndiaCategoryNum(),
							'posts_per_page' => 3,
							'paged' => $paged
							)					
						);
						$posts = new WP_Query($args);
						while( have_posts()) : 
							the_post();
							$id = get_the_ID();
					?>
					<div class="news_row">
						<h3>
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php the_title(); ?>
							</a>
						</h3>
						<div class="news_img">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'excerpt-thumbnail');
									$url = $thumb['0'];
								?>		
								<img width=160 height=110 src=<?= $url ?>>
							</a>
						</div>
						
						<div class="news_author">
							<b><?php the_author()?></b> | <?php the_time('F j, Y') ?>
						</div>
						
						<div class="news_text">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php echo mb_substr(get_the_excerpt(), 0, 200, 'UTF-8'); ?> ...				
							</a>
						</div>
						
					</div>
					
					<?php endwhile; ?>
					
					<div class="news_nav">
						<?php wp_pagenavi(); ?>
					</div>
					
					<?php wp_reset_query(); ?>
				</div> 

			</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>