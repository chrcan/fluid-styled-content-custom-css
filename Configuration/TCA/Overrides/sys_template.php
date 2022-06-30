<?php

defined('TYPO3') or die();

// Replace FSC static include
foreach ($GLOBALS['TCA']['sys_template']['columns']['include_static_file']['config']['items'] as &$itemArray) {
    if ($itemArray[0] === 'Fluid Content Elements (fluid_styled_content)') {
        $itemArray[0] = 'Fluid Content Elements (rcd_fluid_styled_content_custom_css)';
        $itemArray[1] = 'EXT:rcd_fluid_styled_content_custom_css/Configuration/TypoScript/';
        break;
    }
}
