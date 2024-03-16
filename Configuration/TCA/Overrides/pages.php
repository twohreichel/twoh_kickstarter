<?php

use TWOH\TwohKickstarter\UserFunctions\AtomElementRenderer;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Add some fields to fe_users table to show TCA fields definitions
ExtensionManagementUtility::addTCAcolumns('pages',
    [
        'gradient' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:pages.gradient',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => AtomElementRenderer::class . '->renderGradient',
                'items' => [],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'do_not_link' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:pages.do_not_link',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:pages.do_not_link.link',
                    ],
                ],
            ],
        ],
    ]
);

ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'gradient, do_not_link',
    '',
    'after:subtitle'
);