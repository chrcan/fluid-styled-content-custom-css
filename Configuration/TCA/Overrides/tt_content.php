<?php

defined('TYPO3_MODE') or die();

// Configure new fields:
$fields = [
    'tx_ttcontentaddfields_customcss' => [
        'label' => 'LLL:EXT:ttcontent_addfields/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ttcontentaddfields_customcss',
        'exclude' => 0,
        'config' => [
            'type' => 'input',
            'max' => 255
        ],
    ]
];

// Add new fields to tt_content assets:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);

// Make fields visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content', // Table name
    '--palette--;;tx_ttcontentaddfields',
    // Field list to add
    '', // List of specific types to add the field list to. (If empty, all type entries are affected)
    'after:space_after_class' // Insert fields before (default) or after one, or replace a field
);

// Add the new palette:
$GLOBALS['TCA']['tt_content']['palettes']['tx_ttcontentaddfields'] = [
    'label' => 'LLL:EXT:ttcontent_addfields/Resources/Private/Language/locallang_db.xlf:tt_content.palette_title',
    'showitem' => 'tx_ttcontentaddfields_customcss'
];