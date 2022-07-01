<?php

/*
 * This file is part of the rcdesign/fluid-styled-content-custom-css package.
 *
 * Copyright (C) 2022  rc design visual concepts <https://rc-design.at>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * The TYPO3 project - inspiring people to share!
 */

defined('TYPO3_MODE') or die();

// Configure new fields:
$fields = [
    'tx_rcd_fluid_styled_content_custom_css_class' => [
        'label' => 'LLL:EXT:rcd_fluid_styled_content_custom_css/Resources/Private/Language/locallang_db.xlf:tt_content.custom_css_class',
        'exclude' => 0,
        'config' => [
            'type' => 'input',
            'max' => 255,
        ],
    ],
];

// Add new fields to tt_content assets:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);

// Make fields visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content', // Table name
    '--palette--;;rcd_fluid_styled_content_custom_css',
    // Field list to add
    '', // List of specific types to add the field list to. (If empty, all type entries are affected)
    'after:space_after_class' // Insert fields before (default) or after one, or replace a field
);

// Add the new palette:
$GLOBALS['TCA']['tt_content']['palettes']['rcd_fluid_styled_content_custom_css'] = [
    'label' => 'LLL:EXT:rcd_fluid_styled_content_custom_css/Resources/Private/Language/locallang_db.xlf:tt_content.custom_css_palette_title',
    'showitem' => 'tx_rcd_fluid_styled_content_custom_css_class',
];
