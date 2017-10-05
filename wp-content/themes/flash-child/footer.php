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

		
	</div><!-- #content -->

	<?php
	/**
	 * flash_after_main hook
	 */
	do_action( 'flash_after_main' ); ?>

	<?php
	/**
	 * flash_before_footer hook
	 */
	do_action( 'flash_before_footer' ); ?>

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
<script src="/wp-content/themes/flash-child/js/audio.min.js"></script>
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