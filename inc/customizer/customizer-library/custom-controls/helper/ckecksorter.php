<?php

/**
 * List of available sorter
 */
function teletype_sorter()
{

	$sorters = array();

	$sorters['sub-banner'] = array(
		'id'       => 'sub-banner',
		'label'    => __('Sub Banner', 'teletype'),
		// 'callback' => '',
	);

	$sorters['banner'] = array(
		'id'       => 'banner',
		'label'    => __('Banner', 'teletype'),
		// 'callback' => '',
	);

	$sorters['mainnews'] = array(
		'id'       => 'mainnews',
		'label'    => __('News', 'teletype'),
		// 'callback' => '',
	);

	$sorters['feature-news'] = array(
		'id'       => 'feature-news',
		'label'    => __('Feature News', 'teletype'),
		// 'callback' => '',
	);

	$sorters['prabhas'] = array(
		'id'       => 'prabhas',
		'label'    => __('Prabhas News', 'teletype'),
		// 'callback' => '',
	);

	$sorters['international'] = array(
		'id'       => 'international',
		'label'    => __('International', 'teletype'),
		// 'callback' => '',
	);

	$sorters['health'] = array(
		'id'       => 'health',
		'label'    => __('Health', 'teletype'),
		// 'callback' => '',
	);

	$sorters['sports'] = array(
		'id'       => 'sports',
		'label'    => __('Sports', 'teletype'),
		// 'callback' => '',
	);

	$sorters['entertainment'] = array(
		'id'       => 'entertainment',
		'label'    => __('Entertainment', 'teletype'),
		// 'callback' => '',
	);

	$sorters['economy'] = array(
		'id'       => 'economy',
		'label'    => __('Economy', 'teletype'),
		// 'callback' => '',
	);

	$sorters['different-world'] = array(
		'id'       => 'different-world',
		'label'    => __('Different World', 'teletype'),
		// 'callback' => '',
	);
	
	$sorters['interview'] = array(
		'id'       => 'interview',
		'label'    => __('Interview', 'teletype'),
		// 'callback' => '',
	);

	$sorters['video'] = array(
		'id'       => 'video',
		'label'    => __('Video', 'teletype'),
		// 'callback' => '',
	);



	return apply_filters('teletype_sorter', $sorters);
}


/**
 * Utility: Default sorters to use in customizer default value
 * @return string
 */
function teletype_sorter_default()
{
	$default = array();
	$sorters = teletype_sorter();
	foreach ($sorters as $sorter) {
		$default[] = $sorter['id'] . ':0'; /* not activate for all as default. */
	}
	return apply_filters('teletype_sorter_default', implode(',', $default));
}
