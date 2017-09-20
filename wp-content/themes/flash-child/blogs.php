<?php
/*
 Template Name: For Blogs
 */
$numberposts = 10;
$post_ofset = 1;

$recent_args = 
[
    'numberposts' => $numberposts,
    'offset' => $post_ofset,
    'category' => 4,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'draft, publish, future, pending, private',
    'suppress_filters' => true
];

$recent_posts = wp_get_recent_posts( $recent_args, ARRAY_A );

$first_args = 
[
    'numberposts' => $post_ofset,
    'offset' => 0,
    'category' => 4,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'draft, publish, future, pending, private',
    'suppress_filters' => true
];

$first_posts = wp_get_recent_posts( $first_args, ARRAY_A );
$first_posts = $first_posts[0];

$count_args = 
[
    'numberposts' => $numberposts*2,
    'offset' => $post_ofset,
    'category' => 4,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'draft, publish, future, pending, private',
    'suppress_filters' => true
];

$count_posts = count(wp_get_recent_posts( $count_args, ARRAY_A ));


get_header(); 
?>


	<div class="container">
		
		<!-- sidebar -->
		<div class="col-md-3 col-md-push-9" id="sidebar">
			<p class="text-center">Останні новини</p>

			<div class="last-news-container">
			<?php foreach( $recent_posts as $recent ): ?>
				<div class="recent-post-container" style="background-image: url(<?=get_the_post_thumbnail_url($recent["ID"])?>);">
					<p class="post-title"><?=$recent["post_title"]?></p>
					<p class="post-sub-title"><?=html_entity_decode(get_field('sub_title', $recent["ID"]));?></p>
					<div class="post-content">
						<?=wp_trim_words($recent["post_content"], 15)?>
					</div>
					<div class="row">
						<div class="col-md-6 text-left date-cont"><?=get_the_time('Y-m-d', $recent["ID"]);?></div>
						<div class="col-md-6 text-right post-link-cont"><a href="<?=get_permalink($recent["ID"])?>">Детальніше</a></div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>

			<?php if($count_posts > count($recent_posts)): ?>
				<button class="btn btn-default" id="load-more">load-more</button>
			<?php endif; ?>
		</div>

		<!-- main post -->
		<div class="col-md-9 col-md-pull-3" style="background-image: url(<?=get_the_post_thumbnail_url($first_posts["ID"], 'large')?>);">
			<div class="single-post-container">
				<p class="post-title"><?=$first_posts["post_title"]?></p>
				<p class="post-sub-title"><?=html_entity_decode(get_field('sub_title', $first_posts["ID"]));?></p>
				<div class="post-content">
					<?=wp_trim_words($first_posts["post_content"])?>
				</div>
				<div class="row">
					<div class="col-md-6 text-left date-cont"><?=get_the_time('Y-m-d', $first_posts["ID"]);?></div>
					<div class="col-md-6 text-right post-link-cont"><a href="<?=get_permalink($first_posts["ID"])?>">Детальніше</a></div>
				</div>
			</div>
		</div>

	</div>
	
	<script>
	jQuery(document).ready(function($) {

	    $("#load-more").click(function(){
	        var offset = $('.container .recent-post-container').length + 1;
     		
		    // This does the ajax request
		    $.ajax({
		        url: '/wp-admin/admin-ajax.php',
		        data: {
		            'action':'posts_ajax_request',
		            'offset' : offset
		        },
		        success:function(data) {
		        	var dataArr = JSON.parse( data );

		        	if(dataArr[0] == false){
		        		$('#load-more').fadeOut();
		        	}
		        	var htmlContent = $('#sidebar .recent-post-container').first().clone();
		            
		            var posts = dataArr[1];
		            var OutHtml = '';

		            for (index = 0; index < posts.length; index++) {

					    htmlContent.attr('style', 'background-image: url('+posts[index]['thumbnail']+');');
					    htmlContent.find('.post-title').html(posts[index]['title']);
					    htmlContent.find('.post-sub-title').html(posts[index]['sub_title']);
					    htmlContent.find('.post-content').html(posts[index]['post_content']);
					    htmlContent.find('.date-cont').html(posts[index]['time']);
					    htmlContent.find('.post-link-cont a').attr( 'href', posts[index]['permalink']);

					    OutHtml = OutHtml + htmlContent.get(0).outerHTML;
					}
					$("#sidebar .last-news-container").append( OutHtml );
		        }
		    }); 
	    });
	});
</script>
<?php
get_footer();
