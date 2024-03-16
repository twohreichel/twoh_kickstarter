<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

return [
    'ctrl' => [
        'title' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title',
        'iconfile' => 'EXT:twoh_kickstarter/Resources/Public/Icons/Extension.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, sub_title, link, icon',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title, sub_title, image, position, company_name, company_name_appendix, company_address, company_address_appendix, phone, email, email_title, website, website_title,        
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                    sys_language_uid, l10n_parent, l10n_diffsource, hidden, starttime, endtime
                '
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_twohkickstarter_domain_model_contact',
                'foreign_table_where' => 'AND tx_twohkickstarter_domain_model_contact.pid=###CURRENT_PID### AND tx_twohkickstarter_domain_model_contact.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],
        'sorting' => [
            'label' => 'sorting',
            'config' => [
                'type' => 'passthrough',
            ],
        ],


        'title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.title',
            'config' => [
                'type' => 'input',
                'eval' => 'required,trim',
                'default' => '',
            ],
        ],
        'sub_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.sub_title',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'image' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.image',
            'config' => ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                           --palette--;;filePalette'
                        ],
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
            ),
        ],
        'position' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.position',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'company_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.company_name',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'company_name_appendix' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.company_name_appendix',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'company_address' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.company_address',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'company_address_appendix' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.company_address_appendix',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'phone' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.phone',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'email' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.email',
            'config' => [
                'type' => 'input',
                'eval' => 'trim,email',
                'default' => '',
            ],
        ],
        'email_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.email_title',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'website' => [ // link
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.website',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'website_title' => [ // link_title
            'exclude' => 1,
            'label' => 'LLL:EXT:twoh_kickstarter/Resources/Private/Language/tx_twohkickstarter_domain_model_contact/locallang_db.xlf:tx_twohkickstarter_domain_model_contact.website_title',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
    ],
];
