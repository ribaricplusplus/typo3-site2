<?php

namespace CrossLink\TestPackage\DataProcessing;

use CrossLink\TestPackage\Domain\Repository\SomethingRepository;

class CustomDataProcessor implements \TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface
{

    /**
     * @inheritDoc
     */
    public function process(\TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
    {
        $processedData['testData'] = array(
            'peanut' => 'butter'
        );

        return $processedData;
    }
}