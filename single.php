<?php get_header(); ?> 
	<div class="subpage_stretched">
			<div class="breadcrumb_stretched">
				<div class="breadcrumb_fixed">
					<p>
						<img src= "<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif">
						<?php
							$category = getParentCatID();
							
							if($category == 4)
								echo '홈 > 북한∙해외사업 > 북한사업';
							else if($category == 3)
								echo '홈 > 북한∙해외사업 > 해외사업';
							else if($category == 18 or $category == 2)
								echo '홈 > 국내사업 > 국내사업';
							else if($category == 16)
								echo '홈 > 국내사업 > 갈등전환 센터';
							else if($category == 17)
								echo '홈 > 국내사업 > 토지+자유 연구소';
							else if($category == getSupportCategoryNum())
								echo '홈 > 후원 > 후원소식';
						?>
					</p>
				</div>
			</div>
		
		<div class="subpage_fixed">      
		
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
      
	  		<div id="content">
			    <?php the_post(); ?>       
			    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			    	<div class="post-header-img">
			    		<?php if($category == getSupportCategoryNum()) {?>
	  						<img src='<?php bloginfo('template_url'); ?>/images/single/support_single_top.gif'>
			   		 	<?php } ?>
			    	</div>
			    	<div class="post-main">			    	
				        <div class="post-title">
				          <h2><?php the_title(); ?></h2>
				          <a href="javascript:javascript:history.go(-1)"><img src='<?php bloginfo('template_url'); ?>/images/single/post-lists.gif'></a>            
				        </div>
				        
				        <div class="post-meta-data">
				        	<b>글쓴이: <?php the_author()?></b> | 작성일: <?php the_time('F j, Y') ?> | 조회수: <?php if(function_exists(‘the_views’)) { the_views(); } ?>
				        </div>
				        
				        <section>
				        	<div class="post-content">
				          		<?php the_content( ); ?>
				         	</div>
				        </section> <!-- close article section -->  
			       </div>
			    </article>
			
			<?php if($category != getSupportCategoryNum())
	  			comments_template();
	  		 ?>
	  		</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>