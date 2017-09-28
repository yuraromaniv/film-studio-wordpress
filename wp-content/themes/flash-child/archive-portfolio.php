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

<div class="portfolio-bg">
	<div class="container ">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div style="padding-bottom: 50px;" class="col-md-6">
					<div class="row">
						<div class="col-md-6 project-screen">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="col-md-6">
							<p class="post-title project-title"><?=the_title()?></p>
							<p class="post-year project-year">(<?=html_entity_decode(get_field('year'));?>)</p>
							<p class="post-film-type project-film-type"><?=html_entity_decode(get_field('film_type'));?></p>

							<p class="post-sub-title project-sub-title"><?=html_entity_decode(get_field('sub_title'));?></p>
					
							<p class="post-genre project-genre">Жанр: <span><?=html_entity_decode(get_field('genre'));?></span></p>
							<p class="post-time project-time">Тривалість: <span><?=html_entity_decode(get_field('time'));?></span></p>
							<p class="post-operator project-operator">Режисер: <span><?=html_entity_decode(get_field('operator'));?></span></p>
							<p class="post-art-director project-director">Арт директор: <span><?=html_entity_decode(get_field('art_director'));?></span></p>
							<p class="post-sound-regiser project-music">Музика: <span><?=html_entity_decode(get_field('sound_regiser'));?></span></p>
							
							<div class="link-container">
							<?php if( get_field('film_status') == 0 ): ?>
								<a class="tizer-link" href="<?=get_field('tizer')?>">Тізер &#9658;</a>
							<?php elseif ( get_field('film_status') == 1 ): ?>
								<a class="triler-link" href="<?=get_field('treiler')?>">Трейлер &#9658;</a>
								<a class="onlain-link" href="<?=get_field('onlain')?>">Дивитись online &#9658;</a>
							<?php endif; ?>
							</div>

							<a class="detail-link project-detail" href="<?=esc_url( get_permalink())?>">Детальніше</a>
						</div>
					</div>										
				</div>
			
			<?php endwhile; ?>

			<?php the_posts_pagination(); ?>

		<?php endif; ?>
	</div>
</div>
<?php
get_footer();
