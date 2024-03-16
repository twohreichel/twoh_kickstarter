<?php

use B13\Container\Tca\ContainerConfiguration;
use B13\Container\Tca\Registry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') || die();

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'onecol', // CType
        '1 Spalten Element', // label
        '1 Spalten Element', // description
        [
            [
                ['name' => 'Hauptbereich', 'colPos' => 101]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'twocol', // CType
        '2 Spalten Element', // label
        '2 Spalten Element', // description
        [
            [
                ['name' => 'Linker Bereich', 'colPos' => 101],
                ['name' => 'Rechter Bereich', 'colPos' => 102]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'threecol', // CType
        '3 Spalten Element', // label
        '3 Spalten Element', // description
        [
            [
                ['name' => 'Linker Bereich', 'colPos' => 101],
                ['name' => 'Mittlerer Bereich', 'colPos' => 102],
                ['name' => 'Rechter Bereich', 'colPos' => 103]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'fourcol', // CType
        '4 Spalten Element', // label
        '4 Spalten Element', // description
        [
            [
                ['name' => 'Linker Bereich', 'colPos' => 101],
                ['name' => 'Mittlerer Bereich', 'colPos' => 102],
                ['name' => 'Mittlerer Bereich', 'colPos' => 103],
                ['name' => 'Rechter Bereich', 'colPos' => 104]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'foureightcol', // CType
        '4 zu 8 Spalten Element', // label
        '4 zu 8 Spalten Element', // description
        [
            [
                ['name' => 'Linker Bereich', 'colPos' => 101],
                ['name' => 'Rechter Bereich', 'colPos' => 102]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'eightfourcol', // CType
        '8 zu 4 Spalten Element', // label
        '8 zu 4 Spalten Element', // description
        [
            [
                ['name' => 'Linker Bereich', 'colPos' => 101],
                ['name' => 'Rechter Bereich', 'colPos' => 102]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'threeninecol', // CType
        '3 zu 9 Spalten Element', // label
        '3 zu 9 Spalten Element', // description
        [
            [
                ['name' => 'Linker Bereich', 'colPos' => 101],
                ['name' => 'Rechter Bereich', 'colPos' => 102]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'ninethreecol', // CType
        '9 zu 3 Spalten Element', // label
        '9 zu 3 Spalten Element', // description
        [
            [
                ['name' => 'Linker Bereich', 'colPos' => 101],
                ['name' => 'Rechter Bereich', 'colPos' => 102]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'accordion', // CType
        'Accordion', // label
        'Accordion Container', // description
        [
            [
                [
                    'name' => 'Accordion Elemente',
                    'colPos' => 101
                ]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'homeslider', // CType
        'Homeslider', // label
        'Homeslider Container', // description
        [
            [
                [
                    'name' => 'Homeslider Elemente',
                    'colPos' => 101,
                    'allowed' => [
                        'CType' => 'twoh_sliderimageelement, shortcut'
                    ]
                ]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'partnerslider', // CType
        'Partnerslider', // label
        'Partnerslider Container', // description
        [
            [
                [
                    'name' => 'Partnerslider Elemente',
                    'colPos' => 101,
                    'allowed' => [
                        'CType' => 'twoh_sliderimageelement, shortcut'
                    ]
                ]
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

GeneralUtility::makeInstance(Registry::class)->configureContainer(
    (
    new ContainerConfiguration(
        'countercontainer', // CType
        'Counter Container', // label
        'Counter Elements Container', // description
        [
            [
                [
                    'name' => 'Linker Bereich',
                    'colPos' => 101,
                    'allowed' => [
                        'CType' => 'twoh_counterelement, shortcut'
                    ]
                ],
                [
                    'name' => 'Mittlerer Bereich',
                    'colPos' => 102,
                    'allowed' => [
                        'CType' => 'twoh_counterelement, shortcut'
                    ]
                ],
                [
                    'name' => 'Rechter Bereich',
                    'colPos' => 103,
                    'allowed' => [
                        'CType' => 'twoh_counterelement, shortcut'
                    ]
                ],
            ]
        ] // grid configuration
    )
    )
        // set an optional icon configuration
        ->setIcon('EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg')
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'eightfourcol',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'foureightcol',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'fourcol',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'onecol',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'twocol',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'threecol',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'threeninecol',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'ninethreecol',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'accordion',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'countercontainer',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'homeslider',
    'after:header'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pi_flexform;LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:gridelement.container.settings.sheetGeneral',
    'partnerslider',
    'after:header'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/Col.xml',
    'onecol'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/Col.xml',
    'twocol'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/Col.xml',
    'threecol'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/Col.xml',
    'fourcol'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/Col.xml',
    'foureightcol'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/Col.xml',
    'eightfourcol'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/Col.xml',
    'ninethreecol'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/Col.xml',
    'threeninecol'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/Accordion.xml',
    'accordion'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/CounterContainer.xml',
    'countercontainer'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/HomeSlider.xml',
    'homeslider'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:twoh_kickstarter/Configuration/FlexForms/Gridelements/PartnerSlider.xml',
    'partnerslider'
);