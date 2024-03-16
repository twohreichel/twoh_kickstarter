<?php

declare(strict_types=1);

namespace TWOH\TwohKickstarter\DataProcessing;

use TYPO3\CMS\Core\Service\FlexFormService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class AccordionFlexFormProcessor implements DataProcessorInterface
{
    /**
     * @param ContentObjectRenderer $cObj
     * @param array $contentObjectConfiguration
     * @param array $processorConfiguration
     * @param array $processedData
     * @return array
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ): array {
        if (isset($processorConfiguration['if.']) && !$cObj->checkIf($processorConfiguration['if.'])) {
            return $processedData;
        }

        // set targetvariable, default "flexform"
        $targetVariableName = $cObj->stdWrapValue('as', $processorConfiguration, 'flexform');

        // set fieldname, default "pi_flexform"
        $fieldName = $cObj->stdWrapValue('fieldName', $processorConfiguration, 'pi_flexform');

        $flexformService = GeneralUtility::makeInstance(FlexFormService::class);

        if ($processedData['children_101'] && count($processedData['children_101']) > 0) {
            foreach ($processedData['children_101'] as $key => $children) {
                $processedData['children_101'][$key][$targetVariableName] =
                    $flexformService->convertFlexFormContentToArray($children[$fieldName]);
            }
        }

        return $processedData;
    }
}