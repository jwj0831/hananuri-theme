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
	<!--<link rel="stylesheet" media="only screen and (max-device-width: 1024px)" href="ipad.css" type="text/css" />-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Pulled from http://code.google.com/p/html5shiv/ -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45373555-1', 'hananuri.org');
  ga('send', 'pageview');

</script>

		
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
			<?php include (TEMPLATEPATH . '/common-header.php'); ?>