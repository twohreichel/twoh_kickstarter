<?php

declare(strict_types=1);

namespace TWOH\TwohKickstarter\ViewHelpers;

use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class ImageRelationViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('table', 'string', 'Record Table', true);
        $this->registerArgument('fieldName', 'string', 'Record Fieldname');
        $this->registerArgument('uid', 'int', 'Record UID');
    }

    private FileRepository $fileRepository;

    public function __construct(FileRepository $fileRepository) {
        $this->fileRepository = $fileRepository;
    }

    /**
     * @return array
     */
    public function render(): array
    {
        $recordUid = $this->arguments['uid'];
        $table = $this->arguments['table'] ?: 'tt_content';
        $fieldName = $this->arguments['fieldName'] ?: 'file';

        return $this->fileRepository->findByRelation(
            $table,
            $fieldName,
            $recordUid
        );
    }
}