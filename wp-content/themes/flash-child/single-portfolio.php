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


	<div class="container">

		<div class="col-md-8 col-md-push-2">
			<div class="row">
				<div class="col-md-5">
					<img src="<?=get_the_post_thumbnail_url($post_id, 'large')?>">
				</div>
				<div class="col-md-7">
					<p class="post-title"><?=get_the_title()?></p>

					<p class="post-year"><?=html_entity_decode(get_field('year'));?></p>
					<p class="post-film-type"><?=html_entity_decode(get_field('film_type'));?></p>

					<p class="post-sub-title"><?=html_entity_decode(get_field('sub_title'));?></p>
					

					<p class="post-genre">Жанр: <span><?=html_entity_decode(get_field('genre'));?></span></p>
					<p class="post-time">Тривалість: <span><?=html_entity_decode(get_field('time'));?></span></p>
					<p class="post-operator">Режисер/оператор/монтаж: <span><?=html_entity_decode(get_field('operator'));?></span></p>
					<p class="post-art-director">Арт директор: <span><?=html_entity_decode(get_field('art_director'));?></span></p>
					<p class="post-compositor">Композитор/саунд-продюсер: <span><?=html_entity_decode(get_field('compositor'));?></span></p>
					<p class="post-sound-regiser">Звукорежисер: <span><?=html_entity_decode(get_field('sound_regiser'));?></span></p>
					<p class="post-scenario">Сценарій: <span><?=html_entity_decode(get_field('scenario'));?></span></p>
					<p class="post-role">Ролі виконали: <span><?=html_entity_decode(get_field('role'));?></span></p>

					
					<div class="post-content">
						<?=get_post_field('post_content')?>
					</div>

					<div class="social-bl">
						<div class="row">
							<p>Соціальні посилання</p>
							<div class="col-md-6">
								<a href="<?=get_post_field('link_inst')?>">inst</a>
								<a href="<?=get_post_field('link_fb')?>">fb</a>
								<a href="<?=get_post_field('link_vimeo')?>">Vim</a>
								<a href="<?=get_post_field('link_youtube')?>">YouT</a>
							</div>
							<div class="col-md-6">
								<?=html_entity_decode(get_field('other_link'));?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

	</div>
<?php
get_footer();
