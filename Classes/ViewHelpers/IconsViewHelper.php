<?php

declare(strict_types=1);

namespace TWOH\TwohKickstarter\ViewHelpers;

use TWOH\TwohKickstarter\Utility\HtmlParserUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Return available icons names:
 *
 * Import Namespace:
 * xmlns:twoh="http://typo3.org/ns/TWOH/TwohKickstarter/ViewHelpers"
 * or
 * {namespace twoh="http://typo3.org/ns/TWOH/TwohKickstarter/ViewHelpers"}
 *
 * <twoh:icons flexLink={flexForm.link} />
 */
class IconsViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('flexLink', 'string', 'Link from flexform', true);
    }

    /**
     * @return string
     */
    public function render(): string
    {
        if ($this->arguments['flexLink']){
            return HtmlParserUtility::getClassByFlexformLink($this->arguments['flexLink']);
        }
        return '';
    }
}
