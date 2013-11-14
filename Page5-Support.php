<?php 

/**
 * Template Name: Support Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 후원 > 후원안내
				</p>
			</div>
		</div>
		<div class="support_stretched">
			<div class="support_fixed">
				<?php dynamic_sidebar('donation'); ?>
			</div>
		</div>
		<div class="subpage_fixed">
			<div id="support_list">
				<?php
					if ( get_query_var('paged') ) {
	                	$paged = get_query_var('paged');
		            } elseif ( get_query_var('page') ) {
          		        $paged = get_query_var('page');
	        	        } else {
                        $paged = 1;
	                }
					
					$cat1 = getDonationCategoryNum(); 
					$cat2 = getDonatioinEndCategoryNum();	
						
					query_posts(array(
						'category__in' => array($cat1, $cat2),
						'posts_per_page' => 8,
						'paged' => $paged
						)					
					);
					$posts = new WP_Query($args);
					while( have_posts()) : 
						the_post();
						$id = get_the_ID();
				?>
				<div class="support_box">
					<div class="support_img">
						<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'excerpt-thumbnail');
							$url = $thumb['0'];
						?>		
						<img width=212 height=145 src=<?= $url ?>>
					</div>
					<h3>				
						<?php the_title(); ?>
					</h3>
					<!--
					<div class="support_date">
						 <?php the_time('Y. m. d') ?>
					</div>
					-->
					
					<div class="btn_img">
						<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
						<?php if(getParentCatID() == getDonatioinEndCategoryNum()) { ?>
							<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub5/sub5_end_btn.gif'>
						<?php } else {?>
							<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub5/sub5_more_btn.gif'>
						<?php }?>
						</a>
					</div>
				</div>
				<?php endwhile; ?>
				
				<div class="news_nav">
					<?php wp_pagenavi(); ?>
				</div>
				<?php wp_reset_query(); ?>
			</div><!--close support_list-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>