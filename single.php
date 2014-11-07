<?php get_header(); ?> 
	<div class="subpage_stretched">
			<div class="breadcrumb_stretched">
				<div class="breadcrumb_fixed">
					<p>
						<img src= "<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif">
						<?php
							$category = getParentCatID();
							
							if($category == getNorthBizCategoryNum() )
								echo '홈 > 북한∙해외사업 > 북한사업';
							else if($category == getOverseasBizIndiaCategoryNum() )
								echo '홈 > 북한∙해외사업 > 해외사업 > 해외사업-인도';
							else if($category == getOverseasBizVietnamCategoryNum() )
								echo '홈 > 북한∙해외사업 > 해외사업 > 해외사업-베트남';
							else if($category == getOverseasBizMongoliaCategoryNum() )
								echo '홈 > 북한∙해외사업 > 해외사업 > 해외사업-몽골';
							else if($category == getTransformationCategoryNum() )
								echo '홈 > 국내사업 > 갈등전환센터';
							else if($category == getEducationCategoryNum() )
								echo '홈 > 국내사업 > 문화교류∙교육 사업';
							else if($category == getLandlibertyCategoryNum() )
								echo '홈 > 국내사업 > 토지+자유 연구소';
							else if($category == getPeninsulaMCategoryNum() )
								echo '홈 > 매거진 > 한반도 정세 매거진';
							else if($category == getHananuriStoryCategoryNum() )
								echo '홈 > 매거진 > 하나누리 이야기';
							else if($category == getNorthStoryCategoryNum() )
								echo '홈 > 매거진 > 북녘땅 이야기';
							else if($category == getDonationCategoryNum() or $category == getDonatioinEndCategoryNum() )
								echo '홈 > 후원 > 후원안내';
							else if( is_attachment() )
								echo '자료';
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
			    		<?php if( $category == getDonationCategoryNum() or $category == getDonatioinEndCategoryNum() ) {?>
	  						<img src='<?php bloginfo('template_url'); ?>/images/single/support_single_top.gif'>
			   		 	<?php } ?>
			    	</div>
			    	
			    	<div class="post-main">			    	
				        <div class="post-title-row">
				        	<div class="post-title">
				        		<h2><?php the_title(); ?></h2>
				        	</div>
				        	<div class="post-list">
				    			<a href="javascript:javascript:history.go(-1)"><img src='<?php bloginfo('template_url'); ?>/images/single/post-lists.gif'></a> 
				    		</div>
				        </div>
				        
				        <div class="post-meta-data">
				        	<b>글쓴이: <?php the_author()?></b> | 작성일: <?php the_time('F j, Y') ?> | 조회수: <?php the_views(); ?>
				        </div>
				        
				        <section>
				        	<div class="post-content">
				          		<?php the_content( ); ?>
				         	</div>
				        </section> <!-- close article section -->  
			       </div>
			    </article>
			
			<?php if($category != getDonationCategoryNum() )
	  			comments_template();
	  		 ?>
	  		</div><!--close content-->
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>