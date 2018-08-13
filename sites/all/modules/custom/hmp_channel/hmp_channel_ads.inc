<?php

/**
 ** Get Roadblock Token if applicable
 ** Revert to ROS if no roadblock present
 **/
function hmp_channel_ads() {
	$token = hmp_channel_ads_roadblock();
	if(!$token)
		$token = hmp_channel_ads_ROS();
	return $token;
}

/**
 ** Get ROS Token
 **/
function hmp_channel_ads_ROS() {
	return $GLOBALS['channel']['channel_shortname'] . '_ros';
}


/**
 ** Get Roadblock Token
 **/
function hmp_channel_ads_roadblock() {
	$token = null;
	//First check URLs
	$url = \Drupal::request()->getRequestUri();
	$query = \Drupal::database()->select('node_field_data','n');
	$query->join('node__field_include_url','i','i.entity_id = n.nid');
	$query->join('node__field_id','id','id.entity_id = n.nid');
	$query->join('node__field_enabled','e','e.entity_id = n.nid');
	$query->fields('id',['field_id_value']);
	$query->condition('i.field_include_url_value',$url,'=')
		->condition('e.field_enabled_value',1,'=')
		->condition('n.type','road_block','=');
	$token = $query->execute()->fetchField();

	if($token)
		return $token;

	//Now check for Resource Center
	$tid = $GLOBALS['channel']['resource_center_nid'];
	$query = \Drupal::database()->select('node_field_data','n');
	$query->join('node__field_resource_center','i','i.entity_id = n.nid');
	$query->join('node__field_id','id','id.entity_id = n.nid');
	$query->join('node__field_enabled','e','e.entity_id = n.nid');
	$query->fields('id',['field_id_value']);
	$query->condition('i.field_resource_center_target_id',$tid,'=')
		->condition('e.field_enabled_value',1,'=')
		->condition('n.type','road_block','=');
	$token = $query->execute()->fetchField();

	return $token;
}


