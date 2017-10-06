<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flash
 */

?>

		
	

	<section class="section" id="screen-6" data-anchor="social">
		<div class="container">
			<div style="margin-right:0 !important;margin-left: 0 !important;" class="row">
				<div class="footer-mar text-center">
					<div class="col-md-4">
						<div class="row">
							<h3 class="footer-h3"><?=get_field('screen_5_col_1_soc_titile', 27)?></h3>
							<a href="<?=get_field('screen_5_col_1_soc_1', 27)?>"><img class="social-img" src="/wp-content/themes/flash/img/insta.png" alt="Instagram"></a>
							<a href="<?=get_field('screen_5_col_1_soc_2', 27)?>"><img class="social-img" src="/wp-content/themes/flash/img/fb.png" alt="Facebook"></a>
							<a href="<?=get_field('screen_5_col_1_soc_3', 27)?>"><img class="social-img" src="/wp-content/themes/flash/img/vimeo.png" alt="Vimeo"></a>
							<a href="<?=get_field('screen_5_col_1_soc_4', 27)?>"><img class="social-img" src="/wp-content/themes/flash/img/yt.png" alt="You Tube"></a>
						</div>
						<div class="row">
							<h3 class="footer-h3"><?=get_field('screen_5_col_1_form_title', 27)?></h3>
							<? echo do_shortcode(html_entity_decode(get_field('screen_5_col_1_form_code', 27)));
							?> 
						</div>
					</div>
					<div class="col-md-4">
						<h3 class="footer-h3"><?=get_field('screen_5_col_2_title', 27)?></h3>
						<? echo do_shortcode(html_entity_decode(get_field('screen_5_col_2_gal', 27)));
						?> 
					</div>
					<div class="col-md-4">
						<h3 class="footer-h3"><?=get_field('screen_5_col_3_title', 27)?></h3>
						<? echo do_shortcode(html_entity_decode(get_field('screen_5_col_3_gal', 27)));
						?> 
					</div>
				</div>
			</div>
		</div>

		<div class="footer-home text-center hidden-xs">
			<div class="footer-home-top">
				<a href="platform-it.com">
					<img style="    width: 38px;" src="/wp-content/themes/flash/img/webstudio.png" alt="webstudio">
					<span class="footer-text">
						<span>designed by</span> 
						<div style="margin-left: 50px;">platform <span style="color: #52ac62">it</span></div> </span>
				</a>
			</div>
			<div class="footer-home-bot">
				ЛЬВІВ 2017 | ВСІ ПРАВА ЗАХИЩЕНО
			</div>
		</div>

	</section>
	</div>
	</div><!-- #content -->
	<footer id="colophon" class="footer-layout site-footer" role="contentinfo">
		
		<?php get_sidebar( 'footer' ); ?>
	</footer><!-- #colophon -->

	<?php
	/**
	 * flash_after_footer hook
	 */
	do_action( 'flash_after_footer' ); ?>

	<?php if ( get_theme_mod( 'flash_disable_back_to_top', '' ) != 1 ) : ?>
	<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
	<?php endif; ?>
</div><!-- #page -->

<?php
/**
 * flash_after hook
 */
do_action( 'flash_after' ); ?>

<?php wp_footer(); ?>



<script>
	$(window).on('resize', function () {
    if ($(window).width() > 900) {
       $(document).ready(function() {
	$('#fullpage').fullpage({
		
		//Custom selectors
		slideSelector: '.slide-fullpage',
//anchors: ['firstPage', 'secondPage', '3rdPage'],
        navigation: true,
        navigationPosition: 'right',
        showActiveTooltip: true,
        

	});
});
    } 
})

</script>
<script src="/wp-content/themes/flash/js/audio.min.js"></script>
<script>
  audiojs.events.ready(function() {
    var as = audiojs.createAll();
  });
</script>
							<script>

								function openbox(box1){
									display = document.getElementById(box1).style.display;

									if(display=='none'){
										document.getElementById(box1).style.display='block';
									}else{
										document.getElementById(box1).style.display='none';
									}
								}
								function openbox(box2){
									display = document.getElementById(box2).style.display;

									if(display=='none'){
										document.getElementById(box2).style.display='block';
									}else{
										document.getElementById(box2).style.display='none';
									}
								}
								function openbox(box3){
									display = document.getElementById(box3).style.display;

									if(display=='none'){
										document.getElementById(box3).style.display='block';
									}else{
										document.getElementById(box3).style.display='none';
									}
								}
							
	document.getElementById('hider').onclick = function() {
		document.getElementById('box1').style.display = 'none';
		document.getElementById('box2').style.display = 'none';
		document.getElementById('box3').style.display = 'none';
	}

	document.getElementById('hider2').onclick = function() {
		document.getElementById('box1').style.display = 'none';
		document.getElementById('box2').style.display = 'none';
		document.getElementById('box3').style.display = 'none';
	}

	document.getElementById('hider3').onclick = function() {
		document.getElementById('box1').style.display = 'none';
		document.getElementById('box2').style.display = 'none';
		document.getElementById('box3').style.display = 'none';
	}

	$(document).mouseup(function (e) {
    var container = $("#box1");
    if (container.has(e.target).length === 0){
        container.hide();
    }
});

	$(document).mouseup(function (e) {
    var container = $("#box2");
    if (container.has(e.target).length === 0){
        container.hide();
    }
});

	$(document).mouseup(function (e) {
    var container = $("#box3");
    if (container.has(e.target).length === 0){
        container.hide();
    }
});
</script>
<script>
	jQuery(document).ready(function($) {
  $(window).load(function() {
    setTimeout(function() {
      $('#preloader').fadeOut('slow', function() {});
    }, 2000);

  });
});
</script>
</body>
</html>