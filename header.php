<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/thumbnail.jpg" />
				
		<?php $image = get_post_meta($post->ID, 'facebookimage', true);
		if ($image) {
		echo "<link rel=\"image_src\" href=\"" . $image . "\">";
		} ?>
				
		
			<title><?php
				/*
				 * Print the <title> tag based on what is being viewed.
				 */
				global $page, $paged;
			
				wp_title( '|', true, 'right' );
			
				// Add the blog name.
				bloginfo( 'name' );
			
				// Add the blog description for the home/front page.
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo " | $site_description";
			
				// Add a page number if necessary:
				if ( $paged >= 2 || $page >= 2 )
					echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
			
				?>
			</title>
		
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" media="only screen and (max-device-width: 1024px)" href="ipad.css" type="text/css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Pulled from http://code.google.com/p/html5shiv/ -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
		
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
?>
	 
<?php wp_head(); ?>
	</head>
                    
	<body <?php body_class(); ?>>
		<?php if ( is_front_page() ) {	?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/ko_KR/all.js#xfbml=1&appId=228710550558869";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<?php }	?>
		 
		<div id="wrapper">
			<div id="head-container">
				<header>
					<div id="header">
						<h1>
							<a id="logo" title="<?php echo get_bloginfo('name'); ?>" href="<?php echo home_url() ?>">
								<img src='<?php bloginfo('template_directory'); ?>/images/top_logo.gif' alt='하나누리'>
							</a>
						</h1>
						<ul>
							<li><a id="header_banner1" href="http://shopnjoy.cafe24.com/front/php/category.php?cate_no=41" target="_blank"><img src='<?php bloginfo('template_url'); ?>/images/top_banner1.gif' alt='하나누리 착한소비 운동 하나누리 쌀'></a></li>
							<li><img src='<?php bloginfo('template_url'); ?>/images/top_banner2.gif' alt='마음을 나누는 전화 1666-2792'></li>
						</ul>
					</div><!--close header-->
				</header>
				<div id="menu">
					<nav>
						<ul>
							<?php
								$category = getParentCatID();
								echo '<li><a id="header_menu1';
								if( is_page( getAboutPageNum() ) or is_page( getIntrodcutionPageNum() ) or 
									is_page( getHistoryPageNum() ) or is_page( getOrganizationPageNum() ) )
									echo '_fixed';
								echo '" href="' . home_url() . '/about"></a>';
							?><ul id="submenu1">
								<li><a id="header_menu1_sub1" href="<?php echo home_url()?>/about/introduction"><span>하나누리소개</span></a></li>
								<li><a id="header_menu1_sub2" href="<?php echo home_url()?>/about/history"><span>걸어온 길</span></a></li>
								<li><a id="header_menu1_sub3" href="<?php echo home_url()?>/about/organization"><span>함께하는 이</span></a></li>
								<li><a id="header_menu1_sub4" href="<?php echo home_url()?>/about/location"><span>오시는 길</span></a></li>
							</ul></li>
							<?php
								echo '<li><a id="header_menu2';
								if( !( is_front_page() ) and 
									( 
										is_page( getActivitiesPageNum() ) or is_page( getNorthBizPageNum() ) or 
										is_page( getOverseasPageNum() ) or is_page( getOverseasIndiaPageNum() ) or 
										is_page( getOverseasVietnamPageNum() ) or is_page( getOverseasMongoliaPageNum() ) or 
										$category == getNorthBizCategoryNum() or $category == getOverseasBizCategoryNum() or 
										$category == getOverseasBizIndiaCategoryNum() or $category == getOverseasBizVietnamCategoryNum() or 
										$category == getOverseasBizMongoliaCategoryNum()
									) 
								)
									echo '_fixed';
								echo '" href="' . home_url() . '/activities"></a>';
							?><ul id="submenu2">
								<li><a id="header_menu2_sub1" href="<?php echo home_url()?>/activities/northbiz"><span>북한사업</span></a></li>
								<li><a id="header_menu2_sub2" href="<?php echo home_url()?>/activities/overseas"><span>해외사업</span></a></li>
							</ul></li>
								
							<?php
								echo '<li><a id="header_menu3';
								if( !( is_front_page() ) and 
									(
										is_page( getDomesticPageNum() ) or is_page( getTransformationPageNum() ) or 
										is_page( getEducationPageNum() ) or is_page( getLandLibertyPageNum() ) or 
										$category == getDomesticBizCategoryNum() or $category == getTransformationCategoryNum() or 
										$category == getEducationCategoryNum() or $category == getLandlibertyCategoryNum()
									) 
								) 
									echo '_fixed"';
								echo '" href="' . home_url() . '/domestic"></a>';
							?><ul id="submenu3">
								<li><a id="header_menu3_sub1" href="<?php echo home_url()?>/domestic/transformation"><span>갈등전환센터</span></a></li>
								<li><a id="header_menu3_sub2" href="<?php echo home_url()?>/domestic/education"><span>문화교류교육사업</span></a></li>
								<li><a id="header_menu3_sub3" href="<?php echo home_url()?>/domestic/landliberty"><span>토지+자유연구소</span></a></li>
							</ul></li>	
							<?php
								echo '<li><a id="header_menu4';	
								if( !( is_front_page() ) and 
									(
										is_page( getMagazinePageNum() ) or is_page( getPeninsulaPageNum() ) or 
										is_page( getStoryPageNum() ) or $category == getMagazineCategoryNum() or 
										$category == getPeninsulaMCategoryNum() or $category == getHananuriStoryCategoryNum()
									) 
								)
									echo '_fixed"';
								echo '" href="' . home_url() . '/magazine"></a>';
							?><ul id="submenu4">
								<li><a id="header_menu4_sub1" href="<?php echo home_url()?>/magazine/peninsula-m"><span>한반도 정세 매거진</span></a></li>
								<li><a id="header_menu4_sub2" href="<?php echo home_url()?>/magazine/story"><span>하나누리 이야기</span></a></li>
								<li><a id="header_menu4_sub3" href="<?php echo home_url()?>/magazine/northstory"><span>북녘땅 이야기</span></a></li>
							</ul></li>';
							<?php
								echo '<li><a id="header_menu5';		
								if( !( is_front_page() ) and 
									(
										is_page( getSupportPageNum() ) or is_page( getPeriodicSupportPageNum() ) or 
										is_page( getTemporalSupportPageNum() ) or $category == getDonationCategoryNum() or 
										$category == getDonatioinEndCategoryNum()
									) 
								)
									echo '_fixed"';
								echo '" href="' . home_url() . '/support"></a></li>';
							?>
							<?php
								echo '<li><a id="';
								if( is_user_logged_in() ) {
									echo 'header_logged_in" href="' . wp_logout_url( current_page_url() ) . '"></a></li>';
								}
								else {
									echo 'header_logged_out" href="' . wp_login_url( current_page_url() ) . '"></a></li>';
								}
							?>
						</ul>	
					</nav>
				</div>
			</div><!--close head-container-->