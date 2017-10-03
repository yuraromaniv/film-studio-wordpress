<?php
/**
 * Contro Positioning over google maps.
 * @package Maps
 * @author Flipper Code <hello@flippercode.com>
 */

$form->add_element( 'group', 'map_marker_cluster', array(
	'value' => __( 'Marker Cluster Settings', WPGMP_TEXT_DOMAIN ),
	'before' => '<div class="col-md-12">',
	'after' => '</div>',
));

$form->add_element( 'checkbox', 'map_cluster_setting[marker_cluster]', array(
	'lable' => __( 'Apply Marker Cluster', WPGMP_TEXT_DOMAIN ),
	'value' => 'true',
	'id' => 'wpgmp_marker_cluster',
	'current' => $data['map_cluster_setting']['marker_cluster'],
	'desc' => __( 'Please check to apply marker cluster.', WPGMP_TEXT_DOMAIN ),
	'class' => 'chkbox_class switch_onoff',
	'data' => array( 'target' => '.marker_cluster_setting' ),
));

$form->add_element( 'text', 'map_cluster_setting[grid]', array(
	'lable' => __( 'Grid', WPGMP_TEXT_DOMAIN ),
	'value' => $data['map_cluster_setting']['grid'],
	'default_value' => 15,
	'desc' => 'Enter grid here. Default is 15.',
	'class' => 'marker_cluster_setting form-control',
	'before' => '<div class="col-md-2">',
	'after' => '</div>',
	'show' => 'false',
));
$zoom_values = array();
for ( $i = 1; $i < 20; $i++ ) {
	$zoom_values[ $i ] = $i;
}
$form->add_element( 'select', 'map_cluster_setting[max_zoom]', array(
	'lable' => __( 'Max Zoom Level', WPGMP_TEXT_DOMAIN ),
	'current' => $data['map_cluster_setting']['max_zoom'],
	'desc' => __( 'Available options 1 to 19.', WPGMP_TEXT_DOMAIN ),
	'options' => $zoom_values,
	'class' => 'marker_cluster_setting form-control',
	'show' => 'false',
	'before' => '<div class="col-md-2">',
	'after' => '</div>',
));

$form->add_element( 'select', 'map_cluster_setting[location_zoom]', array(
	'lable' => __( 'Marker Zoom Level', WPGMP_TEXT_DOMAIN ),
	'current' => $data['map_cluster_setting']['location_zoom'],
	'desc' => __( 'Set zoom level on marker or location click. Available options 1 to 19.', WPGMP_TEXT_DOMAIN ),
	'options' => $zoom_values,
	'class' => 'marker_cluster_setting form-control',
	'show' => 'false',
	'before' => '<div class="col-md-5">',
	'after' => '</div>',
	'default_value' => '10',
));

$form->add_element( 'checkbox', 'map_cluster_setting[marker_cluster_style]', array(
	'lable' => __( 'Apply Style(s)', WPGMP_TEXT_DOMAIN ),
	'value' => 'true',
	'id' => 'marker_cluster_style',
	'current' => $data['map_cluster_setting']['marker_cluster_style'],
	'desc' => __( 'Apply styles to marker clusters?', WPGMP_TEXT_DOMAIN ),
	'class' => 'chkbox_class switch_onoff marker_cluster_setting',
	'show' => 'false',
	'data' => array( 'target' => '.marker_cluster_style' ),
));


$icon_set = array(
	'1.png' => "<img src='".WPGMP_IMAGES."/cluster/1.png' />",
	'2.png' => "<img src='".WPGMP_IMAGES."/cluster/2.png' />",
	'3.png' => "<img src='".WPGMP_IMAGES."/cluster/3.png' />",
	'4.png' => "<img src='".WPGMP_IMAGES."/cluster/4.png' />",
	'5.png' => "<img src='".WPGMP_IMAGES."/cluster/5.png' />",
	'6.png' => "<img src='".WPGMP_IMAGES."/cluster/6.png' />",
	'7.png' => "<img src='".WPGMP_IMAGES."/cluster/7.png' />",
	'8.png' => "<img src='".WPGMP_IMAGES."/cluster/8.png' />",
	'9.png' => "<img src='".WPGMP_IMAGES."/cluster/9.png' />",
	'10.png' => "<img src='".WPGMP_IMAGES."/cluster/10.png' />",
	);

$form->add_element( 'radio', 'map_cluster_setting[icon]', array(
	'lable' => __( 'Icon', WPGMP_TEXT_DOMAIN ),
	'radio-val-label' => $icon_set,
	'current' => $data['map_cluster_setting']['icon'],
	'class' => 'chkbox_class marker_cluster_style',
	'show' => 'false',
	'default_value' => '4.png',
));

$hover_icon_set = array(
	'1.png' => "<img src='".WPGMP_IMAGES."/cluster/1.png' />",
	'2.png' => "<img src='".WPGMP_IMAGES."/cluster/2.png' />",
	'3.png' => "<img src='".WPGMP_IMAGES."/cluster/3.png' />",
	'4.png' => "<img src='".WPGMP_IMAGES."/cluster/4.png' />",
	'5.png' => "<img src='".WPGMP_IMAGES."/cluster/5.png' />",
	'6.png' => "<img src='".WPGMP_IMAGES."/cluster/6.png' />",
	'7.png' => "<img src='".WPGMP_IMAGES."/cluster/7.png' />",
	'8.png' => "<img src='".WPGMP_IMAGES."/cluster/8.png' />",
	'9.png' => "<img src='".WPGMP_IMAGES."/cluster/9.png' />",
	'10.png' => "<img src='".WPGMP_IMAGES."/cluster/10.png' />",
	);

$form->add_element( 'radio', 'map_cluster_setting[hover_icon]', array(
	'lable' => __( 'Mouseover Icon', WPGMP_TEXT_DOMAIN ),
	'radio-val-label' => $hover_icon_set,
	'current' => $data['map_cluster_setting']['hover_icon'],
	'class' => 'chkbox_class marker_cluster_style',
	'show' => 'false',
	'default_value' => '4.png',
));
