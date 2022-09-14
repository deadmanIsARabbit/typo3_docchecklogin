<?php declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$selectColumns = [
    'dc_gender' =>[
        'LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:user.dc_gender.male' => 'm',
        'LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:user.dc_gender.female' => 'f',
        'LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:user.dc_gender.company' => 'c',
        'LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:user.dc_gender.other' => 'o',
        'LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:user.dc_gender.unknown' => 'u',
    ]
];

$numberColumns = [
    'dc_profession',
    'dc_profession_parent',
    'dc_discipline'
];

foreach ($numberColumns as $column) {
    $tempColumns[$column] = [
        'exclude' => 1,
        'label' => 'LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:user.'.$column,
        'config' => [
            'type' => 'input',
            'eval' => 'num',
        ],
    ];
}

foreach ($selectColumns as $columnKey => $column) {
    $tempColumns[$columnKey] = [
        'exclude' => 1,
        'label' => 'LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:user.'.$columnKey,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
        ],
    ];

    foreach($column as $key => $value){
        $tempColumns[$columnKey]['config']['items'][]= [$key,$value];
    }
}


ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumns);
ExtensionManagementUtility::addToAllTCAtypes(
    'fe_users',
    '--div--;LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:user.tabs.dochecklogin, dc_gender, dc_profession, dc_profession_parent, dc_discipline ',
    '',
    'after:image'
);
