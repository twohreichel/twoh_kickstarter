<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addStaticFile(
    'twoh_kickstarter',
    'Configuration/TypoScript',
    'TWOH Kickstarter Settings'
);
