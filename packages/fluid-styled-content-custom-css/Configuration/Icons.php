<?php

declare(strict_types=1);

/*
 * This file is part of the rcdesign/fluid-styled-content-custom-css package.
 *
 * Copyright (C) 2025  rc design visual concepts <https://rc-design.at>
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

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx-rcd-css-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:rcd_fsc_custom_css/Resources/Public/Icons/Extension.svg',
    ],
];
