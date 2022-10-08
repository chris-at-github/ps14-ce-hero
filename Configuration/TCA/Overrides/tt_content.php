<?php

// ---------------------------------------------------------------------------------------------------------------------
// Hero
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:ps14_hero/Resources/Private/Language/locallang_tca.xlf:hero.title',
		'ps14_hero',
		'content-image'
	),
	'CType',
	'ps14_hero'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	'*',
	'FILE:EXT:ps14_hero/Configuration/FlexForms/Hero.xml',
	'ps14_hero'
);

$GLOBALS['TCA']['tt_content']['types']['ps14_hero'] = [
	'showitem' => '
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;xoHeader, bodytext, image, pi_flexform,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
			--palette--;;xoPrint,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
			--palette--;;hidden,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
	',
];

$GLOBALS['TCA']['tt_content']['types']['ps14_hero']['columnsOverrides']['bodytext']['config'] = [
	'enableRichtext' => true,
	'richtextConfiguration' => 'xoDefault',
];

$GLOBALS['TCA']['tt_content']['types']['ps14_hero']['columnsOverrides']['image']['config'] = [
	'maxitems' => 1,
];

//$GLOBALS['TCA']['tt_content']['types']['ce_hero']['columnsOverrides']['tx_xo_file']['l10n_mode'] = 'exclude';
$GLOBALS['TCA']['tt_content']['types']['ps14_hero']['columnsOverrides']['pi_flexform']['l10n_mode'] = 'exclude';

// ---------------------------------------------------------------------------------------------------------------------
// Hero Slider
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:ps14_hero/Resources/Private/Language/locallang_tca.xlf:hero-slider.title',
		'ps14_hero_slider',
		'content-image'
	),
	'CType',
	'ps14_hero'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	'*',
	'FILE:EXT:ps14_hero/Configuration/FlexForms/HeroSlider.xml',
	'ps14_hero_slider'
);

$GLOBALS['TCA']['tt_content']['types']['ps14_hero_slider'] = [
	'showitem' => '
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;xoHeader, tx_xo_elements, pi_flexform,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
			--palette--;;hidden,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
	',
];

$GLOBALS['TCA']['tt_content']['types']['ps14_hero_slider']['columnsOverrides']['tx_xo_elements']['config']['foreign_label'] = 'uid';
$GLOBALS['TCA']['tt_content']['types']['ps14_hero_slider']['columnsOverrides']['tx_xo_elements']['config']['overrideChildTca'] = [
	'columns' => [
		'record_type' => [
			'config' => [
				'items' => [
					['LLL:EXT:ps14_hero/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.record_type.slider_image', 'ps14_hero_slider_image'],
				],
				'default' => 'ps14_hero_slider_image'
			]
		],

	],
	'types' => [
		'ps14_hero_slider_image' => [
			'showitem' => '
				l10n_diffsource, record_type, media,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
				--palette--;;visibility,
				--palette--;;access',
		],
	]
];