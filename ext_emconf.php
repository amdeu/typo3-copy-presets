<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Copy Presets',
	'description' => 'Quickly copy content from a list of presets',
	'category' => 'be',
	'author' => 'Amadeus Kiener',
	'state' => 'stable',
	'version' => '1.1.0',
	'constraints' => [
		'depends' => [
			'typo3' => '13.4.26-14.3.99',
		],
		'conflicts' => [],
		'suggests' => [
			'container' => '',
		],
	],
];