<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

defined('TYPO3') || die();

// Configure new fields:
$fields = [
    'tx_rcd_fsc_custom_css_class' => [
        'label' => 'LLL:EXT:rcd_fsc_custom_css/Resources/Private/Language/locallang_db.xlf:tt_content.custom_css_class',
        'exclude' => 0,
        'config' => [
            'type' => 'input',
            'max' => 255,
            'renderType' => 'cssField',
            'parameters' => [
                'size' => '30',
                'color' => '#de001f',
            ],
        ],
    ],
];

// Add new fields to tt_content assets:
ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);

// Make fields visible in the TCEforms:
ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content', // Table name
    '--palette--;;rcd_fsc_custom_css',
    // Field list to add
    '', // List of specific types to add the field list to. (If empty, all type entries are affected)
    'after:space_after_class' // Insert fields before (default) or after one, or replace a field
);

// Add the new palette:
$GLOBALS['TCA']['tt_content']['palettes']['rcd_fsc_custom_css'] = [
    'label' => 'LLL:EXT:rcd_fsc_custom_css/Resources/Private/Language/locallang_db.xlf:tt_content.custom_css_palette_title',
    'showitem' => 'tx_rcd_fsc_custom_css_class',
];
