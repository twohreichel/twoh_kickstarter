<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addStaticFile(
    'twoh_kickstarter',
    'Configuration/TypoScript',
    'TWOH Atom Settings'
);
