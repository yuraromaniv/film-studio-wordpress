<?php
/*
 Template Name: For Main Page
 */

get_header(); ?>

	<?php
	/**
	 * flash_before_body_content hook
	 */
	do_action( 'flash_before_body_content' ); ?>
<div id="fullpage">	
	<section class="section" id="screen-1" data-anchor="main">
		<div class="black-mask">
			<div class="container">
				<div class="intro-block text-center">
					<img class="intro-img" src="<?=get_field('logo_screen_1')?>" alt="">
					<p class="intro-text"><?=html_entity_decode(get_field('text_screen_1'));?></p>
				</div>
			</div>
			<div class="fullscreen-bg">
			    <video loop muted data-autoplay class="fullscreen-bg__video">
			        <source src="<?=get_field('video_screen_1')?>" type="video/mp4">
			    </video>
			</div>
			<a href="#"><img class="intro-arrow pulse" src="/wp-content/themes/flash-child/img/arrow.png" alt="arrow"></a>
		</div>
	</section>

	<section class="section" id="screen-2" data-anchor="premiere">

			<div id="screen-2-carousel" class="carousel slide" data-ride="carousel">    

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">

					<!-- slide-1 -->
					<div id="screen-2-slide-1" class="item active">

						<div class="row full-height" style="margin-right:0 !important;margin-left: 0 !important; background: url(<?=get_field('screen_2_slaid_1_img_back')?>);">
							<div class="col-md-5 container">
							<div class="slide-1-content">
								<img class="slide-1-img" src="<?=get_field('screen_2_slaid_1_img')?>">
						
								<div class="slide-1-text"><?=html_entity_decode(get_field('screen_2_slaid_1_text'));?></div>
								</div>
							</div>
						</div>					
					</div>
					
					<!-- slide-2 -->
					<div id="screen-2-slide-2" class="item">
						<div style="margin-right:0 !important;margin-left: 0 !important;" class="row embed-container">
							<div class="col-lg-12 text-center">
							<?=html_entity_decode(get_field('screen_2_slaid_2_video_link'));?>
							</div>
						</div>
					</div>
					
					<!-- slide-3 -->
					<div id="screen-2-slide-3" class="item">
						<div style="margin-right:0 !important;margin-left: 0 !important;" class="row">
							<?php echo do_shortcode(get_field('screen_2_slaid_3_gallery')); ?>	
						</div>
					</div>

			    </div>


			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#screen-2-carousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#screen-2-carousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			</div>
	</section>

	<section class="section" id="screen-3" data-anchor="last-project">
		<div style="margin-right:0 !important;margin-left: 0 !important;" class="row">
			<div class="film-1-conteiner " style="background-image: url(<?=get_field('screen_3_slaid_1_img_back')?>);">
			<div class="container">
				<div class="col-md-6 col-md-push-6 text-center ">
					<img class="slide-1-img" src="<?=get_field('screen_3_slaid_1_img')?>" alt="">
					<div class="new-film-text"><?=html_entity_decode(get_field('screen_3_slaid_1_text'));?></div>
					<a href="<?=get_field('screen_3_slaid_1_link')?>" class="btn btn-default last-film-btn1">Детальніше</a>
				</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section" id="screen-4" data-anchor="last-project-second">
		<div class="row">
			<div class="film-2-conteiner" style="background-image: url(<?=get_field('screen_3_slaid_2_img_back')?>);">
				<div class="col-md-6 col-md-push-3 text-center">
					<img class="slide-1-img" src="<?=get_field('screen_3_slaid_2_img')?>" alt="">
					<div class="new-film-text"><?=html_entity_decode(get_field('screen_3_slaid_2_text'));?></div>
					<a href="<?=get_field('screen_3_slaid_2_link')?>" class="btn btn-default last-film-btn2">Детальніше</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section" id="screen-5" data-anchor="media">
		<div class="row">
			<div class="mar-top">
				<div class="nav nav-tabs text-center">
					<span class="active"><a data-toggle="tab" href="#menu1">Саундтреки</a></span>
					<span><a data-toggle="tab" href="#menu2">Промо-Ролики</a></span>
				</div>

				<div class="tab-content">

					<!-- start tab 1 -->
					<div id="menu1" class="tab-pane fade in active">
						<!-- start carousel tab 1 -->
						<div id="screen-4-carousel-1" class="carousel slide " data-ride="carousel">
			    
						    <!-- Wrapper for slides -->
						    <div class="carousel-inner">
								<?php for ($i=1; $i <=3 ; $i++): ?>
									<div class="item container audio-mar <?= $i == 1 ? 'active' : '' ?>">
										<?php for ($j=1; $j <=3 ; $j++): ?>
											<div class="col-md-4">
											<div class="audio-block" style="background: url(<?=get_field('audio_slide_'.$i.'_audio_'.$j.'_img', '58')?>);">
												<audio controls>
												  	<source src="<?=get_field('audio_slide_'.$i.'_audio_'.$j.'_file', '58')?>" type="audio/mpeg">
												</audio>
												<div>
													<?=html_entity_decode(get_field('audio_slide_'.$i.'_audio_'.$j.'_text', '58'))?>
													
												</div>
											</div>
											</div>
										<?php endfor; ?>	
									</div>
								<?php endfor; ?>
						    </div>


						    <!-- Left and right controls -->
						    <a class="left carousel-control" href="#screen-4-carousel-1" data-slide="prev">
						      <span class="glyphicon glyphicon-chevron-left"></span>
						      <span class="sr-only">Previous</span>
						    </a>
						    <a class="right carousel-control" href="#screen-4-carousel-1" data-slide="next">
						      <span class="glyphicon glyphicon-chevron-right"></span>
						      <span class="sr-only">Next</span>
						    </a>

						</div>
						<!-- end carousel tab 1 -->
					</div>
					<!-- end tab 1 -->
					
					<!-- start tab 2 -->
					<div id="menu2" class="tab-pane fade">
					  	

					  	<!-- start carousel tab 2 -->
						<div id="screen-4-carousel-2" class="carousel slide" data-ride="carousel">
			    
						    <!-- Wrapper for slides -->
						    <div class="carousel-inner">
								<?php for ($i=1; $i <=3 ; $i++): ?>
									<div class="item <?= $i == 1 ? 'active' : '' ?>">
										<?php echo do_shortcode(get_field('screen_3_slaid_'.$i.'_gall_code')); ?>
									</div>
								<?php endfor; ?>
						    </div>


						    <!-- Left and right controls -->
						    <a class="left carousel-control" href="#screen-4-carousel-2" data-slide="prev">
						      <span class="glyphicon glyphicon-chevron-left"></span>
						      <span class="sr-only">Previous</span>
						    </a>
						    <a class="right carousel-control" href="#screen-4-carousel-2" data-slide="next">
						      <span class="glyphicon glyphicon-chevron-right"></span>
						      <span class="sr-only">Next</span>
						    </a>

						</div>
						<!-- end carousel tab 2 -->	
					</div>
					<!-- end tab 2 -->

				</div>
			</div>
		</div>
	</section>

	<section class="section" id="screen-6" data-anchor="social">
		<div class="container">
			<div class="row">
				<div class="footer-mar text-center">
				<div class="col-md-4">
					<div class="row">
						<h3><?=get_field('screen_5_col_1_soc_titile')?></h3>
						<a href="<?=get_field('screen_5_col_1_soc_1')?>"><img class="social-img" src="/wp-content/themes/flash-child/img/insta.png" alt="Instagram"></a>
						<a href="<?=get_field('screen_5_col_1_soc_2')?>"><img class="social-img" src="/wp-content/themes/flash-child/img/fb.png" alt="Facebook"></a>
						<a href="<?=get_field('screen_5_col_1_soc_3')?>"><img class="social-img" src="/wp-content/themes/flash-child/img/vimeo.png" alt="Vimeo"></a>
						<a href="<?=get_field('screen_5_col_1_soc_4')?>"><img class="social-img" src="/wp-content/themes/flash-child/img/yt.png" alt="You Tube"></a>
					</div>
					<div class="row">
						<h3><?=get_field('screen_5_col_1_form_title')?></h3>
						<? echo do_shortcode(html_entity_decode(get_field('screen_5_col_1_form_code')));
						?> 
					</div>
				</div>
				<div class="col-md-4">
					<h3><?=get_field('screen_5_col_2_title')?></h3>
					<? echo do_shortcode(html_entity_decode(get_field('screen_5_col_2_gal')));
					?> 
				</div>
				<div class="col-md-4">
					<h3><?=get_field('screen_5_col_3_title')?></h3>
					<? echo do_shortcode(html_entity_decode(get_field('screen_5_col_3_gal')));
					?> 
				</div>
				</div>
			</div>
		</div>
	</section>

</div>



	<?php
	/**
	 * flash_after_body_content hook
	 */
	do_action( 'flash_after_body_content' ); ?>

<?php
get_footer();
