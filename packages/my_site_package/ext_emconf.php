<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'My Site Package',
    'description' => 'v13',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Freelancer\\MySitePackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sarah McCarthy',
    'author_email' => 'sarahmccarthy123@yahoo.com',
    'author_company' => 'Freelancer',
    'version' => '1.0.0',
];
