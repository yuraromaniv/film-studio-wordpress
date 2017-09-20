<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Flash
 */

$post_id = get_the_ID();
setPostViews($post_id);

get_header(); 
?>


	<div class="container">

		<div class="col-md-8 col-md-push-2" style="background-image: url(<?=get_the_post_thumbnail_url($post_id, 'large')?>);">
			<div class="single-post-container">
				<p class="post-title"><?=get_the_title()?></p>
				<p class="post-sub-title"><?=html_entity_decode(get_field('sub_title', $post_id));?></p>
				<span class="text-left date-cont"><?=get_the_time('Y-m-d', $post_id);?></span>
				<span class="text-left show-cont"> <?=getPostViews($post_id);?> view</span>
				<div class="post-content">
					<?=get_post_field('post_content', $post_id)?>
				</div>
			</div>
		</div>

	</div>
<?php
get_footer();
