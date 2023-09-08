<?php

/**
 * Teletype customizer options
 * @package Teletype
 */

function teletype_customizer_library_options()
{

	// Multicheck Sortable
	$section = 'homesorter';

	$sections[] = array(
		'id' => $section,
		'title' => esc_html__('Frontpage Sorting', 'teletype'),
		'priority' => '135',
		'description' => esc_html__('The visibility and order for sections of the Front Page. Please note that this works only if you have assigned a static page for front page displays.', 'teletype')
	);

	/* Add Control for the settings. */
	$choices = array();
	$sorters = teletype_sorter();
	foreach ($sorters as $key => $val) {
		$choices[$key] = $val['label'];
	}

	$options['homesorter'] = array(
		'id' 	=> 'homesorter',
		//'label'	=> esc_html__( 'Frontpage Sections', 'teletype' ),
		'section' 	=> $section,
		'type'	=> 'ckecksorter',
		'choices'	=> $choices,
		'default'	 => teletype_sorter_default()
	);


	// Home Sections Panel
	$panel = 'home-sections';

	$panels[] = array(
		'id' => $panel,
		'title' => esc_html__('Frontpage Sections', 'teletype'),
		'description' => esc_html__('As the Front page should be selected static page. ', 'teletype'),
		'priority' => '130'
	);

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options($options);

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action('init', 'teletype_customizer_library_options');
