<?php

namespace Ps14\CeHero\DataProcessing;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class ModuleProcessor extends \Ps\Xo\DataProcessing\ModuleProcessor implements DataProcessorInterface {

	/**
	 * @var string[]
	 */
	protected $importCssFiles = [
		'/assets/css/modules/hero.css'
	];

	/**
	 * @param ContentObjectRenderer $contentObject The data of the content element or page
	 * @param array $contentObjectConfiguration The configuration of Content Object
	 * @param array $processorConfiguration The configuration of this processor
	 * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
	 * @return array the processed data as key/value store
	 */
	public function process(ContentObjectRenderer $contentObject, array $contentObjectConfiguration, array $processorConfiguration, array $processedData) {

		// Einfaches Hero Modul
		if($processedData['data']['CType'] === 'ce_hero') {

			// 1. Identifier generieren
			$identifier = md5($processedData['data']['uid']);

			// 2. als Klasse auf das Element setzen
			$processedData['data']['frame_classes'] .= ' hero-' . $identifier;

			// 3. ans Template uebergeben
			$processedData['data']['identifier'] = $identifier;
		}

		return $processedData;
	}
}