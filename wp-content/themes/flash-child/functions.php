<?php
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function posts_ajax_request() {

	if(isset($_REQUEST) && isset($_REQUEST['offset']))
	{
		$numberposts = 10;

		$post_args = 
		[
		    'numberposts' => $numberposts,
		    'offset' => $_REQUEST['offset'],
		    'category' => 4,
		    'orderby' => 'post_date',
		    'order' => 'DESC',
		    'post_type' => 'post',
		    'post_status' => 'draft, publish, future, pending, private',
		    'suppress_filters' => true
		];

		$posts = wp_get_recent_posts( $post_args, ARRAY_A );

		$all_post_args = 
		[
		    'numberposts' => $numberposts*2,
		    'offset' => $_REQUEST['offset'],
		    'category' => 4,
		    'orderby' => 'post_date',
		    'order' => 'DESC',
		    'post_type' => 'post',
		    'post_status' => 'draft, publish, future, pending, private',
		    'suppress_filters' => true
		];

		$all_posts = count(wp_get_recent_posts( $all_post_args, ARRAY_A ));

		if(count($posts) > 0)
		{
			$posts_data = [];

			foreach ($posts as $key => $post) {
				$posts_data[$key]['thumbnail'] =  get_the_post_thumbnail_url($post["ID"]);
				$posts_data[$key]['title'] =  $post["post_title"];
				$posts_data[$key]['sub_title'] = html_entity_decode(get_field('sub_title', $post["ID"]));
				$posts_data[$key]['post_content'] = wp_trim_words($post["post_content"], 15);
				$posts_data[$key]['time'] = get_the_time('Y-m-d', $post["ID"]);
				$posts_data[$key]['permalink'] = get_permalink($post["ID"]);
			}

			$load_more = $all_posts > count($posts) ? true : false;
			$result[0] = $load_more;
			$result[1] = $posts_data;

			echo json_encode($result);
			wp_die();
		}
		else
		{
			echo '';
			wp_die();
		}

	}
	else
	{
		echo '';
		wp_die();
	}  
}

add_action( 'wp_ajax_posts_ajax_request', 'posts_ajax_request' );
?>