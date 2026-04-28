<?php

declare(strict_types=1);

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'CSS fields for Fluid Styled Content',
    'description' => 'Adds new CSS fields for Fluid Styled Content Content Elements',
    'category' => 'fe',
    'author' => 'Christian Racan',
    'author_email' => 'werbegrafik@rc-design.at',
    'state' => 'stable',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.3.99',
            'fluid_styled_content' => '11.5.0-14.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
