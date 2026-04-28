<?php

declare(strict_types=1);

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

use Rcdesign\RcdFscCustomCss\Form\Element\CssFieldElement;

// Registriere den RenderType für das Input-Feld
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1653569874] = [
    'nodeName' => 'cssField',
    'priority' => 40,
    'class' => CssFieldElement::class,
];
