<?php

    /* ============================================================================== */
    /* =   환경 설정 파일 Include                                                   = */
    /* = -------------------------------------------------------------------------- = */
    /* =   ※ 필수                                                                  = */
    /* =   테스트 및 실결제 연동시 site_conf_inc.php파일을 수정하시기 바랍니다.     = */
    /* = -------------------------------------------------------------------------- = */
    
 include "/home/hosting_users/hananuri07/kcp/cfg/site_conf_inc.php";
 
     /* = -------------------------------------------------------------------------- = */
    /* =   환경 설정 파일 Include END                                               = */
    /* ============================================================================== */
?>
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
	<?
    /* ============================================================================== */
    /* =   Javascript source Include                                                = */
    /* = -------------------------------------------------------------------------- = */
    /* =   ※ 필수                                                                  = */
    /* =   테스트 및 실결제 연동시 site_conf_inc.php파일을 수정하시기 바랍니다.     = */
    /* = -------------------------------------------------------------------------- = */
	?>
    <script type="text/javascript" src='<?=$g_conf_js_url?>'></script>
	<?
    /* = -------------------------------------------------------------------------- = */
    /* =   Javascript source Include END                                            = */
    /* ============================================================================== */
	?>
	
	<script type="text/javascript">
	 /* 플러그인 설치(확인) */
		StartSmartUpdate();
        
		/*  해당 스크립트는 타브라우져에서 적용이 되지 않습니다.
		if( document.Payplus.object == null )
		{
			openwin = window.open( "chk_plugin.html", "chk_plugin", "width=420, height=100, top=300, left=300" );
		}
		*/

        /* Payplus Plug-in 실행 */
        function  jsf__pay( form )
        {

            var RetVal = false;


            /* Payplus Plugin 실행 */
            if ( MakePayMessage( form ) == true )
            {
                openwin = window.open( "http://www.hananuri.org/kcp/proc_win.html", "proc_win", "width=449, height=209, top=300, left=300" );
                RetVal = true ;
            }
            
            else
            {
                /*  res_cd와 res_msg변수에 해당 오류코드와 오류메시지가 설정됩니다.
                    ex) 고객이 Payplus Plugin에서 취소 버튼 클릭시 res_cd=3001, res_msg=사용자 취소
                    값이 설정됩니다.
                */
                res_cd  = document.order_info.res_cd.value ;
                res_msg = document.order_info.res_msg.value ;

            }
            return RetVal ;
        }

        function changeCharSet(form) {
        	if(form.canHaveHTML){
        		document.charset = "euc-kr";
        	}

        	return true;
        }

		// Payplus Plug-in 설치 안내 
        function init_pay_button()
        {
			/*
            if( document.Payplus.object == null )
                document.getElementById("display_setup_message").style.display = "block" ;
            else
                document.getElementById("display_pay_button").style.display = "block" ;
			*/
			// 체크 방법이 변경
			if( GetPluginObject() == null ){
				document.getElementById("display_setup_message").style.display = "block" ;
			}
			else{
				document.getElementById("display_pay_button").style.display = "block" ;
			}
        }

        /* 주문번호 생성 예제 */
        function init_orderid()
        {
            var today = new Date();
            var year  = today.getFullYear();
            var month = today.getMonth() + 1;
            var date  = today.getDate();
            var time  = today.getTime();

            if(parseInt(month) < 10) {
                month = "0" + month;
            }

            if(parseInt(date) < 10) {
                date = "0" + date;
            }

            var order_idxx = "HANANURI" + year + "" + month + "" + date + "" + time;

            document.order_info.ordr_idxx.value = order_idxx;

			/*
			 * 인터넷 익스플로러와 파이어폭스(사파리, 크롬.. 등등)는 javascript 파싱법이 틀리기 때문에 object 가 인식 전에 실행 되는 문제
			 * 기존에는 onload 부분에 추가를 했지만 setTimeout 부분에 추가
			 * setTimeout 300의 의미는 플러그인 인식속도에 따른 여유시간 설정
			 * - 김민수 - 20101018 -
			 */
			setTimeout("init_pay_button();",300);
        }

        /* onLoad 이벤트 시 Payplus Plug-in이 실행되도록 구성하시려면 다음의 구문을 onLoad 이벤트에 넣어주시기 바랍니다. */
        function onload_pay()
        {
             if( jsf__pay(document.order_info) )
                document.order_info.submit();
        }
		</script>


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
                    
	<body onload="init_orderid();" <?php body_class(); ?>>
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