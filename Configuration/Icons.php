<?php

declare(strict_types=1);

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx-rcd-css-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:rcd_fsc_custom_css/Resources/Public/Icons/Extension.svg',
    ],
];
