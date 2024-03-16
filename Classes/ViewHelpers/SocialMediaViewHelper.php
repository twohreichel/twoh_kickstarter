<?php

declare(strict_types=1);

namespace TWOH\TwohKickstarter\ViewHelpers;

use TWOH\TwohKickstarter\Domain\Repository\SocialRepository;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Render Social Media Icons
 *
 * Import Namespace:
 * xmlns:twoh="http://typo3.org/ns/TWOH/TwohKickstarter/ViewHelpers"
 * or
 * {namespace twoh="http://typo3.org/ns/TWOH/TwohKickstarter/ViewHelpers"}
 *
 * <twoh:socialMedia />
 *
 * {twoh:socialMedia}
 */
class SocialMediaViewHelper extends AbstractViewHelper
{
    /**
     * @var SocialRepository
     */
    protected SocialRepository $socialRepository;

    /**
     * @param SocialRepository $socialRepository
     */
    public function __construct(
        SocialRepository $socialRepository
    )
    {
        $this->socialRepository = $socialRepository;
    }

    public function render()
    {
        return $this->socialRepository->findAll();
    }
}
