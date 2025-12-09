<?php

$EM_CONF['twoh_kickstarter'] = [
    'title' => 'TWOH Kickstarter',
    'description' => 'This extension serves as a kickstart for the creation and reuse of TYPO3 projects. Additional required extensions expand your TYPO3 with performance and SEO optimizations.',
    'category' => 'plugin',
    'author' => 'Andreas Reichel, Igor Smertin',
    'author_email' => 'a.reichel91@outlook.com, igor.smertin@web.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.6',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'php' => '8.2.0-8.3.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];