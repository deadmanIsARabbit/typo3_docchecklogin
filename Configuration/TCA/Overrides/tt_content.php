<?php declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || exit;

ExtensionUtility::registerPlugin(
    'Typo3Docchecklogin',
    'DocCheckAuthentication',
    'LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:plugin.name'
);

// Add flexForms for content element configuration
$pluginSignature = 'typo3docchecklogin_doccheckauthentication';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    // Flexform configuration schema file
    'FILE:EXT:typo3_docchecklogin/Configuration/FlexForms/Setup.xml'
);
