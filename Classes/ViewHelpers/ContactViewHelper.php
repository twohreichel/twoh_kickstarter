<?php

declare(strict_types=1);

namespace TWOH\TwohKickstarter\ViewHelpers;

use TWOH\TwohKickstarter\Domain\Repository\ContactRepository;
use TWOH\TwohKickstarter\Utility\HtmlParserUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Return available icons names:
 *
 * Import Namespace:
 * xmlns:twoh="http://typo3.org/ns/TWOH/TwohKickstarter/ViewHelpers"
 * or
 * {namespace twoh="http://typo3.org/ns/TWOH/TwohKickstarter/ViewHelpers"}
 *
 * <twoh:contact uid={data.contact} />
 */
class ContactViewHelper extends AbstractViewHelper
{
    /**
     * @var ContactRepository
     */
    protected ContactRepository $contactRepository;

    /**
     * @param ContactRepository $contactRepository
     */
    public function __construct(
        ContactRepository $contactRepository
    )
    {
        $this->contactRepository = $contactRepository;
    }
    public function initializeArguments(): void
    {
        $this->registerArgument('uid', 'int', 'UID of Contact', true);
    }

    /**
     * @return object|string|DomainObjectInterface|null
     */
    public function render()
    {
        if ($this->arguments['uid']){
            return $this->contactRepository->findByUid((int) $this->arguments['uid']);
        }
        return '';
    }
}
