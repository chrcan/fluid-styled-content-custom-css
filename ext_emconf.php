<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'CSS fields for Fluid Styled Content',
    'description' => 'Adds new CSS fields for Fluid Styled Content Content Elements',
    'category' => 'fe',
    'author' => 'Christian Racan',
    'author_email' => 'werbegrafik@rc-design.at',
    'state' => 'alpha',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
