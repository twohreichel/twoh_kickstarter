<?php

$GLOBALS['TCA']['sys_file_reference']['columns']['crop'] = [
    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
    'config' => [
        'type' => 'imageManipulation',
        'cropVariants' => [
            'default' => [
                'disabled' => true,
            ],
            'desktop' => [
                'title' => 'Desktop',
                'allowedAspectRatios' => [
                    'NaN' => [
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                        'value' => 0.0
                    ],
                    '16:9' => [
                        'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.16_9',
                        'value' => 16 / 9
                    ],
                    '21:9' => [
                        'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.21_9',
                        'value' => 21 / 9
                    ],
                    '4:3' => [
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                        'value' => 4 / 3
                    ],
                    '1:1' => [
                        'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.1_1',
                        'value' => 1
                    ],
                ],
            ],
            'tablet' => [
                'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imageManipulation.tablet',
                'allowedAspectRatios' => [
                    'NaN' => [
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                        'value' => 0.0
                    ],
                    '16:9' => [
                        'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.16_9',
                        'value' => 16 / 9
                    ],
                    '21:9' => [
                        'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.21_9',
                        'value' => 21 / 9
                    ],
                    '4:3' => [
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                        'value' => 4 / 3
                    ],
                    '1:1' => [
                        'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.1_1',
                        'value' => 1
                    ],
                ],
            ],
            'mobile' => [
                'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imageManipulation.mobile',
                'allowedAspectRatios' => [
                    'NaN' => [
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                        'value' => 0.0
                    ],
                    '16:9' => [
                        'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.16_9',
                        'value' => 16 / 9
                    ],
                    '21:9' => [
                        'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.21_9',
                        'value' => 21 / 9
                    ],
                    '4:3' => [
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                        'value' => 4 / 3
                    ],
                    '1:1' => [
                        'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.1_1',
                        'value' => 1
                    ],
                ],
            ],
        ]
    ]
];

$GLOBALS['TCA']['tt_content']['types']['twoh_sliderimageelement']['columnsOverrides']['media']['config']['overrideChildTca']['columns']['crop']['config'] = [
    'cropVariants' => [
        'default' => [
            'disabled' => true,
        ],
        'desktop' => [
            'disabled' => true,
        ],
        'tablet' => [
            'disabled' => true,
        ],
        'mobile' => [
            'disabled' => true,
        ],
        'slider-home' => [
            'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.slider_home',
            'allowedAspectRatios' => [
                'default' => [
                    'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.slider_home',
                    'value' => 1980 / 1348
                ],
            ],
        ],
        'slider-subpage' => [
            'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.slider_subpage',
            'allowedAspectRatios' => [
                'default' => [
                    'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/locallang.xlf:imwizard.ratio.slider_subpage',
                    'value' => 1348 / 480
                ],
            ],
        ],
    ],
];
