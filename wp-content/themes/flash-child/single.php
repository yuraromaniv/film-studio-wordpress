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

<div class="single-post-bg">
	<div class="container single-block-bg">

		<div class="col-md-10 col-md-push-1" style="padding:0;background-size: cover;background-position: center;background-image: url(<?=get_the_post_thumbnail_url($post_id, 'large')?>);">
			<div class="single-post-container-single">
				<div class="single-post-content">
					<p class="post-title onenews-title"><?=get_the_title()?></p>
					<p class="post-sub-title-single onenews-sub-title"><?=html_entity_decode(get_field('sub_title', $post_id));?></p>
				</div>
			</div>
		</div>
		<div class="col-md-10 col-md-push-1 post-content-single onenews-text"><div><span class="onenews-date text-left date-cont"><?=get_the_time('Y.m.d', $post_id);?></span>
			<span class="text-left show-cont onenews-count"><span class="">&#128065;</span> <?=getPostViews($post_id);?></span></div>
			<?=get_post_field('post_content', $post_id)?>
		</div>
	</div>
</div>
<?php
get_footer();
