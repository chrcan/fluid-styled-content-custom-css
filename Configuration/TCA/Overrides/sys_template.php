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

defined('TYPO3') or die();

// Replace FSC static include
foreach ($GLOBALS['TCA']['sys_template']['columns']['include_static_file']['config']['items'] as &$itemArray) {
    if ($itemArray[0] === 'Fluid Content Elements (fluid_styled_content)') {
        $itemArray[0] = 'Fluid Content Elements (rcd_fluid_styled_content_custom_css)';
        $itemArray[1] = 'EXT:rcd_fluid_styled_content_custom_css/Configuration/TypoScript/';
        break;
    }
}
