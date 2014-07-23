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
			is_page( getStoryPageNum() ) or is_page( getNorthStoryPageNum() ) or
			$category == getMagazineCategoryNum() or $category == getPeninsulaMCategoryNum() or 
			$category == getHananuriStoryCategoryNum() or $category == getNorthStoryCategoryNum() 
	){
		if( is_page( getMagazinePageNum() ) or is_page( getPeninsulaPageNum() ) or
			$category == getMagazineCategoryNum() or $category == getPeninsulaMCategoryNum() )
			echo '<aside id="magazine">';
		else if( is_page( getStoryPageNum() ) or $category == getHananuriStoryCategoryNum() )
			echo '<aside id="story">';
		else if( is_page( getNorthStoryPageNum() ) or $category == getNorthStoryCategoryNum() )
			echo '<aside id="northstory">';
?>
	<img src='<?php bloginfo('template_url'); ?>/images/subpage/left/left4_t.gif'>
	<ul>
		<li><a id="left4_menu1" href="<?php echo home_url() ?>/magazine/peninsula-m"></a></li>
		<li><a id="left4_menu2" href="<?php echo home_url() ?>/magazine/story"></a></li>
		<li><a id="left4_menu3" href="<?php echo home_url() ?>/magazine/northstory"></a></li>		
	</ul>

<?php
	}
	else if( 
			is_page ( getSupportPageNum() ) or // Modification
			is_page( getPeriodicSupportPageNum() ) or is_page( getTemporalSupportPageNum() ) or
			is_page ( getMealDonationPageNum() ) or is_page( getMoneyBoxPageNum() ) or
			is_page( getKnitMufflersPageNum() ) or is_page( getMufflerPayPageNum() ) or
			is_page( getVolunteerAuthFormPageNum() ) or is_page( getChristmasGiftPageNum() ) or
			is_page( getChristmasMufflerPageNum() ) or
			is_page( getChristmasNorthPageNum() ) or is_page( getChristmasIndiaPageNum() ) or
			is_page( getTaxRefundPageNum() ) or $category == getDonationCategoryNum() or
			$category == getDonatioinEndCategoryNum()
	){
		if( is_page ( getSupportPageNum() ) or is_page( getPeriodicSupportPageNum() ) )
			echo '<aside id="periodic_support">';
		else if( is_page( getTemporalSupportPageNum() ) )
			echo '<aside id="temporal_support">';
		else if ( is_page( getMealDonationPageNum() ) )
			echo '<aside id="meal_donation">';
		else if ( is_page ( getMoneyBoxPageNum() ) )
			echo '<aside id="money_box">';
		else if ( is_page( getKnitMufflersPageNum() ) or is_page( getMufflerPayPageNum() ) )
			echo '<aside id="muffler_support">';
		else if ( is_page( getVolunteerAuthFormPageNum() ) )
			echo '<aside id="volunteer_form">';
?>
	<img src='<?php bloginfo('template_url'); ?>/images/subpage/left/left5_t.gif'>
	<ul>
		<li><a id="left5_menu1" href="<?php echo home_url() ?>/support/periodic_support"></a></li>	
		<li><a id="left5_menu2" href="<?php echo home_url() ?>/support/temporal_support"></a></li>
		<li><a id="left5_menu3" href="<?php echo home_url() ?>/support/meal_donation"></a></li>
		<li><a id="left5_menu4" href="<?php echo home_url() ?>/support/money_box"></a></li>		
		<!--Temporary Event Close-->	
		<li><a id="left5_menu5" href="<?php echo home_url() ?>/support/muffler"></a></li>
		<!--<li><a id="left5_menu6" href="<?php echo home_url() ?>/support/volunteer_auth_form"></a></li>-->			
	</ul>

<?php
	}
?>
	<img class="left_high_ban" src='<?php bloginfo('template_url'); ?>/images/subpage/left/left_support.gif' usemap="#support">
	<map name="support">
		<area shape="rect" coords="15,120,180,162" href="<?php echo getDonationPageURL() ?>" alt='후원하기 링크'>
	</map>
	<!--<img class="left_mid_ban" src='<?php bloginfo('template_url'); ?>/images/subpage/left/left_ars.gif'>-->
	<a href="http://happylog.naver.com/hananuri.do" target="_blank" alt='네이버 해피빈 링크'>
		<img class="left_low_ban" src='<?php bloginfo('template_url'); ?>/images/subpage/left/left_hb.gif'>
	</a>
	<a href="http://www.hananuri.org/support/meal_donation" target="_self" alt='한 끼 나눔 링크'>
		<img class="left_low_ban" src='<?php bloginfo('template_url'); ?>/images/subpage/left/left_meal.gif'>
	</a>
	<!-- Temporary Event Close -->
	<a href="http://www.hananuri.org/support/muffler" target="_self" alt='목도리 뜨기 링크'>
		<img class="left_low_ban" src='<?php bloginfo('template_url'); ?>/images/subpage/left/left_muffler.gif'>
	</a>
	<a href="http://www.hananuri.org/support/money_box" target="_self" alt='저금통 링크'>
		<img class="left_low_ban" src='<?php bloginfo('template_url'); ?>/images/subpage/left/left_moneyBox.gif'>
	</a>

</aside>

					


