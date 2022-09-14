<?php declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Antwerpes\Typo3Docchecklogin\Controller\DocCheckAuthenticationController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use Antwerpes\Typo3Docchecklogin\Service\DocCheckAuthenticationService;

defined('TYPO3') || exit;

ExtensionUtility::configurePlugin(
    'Typo3Docchecklogin',
    'DocCheckAuthentication',
    [
        DocCheckAuthenticationController::class => 'show',
    ],
    // non-cacheable actions
    [
        DocCheckAuthenticationController::class => 'show',
    ]
);

// wizards
ExtensionManagementUtility::addPageTSConfig(
    'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    doccheckauthentication {
                        iconIdentifier = docchecklogin-plugin-product
                        title = LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:plugin.name
                        description = LLL:EXT:typo3_docchecklogin/Resources/Private/Language/locallang_backend.xlf:plugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = typo3docchecklogin_doccheckauthentication
                        }
                    }
                }
                show = *
            }
       }'
);

ExtensionManagementUtility::addService(
    // Extension Key
    'typo3_docchecklogin',
    // Service type
    'auth',
    // Service key
    'Antwerpes\\Typo3Docchecklogin\\Service\\DocCheckAuthenticationService',
    [
        'title' => 'DocCheck Authentication Service',
        'description' => 'Authenticates users through the DocCheck Authentication Service',

        'subtype' => 'getUserFE,authUserFE',

        'available' => true,
        'priority' => 60,
        'quality' => 60,

        'os' => '',
        'exec' => '',

        'className' => DocCheckAuthenticationService::class,
    ]
);
