<?php 
	$category = getParentCatID();
?>

<?php 
	if( is_page( getAboutPageNum() ) or is_page( getIntrodcutionPageNum() ) or 
		is_page( getHistoryPageNum() ) or is_page( getOrganizationPageNum() ) or 
		is_page( getLocationPageNum() )
	){
		if( is_page( getAboutPageNum() ) or is_page( getIntrodcutionPageNum() ) )
			echo '<aside id="intro">';
		else if( is_page( getHistoryPageNum() ) )
			echo '<aside id="history">';
		else if( is_page( getOrganizationPageNum() ) )
			echo '<aside id="organ">';
		else if( is_page( getLocationPageNum() ) )
			echo '<aside id="location">';
?>
	<img src='<?php bloginfo('template_url'); ?>/images/subpage/left/left1_t.gif'>
	<ul>
		<li><a id="left1_menu1" href="<?php echo home_url() ?>/about/introduction"></a></li>
		<li><a id="left1_menu2" href="<?php echo home_url() ?>/about/history"></a></li>
		<li><a id="left1_menu3" href="<?php echo home_url() ?>/about/organization"></a></li>
		<li><a id="left1_menu4" href="<?php echo home_url() ?>/about/location"></a></li>			
	</ul>

<?php 
	}
	else if( is_page( getActivitiesPageNum() ) or is_page( getNorthBizPageNum() ) or 
			is_page( getOverseasPageNum() ) or is_page( getOverseasIndiaPageNum() ) or 
			is_page( getOverseasVietnamPageNum() ) or is_page( getOverseasMongoliaPageNum() ) or 
			$category == getNorthBizCategoryNum() or $category == getOverseasBizCategoryNum() or 
			$category == getOverseasBizIndiaCategoryNum() or $category == getOverseasBizVietnamCategoryNum() or 
			$category == getOverseasBizMongoliaCategoryNum() 
	){
		if( is_page( getActivitiesPageNum() ) or is_page( getNorthBizPageNum() ) or $category == getNorthBizCategoryNum() )
			echo '<aside id="northbiz">';
		else
			echo '<aside id="overseas">';
?>
	<img src='<?php bloginfo('template_url'); ?>/images/subpage/left/left2_t.gif'>
	<ul>
		<li><a id="left2_menu1" href="<?php echo home_url() ?>/activiies/northbiz"></a></li>
		<li><a id="left2_menu2" href="<?php echo home_url() ?>/activiies/overseas"></a></li>		
	</ul>	
	
<?php
	}
	else if( is_page( getDomesticPageNum() ) or is_page( getTransformationPageNum() ) or 
			is_page( getEducationPageNum() ) or is_page( getLandLibertyPageNum() ) or 
			$category == getDomesticBizCategoryNum() or $category == getTransformationCategoryNum() or 
			$category == getEducationCategoryNum() or $category == getLandlibertyCategoryNum() 
	){
		if( is_page( getDomesticPageNum() ) or is_page( getTransformationPageNum() ) or
			$category == getDomesticBizCategoryNum() or $category == getTransformationCategoryNum() )
			echo '<aside id="transformation">';	
		else if( is_page( getEducationPageNum() ) or $category == getEducationCategoryNum() )
			echo '<aside id="education">';
		else if( is_page( getLandLibertyPageNum() ) or $category == getLandlibertyCategoryNum() )
			echo '<aside id="landliberty">';	
?>	
	<img src='<?php bloginfo('template_url'); ?>/images/subpage/left/left3_t.gif'>
	<ul>
		<li><a id="left3_menu1" href="<?php echo home_url() ?>/domestic/transformation"></a></li>
		<li><a id="left3_menu2" href="<?php echo home_url() ?>/domestic/education"></a></li>
		<li><a id="left3_menu3" href="<?php echo home_url() ?>/domestic/landliberty"></a></li>		
	</ul>	

<?php
	}
	else if( is_page( getMagazinePageNum() ) or is_page( getPeninsulaPageNum() ) or 
			is_page( getStoryPageNum() ) or $category == getMagazineCategoryNum() or 
			$category == getPeninsulaMCategoryNum() or $category == getHananuriStoryCategoryNum() 
	){
		if( is_page( getMagazinePageNum() ) or is_page( getPeninsulaPageNum() ) or
			$category == getMagazineCategoryNum() or $category == getPeninsulaMCategoryNum() )
			echo '<aside id="magazine">';
		else if( is_page( getStoryPageNum() ) or $category == getHananuriStoryCategoryNum() )
			echo '<aside id="story">';
?>
	<img src='<?php bloginfo('template_url'); ?>/images/subpage/left/left4_t.gif'>
	<ul>
		<li><a id="left4_menu1" href="<?php echo home_url() ?>/magazine/peninsula-m"></a></li>
		<li><a id="left4_menu2" href="<?php echo home_url() ?>/magazine/story"></a></li>		
	</ul>

<?php
	}
	else if( is_page( getPeriodicSupportPageNum() ) or is_page( getTemporalSupportPageNum() ) or 
			is_page( getTaxRefundPageNum() ) or $category == getDonationCategoryNum() or
			$category == getDonatioinEndCategoryNum()
	){
		if( is_page( getPeriodicSupportPageNum() ) )
			echo '<aside id="periodic_support">';
		else if( is_page( getTemporalSupportPageNum() ) )
			echo '<aside id="temporal_support">';
		else if ( is_page( getTaxRefundPageNum() ) )
			echo '<aside id="tax_refund">';
		else if ( $category == getDonationCategoryNum() or $category == getDonatioinEndCategoryNum() )
			echo '<aside id="support_story">';
?>
	<img src='<?php bloginfo('template_url'); ?>/images/subpage/left/left5_t.gif'>
	<ul>
		<li><a id="left5_menu1" href="<?php echo home_url() ?>/support/periodic_support"></a></li>	
		<li><a id="left5_menu2" href="<?php echo home_url() ?>/support/temporal_support"></a></li>			
	</ul>

<?php
	}
?>
	<img class="left_high_ban" src='<?php bloginfo('template_url'); ?>/images/subpage/left/left_support.gif' usemap="#support">
	<map name="support">
		<area shape="rect" coords="15,120,180,162" href="<?php echo getDonationPageURL() ?>" alt='후원하기 링크'>
	</map>
	<img class="left_mid_ban" src='<?php bloginfo('template_url'); ?>/images/subpage/left/left_ars.gif'>
	<a href="http://happylog.naver.com/hananuri.do" target="_blank" alt='네이버 해피빈 링크'>
		<img class="left_low_ban" src='<?php bloginfo('template_url'); ?>/images/subpage/left/left_hb.gif'>
	</a>
</aside>

					


