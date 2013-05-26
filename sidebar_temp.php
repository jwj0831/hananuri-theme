<div class="widget">
	<?php dynamic_sidebar('sidebar-widget') ?>
		
	<aside id="search-box" class="widget-box">
		<?php get_search_form(); ?>
	</aside>
	
	<aside id="search-box" class="widget-box">
		<h3>검색</h3>
		<input type="text" name="search" value="search" />
		<input type="button" name="button" value="검색" />
	</aside>
	<aside id="archive" class="widget-box">
		<h3>글 보관함</h3>
		<ul>
			<?php wp_get_archives('type=monthly&limit=12'); ?>
		</ul>
	</aside>
</div><!--close widget-->