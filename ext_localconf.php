<?php

declare(strict_types=1);

use Rcdesign\RcdFscCustomCss\Form\Element\CssFieldElement;

// Registriere den RenderType für das Input-Feld
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1653569874] = [
    'nodeName' => 'cssField',
    'priority' => 40,
    'class' => CssFieldElement::class,
];
