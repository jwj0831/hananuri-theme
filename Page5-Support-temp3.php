<?php /**
 * Template Name: Support Page Temp 3
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
					<img src='<?php bloginfo('template_url'); ?>/images/subpage/sub_home.gif'> 홈 > 후원 > 크리스마스선물
				</p>
			</div>
		</div>
		<div class="subpage_fixed">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
			<div id="content">
				<?php do_action('slideshow_deploy', '58'); ?>
				<div id="ajax-result">
				
				</div>
				<script>
					$(document).ready(function() {
						$('#ajax-result').load("/hiddenforsecurity/wordpress/wp-content/themes/hananuri_v1/donation_ajax.php", {'num' : 3}, null); //initial data to load
						
						$('.slideshow_slide_image').click(function(e) {			//user clicks on button
							var donation_num = $(this).children("a").children("img").attr('alt');
		                    $.post('/hiddenforsecurity/wordpress/wp-content/themes/hananuri_v1/donation_ajax.php', {'num' : donation_num}, function(data) {
		                        $('#ajax-result').html(data);
		            		}).fail(function(xhr, ajaxOptions, thrownError) {	//any errors?
		                        alert(thrownError); //alert with HTTP error
		           			});
		           		});
					});
				</script>
			</div>
		</div><!--close subpage_fixed-->
	</div><!--close subpage_stretched-->
	<div class="clear"></div>
<?php get_footer(); ?>