<?php declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || exit;

ExtensionManagementUtility::addStaticFile('typo3_docchecklogin', 'Configuration/TypoScript', 'typo3-docchecklogin');
