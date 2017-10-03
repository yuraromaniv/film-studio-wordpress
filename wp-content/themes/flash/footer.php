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
function windowSize(){
    if($(window).width()>'900'){
	$('#fullpage').fullpage({
		
		//Custom selectors
		slideSelector: '.slide-fullpage',
//anchors: ['firstPage', 'secondPage', '3rdPage'],
        navigation: true,
        navigationPosition: 'right',
        showActiveTooltip: true,
        

	});

}
};
$(window).load(windowSize);
$(window).resize(windowSize);
$(window).on('load resize',windowSize);
</script>
<script src="/wp-content/themes/flash-child/js/audio.min.js"></script>
<script>
  audiojs.events.ready(function() {
    var as = audiojs.createAll();
  });
</script>

</body>
</html>