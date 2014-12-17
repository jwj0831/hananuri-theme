<?php

/*
 * 관리자에게만 상단바 보여주기 
 * 
 */
 /*
function fn_admin_bar() {
  return (current_user_can("manage_options"))? true : false;
}
add_filter('show_admin_bar', 'fn_admin_bar');
*/



function current_page_url() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

function getParentCatID() {
	$category = get_the_category();
	if($category[0]->cat_ID == getNoticeCategoryNum())
		if( $category[2]->cat_ID != null)
			return $category[2]->cat_ID;
		else
			return $category[1]->cat_ID;
	else {
		if( $category[1]->cat_ID != null )
			return $category[1]->cat_ID;
		else
			return $category[0]->cat_ID;
	}
}

function getDonationPageURL() {
	return "http://www.hananuri.org/support/periodic_support";
}


/*
 * User Define Value Return Function for Hananuri Theme
 */
 
// Page Value
function getAboutPageNum() {return 2;}
function getIntrodcutionPageNum() {return 10;}
function getHistoryPageNum() {return 12;}
function getOrganizationPageNum() {return 14;}
function getLocationPageNum() {return 16;}

function getActivitiesPageNum() {return 19;}
function getNorthBizPageNum() {return 21;}

function getOverseasPageNum() {return 23;}
function getOverseasIndiaPageNum() {return 29;}
function getOverseasVietnamPageNum() {return 27;}
function getOverseasMongoliaPageNum() {return 25;}

function getDomesticPageNum() {return 37;}
function getTransformationPageNum() {return 39;}
function getTransformEduPageNum() {return 1926;}
function getTransformRegisterPageNum() {return 1928;}
function getEducationPageNum() {return 41;}
function getLandLibertyPageNum() {return 43;}

function getMagazinePageNum() {return 31;}
function getPeninsulaPageNum() {return 33;}
function getStoryPageNum() {return 35;}
function getNorthStoryPageNum() {return 822;}

function getSupportPageNum() {return 45;}
function getPeriodicSupportPageNum() {return 47;}
function getTemporalSupportPageNum() {return 49;}
function getMealDonationPageNum() {return 1416;}
function getMoneyBoxPageNum() {return 1418;}
function getKnitMufflersPageNum() {return 1386;}
function getMufflerPayPageNum() {return 1388;}
function getVolunteerAuthFormPageNum() {return 1400;}
function getTaxRefundPageNum() {return 59;}
function getChristmasGiftPageNum() {return 1490;}
function getChristmasMufflerPageNum() {return 1525;}
function getChristmasNorthPageNum() {return 1527;}
function getChristmasIndiaPageNum() {return 1529;}
// Category Value
function getNorthBizCategoryNum() {return 1;}
function getOverseasBizCategoryNum() {return 2;}
function getOverseasBizIndiaCategoryNum() {return 3;}
function getOverseasBizVietnamCategoryNum() {return 4;}
function getOverseasBizMongoliaCategoryNum() {return 5;}
function getDomesticBizCategoryNum() {return 6;}
function getTransformationCategoryNum() {return 7;}
function getEducationCategoryNum() {return 8;}
function getLandlibertyCategoryNum() {return 9;}
function getMagazineCategoryNum() {return 10;}
function getPeninsulaMCategoryNum() {return 11;}
function getHananuriStoryCategoryNum() {return 12;}
function getNorthStoryCategoryNum() {return 16;}
function getDonationCategoryNum() {return 13;}
function getDonatioinEndCategoryNum() {return 14;}
function getNoticeCategoryNum() {return 15;}



// Changing excerpt length
function new_excerpt_length($length) {
	return 10000;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
	global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


add_theme_support( 'post-thumbnails' ); 
add_image_size('excerpt-thumbnail', 180, 140, true);

function hananuri_widgets_init() {
	register_sidebar(array(
		'name' => 'donation',
		'id' => 'donation-widget',
		'description' => 'dontation', 
		'before_widget' => '<aside id="%1$s" class="event-widgets %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
		
	register_sidebar(array(
		'name' => 'event',
		'before_widget' => '<div id="event-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
	register_sidebar(array(
		'name' => 'support',
		'before_widget' => '<div id="support-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
}

add_action( 'widgets_init', 'hananuri_widgets_init' );
?>
