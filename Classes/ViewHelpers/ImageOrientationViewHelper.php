<?php

declare(strict_types=1);

namespace TWOH\TwohKickstarter\ViewHelpers;

use TYPO3\CMS\Core\Core\Environment;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class ImageOrientationViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('imagePath', 'string', 'Path to your Image', true);
    }

    /**
     * @return string
     */
    public function render(): string
    {
        if ($this->arguments['imagePath']) {
            $imageInfo = getimagesize(
                urldecode(Environment::getPublicPath() . $this->arguments['imagePath'])
            );
            $width = $imageInfo[0];
            $height = $imageInfo[1];

            if ($width > $height) {
                return 'landscape';
            }

            if ($height > $width) {
                return 'portrait';
            }

            return 'square';
        }

        return '';
    }
}