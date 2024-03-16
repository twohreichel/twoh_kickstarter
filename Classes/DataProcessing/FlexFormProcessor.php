<?php

declare(strict_types=1);

namespace TWOH\TwohKickstarter\DataProcessing;

use TWOH\TwohKickstarter\Utility\HtmlParserUtility;
use TYPO3\CMS\Core\Domain\Repository\PageRepository;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Service\FlexFormService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManager;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Configuration\Exception\InvalidConfigurationTypeException;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class FlexFormProcessor implements DataProcessorInterface
{
    /**
     * @var FileRepository
     */
    protected FileRepository $fileRepository;

    /**
     * @param ContentObjectRenderer $cObj
     * @param array $contentObjectConfiguration
     * @param array $processorConfiguration
     * @param array $processedData
     * @return array
     * @throws InvalidConfigurationTypeException
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ): array {
        $this->fileRepository = GeneralUtility::makeInstance(FileRepository::class);

        if (isset($processorConfiguration['if.']) && !$cObj->checkIf($processorConfiguration['if.'])) {
            return $processedData;
        }

        // set targetvariable, default "flexform"
        $targetVariableName = $cObj->stdWrapValue('as', $processorConfiguration, 'flexform');

        // set fieldname, default "pi_flexform"
        $fieldName = $cObj->stdWrapValue('fieldName', $processorConfiguration, 'pi_flexform');

        // parse flexform
        $flexformService = GeneralUtility::makeInstance(FlexFormService::class);
        $processedData[$targetVariableName] = $flexformService->convertFlexFormContentToArray($cObj->data[$fieldName]);

        $processedData['atomSettings'] = $this->getTsSetup();

        $processedData['page'] = $this->getSiteFromPageIdentifier(
        // @extensionScannerIgnoreLine
            $GLOBALS['TSFE']->id
        );

        // @extensionScannerIgnoreLine
        if ($GLOBALS['TSFE']->id !== 1) {
            $processedData['page']['backend_layout'] = 'subpage';
        } else {
            $processedData['page']['backend_layout'] = 'homepage';
        }

//        if (isset($processedData[$targetVariableName]['bodytext'])) {
//            $processedData[$targetVariableName]['bodytext'] = $this->setLinkClassesByType(
//                $processedData[$targetVariableName]['bodytext']
//            );
//        }

        return $processedData;
    }

    /**
     * @return mixed
     * @throws InvalidConfigurationTypeException
     */
    public function getTsSetup(): mixed
    {
        $configurationManager = GeneralUtility::makeInstance(ConfigurationManager::class);
        $settings = $configurationManager->getConfiguration(
            ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT,
            'twoh_atom'
        );
        return $settings['plugin.']['tx_twohatom.']['settings.'];
    }

    /**
     * @param string $bodytext
     * @return string
     */
    protected function setLinkClassesByType(
        string $bodytext
    ): string
    {
        return GeneralUtility::makeInstance(
            HtmlParserUtility::class
        )->addClassToLinks($bodytext);
    }

    /**
     * @param int $pageIdentifier
     * @return array
     */
    public function getSiteFromPageIdentifier(
        int $pageIdentifier = 1
    ): array
    {
        return GeneralUtility::makeInstance(PageRepository::class)->getPage($pageIdentifier);
    }
}