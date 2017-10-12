<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Flash
 */


get_header(); 
?>

<div class="single-portfolio-bg">
	<div class="container">

		<div class="col-md-8 col-md-push-2">
			<div class="row single-portfolio-block">
				<div class="col-md-5 project-screen">
					<img src="<?=get_the_post_thumbnail_url($post_id, 'large')?>">
				</div>
				<div class="col-md-7">
					<p class="post-title project-title"><?=get_the_title()?></p>

					<p class="post-year project-year"><?=html_entity_decode(get_field('year'));?></p>
					<p class="post-film-type project-film-type"><?=html_entity_decode(get_field('film_type'));?></p>

					<p class="post-sub-title project-sub-title-single"><?=html_entity_decode(get_field('sub_title'));?></p>
					

					<p class="post-genre project-genre">Жанр: <span><?=html_entity_decode(get_field('genre'));?></span></p>
					<p class="post-time project-time">Тривалість: <span><?=html_entity_decode(get_field('time'));?></span></p>
					<p class="post-operator project-operator"">Режисер/оператор/монтаж: <span><?=html_entity_decode(get_field('operator'));?></span></p>
					<p class="post-art-director project-director">Арт директор: <span><?=html_entity_decode(get_field('art_director'));?></span></p>
					<p class="post-compositor project-music">Композитор/саунд-продюсер: <span><?=html_entity_decode(get_field('compositor'));?></span></p>
					<p class="post-sound-regiser project-music">Звукорежисер: <span><?=html_entity_decode(get_field('sound_regiser'));?></span></p>
					<p class="post-scenario project-music">Сценарій: <span><?=html_entity_decode(get_field('scenario'));?></span></p>
					<p class="post-role project-music">Ролі виконали: <span><?=html_entity_decode(get_field('role'));?></span></p>

					
					<div class="post-content project-sub-title-single">
						<?=get_post_field('post_content')?>
					</div>

					<div class="social-bl">
						<div style="margin: 0;" class="row">
							<p class="project-music">Соціальні посилання:</p>
							<div style="padding: 0" class="col-md-6 col-xs-7">
								<a href="<?=get_post_field('link_inst')?>"><img class="single-social-img " src="/wp-content/themes/flash/img/insta.png" alt="Instagram"></a>
								<a href="<?=get_post_field('link_fb')?>"><img class="single-social-img" src="/wp-content/themes/flash/img/fb.png" alt="Facebook"></a>
								<a href="<?=get_post_field('link_vimeo')?>"><img class="single-social-img" src="/wp-content/themes/flash/img/vimeo.png" alt="Vimeo"></a>
								<a href="<?=get_post_field('link_youtube')?>"><img class="single-social-img" src="/wp-content/themes/flash/img/yt.png" alt="You Tube"></a>
							</div>
							<div class="col-md-6 col-xs-5 single-link">
								<?=html_entity_decode(get_field('other_link'));?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

	</div>
</div>	
<?php
get_footer();
