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

ExtensionManagementUtility::addStaticFile(
    'rcd_fsc_custom_css',
    'Configuration/TypoScript',
    'FSC-Custom-Css'
);
