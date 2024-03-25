<?php

$EM_CONF['twoh_kickstarter'] = array(
    'title' => 'TWOH Atom (Kickstarter)',
    'description' => 'This extension serves as a kickstart for the creation and reuse of TYPO3 projects. Additional required extensions expand your TYPO3 with performance and SEO optimizations.',
    'category' => 'plugin',
    'author' => 'Andreas Reichel',
    'author_email' => 'a.reichel91@outlook.com',
    'author_company' => 'TWOH',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '12.4.99',
            'php' => '8.0-8.3'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
