<?php 

/**
 * Template Name: Location Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 하나누리 소개 > 오시는 길
				</p>
			</div>
		</div>
		
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?> 
			<div id="content">
				<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub1/sub1_location.gif'>
				<div class="map">
					<table style="margin-left:90px;"cellpadding="0" cellspacing="0" width="536"> <tr> <td style="border:1px solid #cecece;"><a href="http://map.naver.com/?dlevel=13&lat=37.6249523&lng=127.0262958&searchCoord=127.0257622%3B37.6243949&query=7ISc7Jq4IOqwleu2geq1rCDrj4TrtInroZw0Neq4uCAxOC00&menu=location&tab=1&mapMode=0&enc=b64" target="_blank"><img src="http://prt.map.naver.com/mashupmap/print?key=p1373525656906_-1821385878" width="534" height="418" alt="지도 크게 보기" title="지도 크게 보기" border="0" style="vertical-align:top;"/></a></td> </tr> <tr> <td>  <table cellpadding="0" cellspacing="0" width="100%">  <tr>  <td height="30" bgcolor="#f9f9f9" align="left" style="padding-left:9px; border-left:1px solid #cecece; border-bottom:1px solid #cecece;">   <span style="font-family: tahoma; font-size: 11px; color:#666;">2013.7.11</span>&nbsp;<span style="font-size: 11px; color:#e5e5e5;">|</span>&nbsp;<a style="font-family: dotum,sans-serif; font-size: 11px; color:#666; text-decoration: none; letter-spacing: -1px;" href="http://map.naver.com/?dlevel=13&lat=37.6249523&lng=127.0262958&searchCoord=127.0257622%3B37.6243949&query=7ISc7Jq4IOqwleu2geq1rCDrj4TrtInroZw0Neq4uCAxOC00&menu=location&tab=1&mapMode=0&enc=b64" target="_blank">지도 크게 보기</a>  </td>  <td width="98" bgcolor="#f9f9f9" align="right" style="text-align:right; padding-right:9px; border-right:1px solid #cecece; border-bottom:1px solid #cecece;">   <span style="float:right;"><span style="font-size:9px; font-family:Verdana, sans-serif; color:#444;">&copy;&nbsp;</span>&nbsp;<a style="font-family:tahoma; font-size:9px; font-weight:bold; color:#009bc8; text-decoration:none;" href="http://www.nhncorp.com" target="_blank">NHN Corp.</a></span>  </td>  </tr>  </table> </td> </tr>  </table>
				</div>		
			</div><!--close content-->
		</div><!--close intro_fixed-->
	</div><!--close intro_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>