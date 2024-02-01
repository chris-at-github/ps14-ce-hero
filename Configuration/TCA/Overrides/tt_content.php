<?php

// ---------------------------------------------------------------------------------------------------------------------
// Icon Text Module von TT-Content
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:ce_hero/Resources/Private/Language/locallang_tca.xlf:tx_ce_hero.title',
		'ce_hero',
		'content-image'
	),
	'CType',
	'ce_hero'
);

$GLOBALS['TCA']['tt_content']['types']['ce_hero'] = [
	'showitem' => '
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;xoHeader,bodytext,image,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
			--palette--;;hidden,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
	',
];

$GLOBALS['TCA']['tt_content']['types']['ce_hero']['columnsOverrides']['bodytext']['config'] = [
	'enableRichtext' => true,
	'richtextConfiguration' => 'xoDefault',
];

$GLOBALS['TCA']['tt_content']['types']['ce_hero']['columnsOverrides']['image']['config'] = [
	'maxitems' => 1,
];

// ---------------------------------------------------------------------------------------------------------------------
// Hero Slider
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
//	array(
//		'LLL:EXT:xo/Resources/Private/Language/locallang_tca.xlf:tx_xo_hero_slider.title',
//		'xo_hero_slider',
//		'content-textpic'
//	),
//	'CType',
//	'xo_hero_slider'
//);
//
//$GLOBALS['TCA']['tt_content']['types']['xo_hero_slider'] = $GLOBALS['TCA']['tt_content']['types']['xo_slider'];

// ---------------------------------------------------------------------------------------------------------------------
// Hero Container
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
	(
	new \B13\Container\Tca\ContainerConfiguration(
		'ce_hero_container', // CType
		'LLL:EXT:ce_hero/Resources/Private/Language/locallang_tca.xlf:tx_ce_hero.title', // label
		'LLL:EXT:ce_hero/Resources/Private/Language/locallang_tca.xlf:tx_ce_hero.description', // description
		[
			[
				['name' => 'Main', 'colPos' => 701, 'colspan' => 1, 'allowed' => ['CType' => 'header, text']],
				['name' => 'Additional', 'colPos' => 702, 'colspan' => 1, 'allowed' => ['CType' => 'header, text']]
			],
		] // grid configuration
	)
	)
//		// set an optional icon configuration
//		->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
);

$GLOBALS['TCA']['tt_content']['types']['ce_hero_container'] = [
	'showitem' => '
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;xoHeader,image,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
			--palette--;;hidden,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
	',
];

$GLOBALS['TCA']['tt_content']['types']['ce_hero_container']['columnsOverrides']['image']['config'] = [
	'maxitems' => 1,
];