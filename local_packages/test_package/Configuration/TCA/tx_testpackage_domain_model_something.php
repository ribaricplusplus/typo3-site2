<?php

return [
    'ctrl' => [
        'title' => 'Ctrl Title',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'rootLevel' => -1,
        'hideTable' => false
    ],
    'columns' => [
        'smth' => [
            'label' => 'Something',
            'description' => 'My description of something',
            'l10n_mode' => 'exclude',
            'exclude' => false,
            'config' => [
                'type' => 'input',
                'nullable' => true,
                'default' => null
            ]
        ]
    ],
    'types' => [
        '0' => [
            'showitem' => 'smth'
        ]
    ]
];
