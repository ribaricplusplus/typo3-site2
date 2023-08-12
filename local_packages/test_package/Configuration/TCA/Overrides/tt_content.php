<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'My content element title',
        'testpackage_newcontentelement',
        'content-text'
    ],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['testpackage_newcontentelement'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
               --palette--;;general,
               header; Internal title (not displayed),
               bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
               --palette--;;hidden,
               --palette--;;access,
         ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
    ],
];