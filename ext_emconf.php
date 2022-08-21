<?php

/**
 * Extension Manager/Repository config file for ext "speeddemo".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'speeddemo',
    'description' => 'Demonstrate how fast a PHP class can be loaded into TYPO3',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Typo3DocumentationTeam\\Speeddemo\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Documentation Team',
    'author_email' => 'info@typo3.org',
    'author_company' => 'TYPO3 Documentation Team',
    'version' => '1.2.0',
];
