<?php

defined('TYPO3') or die();

// Remove FSC static include
foreach ($GLOBALS['TCA']['sys_template']['columns']['include_static_file']['config']['items'] as &$itemArray) {
    if ($itemArray['Fluid Content Elements (fluid_styled_content)'] ?? null !== null) {
        unset($itemArray);
        break;
    }
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'rcd_fluid_styled_content_custom_css',
    'Configuration/TypoScript/',
    'Fluid Content Elements'
);
