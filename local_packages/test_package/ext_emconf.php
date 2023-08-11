<?php

/**
 * Extension Manager/Repository config file for ext "test_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Test Package',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'CrossLink\\TestPackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'CrossLink',
    'author_email' => 'bruno@ribarich.me',
    'author_company' => 'Cross Link',
    'version' => '1.0.0',
];
