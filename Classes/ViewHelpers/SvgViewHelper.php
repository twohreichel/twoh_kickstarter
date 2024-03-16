<?php

declare(strict_types=1);

namespace TWOH\TwohKickstarter\ViewHelpers;

use TYPO3\CMS\Core\Core\Environment;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Render SVG Icons from Path:
 *
 * Import Namespace:
 * xmlns:twoh="http://typo3.org/ns/TWOH/TwohKickstarter/ViewHelpers"
 * or
 * {namespace twoh="http://typo3.org/ns/TWOH/TwohKickstarter/ViewHelpers"}
 *
 * <twoh:svg svgPath="/twoh_kickstarter/Resources/Public/Meltdown/Images/Icons/{flexform.icon}.svg" />
 */
class SvgViewHelper extends AbstractViewHelper
{
    protected $escapeOutput = false;

    public function initializeArguments(): void
    {
        $this->registerArgument('svgPath', 'string', 'Path to your SVG file!', true);
    }

    /**
     * @return string
     */
    public function render(): string
    {
        if ($this->arguments['svgPath']){

            $svg = file_get_contents(
                Environment::getPublicPath() . getenv('ICON_PATH') . $this->arguments['svgPath']
            );

            if($svg){
                return $svg;
            }

            // @ToDo: if we need to manipulate the image later
//            if ($svg) {
//                return preg_replace("/(width|height|fill)=\".*?\"/","\${1}=\"\"", $svg );
//            }
        }
        return '';
    }
}
