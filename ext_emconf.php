<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Ps14 Hero',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Christian Pschorr',
	'author_email' => 'pschorr.christian@gmail.com',
	'state' => 'beta',
	'clearCacheOnLoad' => 0,
	'version' => '1.0.3',
	'constraints' => [
		'depends' => [
			'typo3' => '10.4.0-10.4.99',
			'xo' => '1.0.0-1.99.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
	'autoload' => [
		'psr-4' => [
			'Ps14\\CeHero\\' => 'Classes',
		],
	],
];
