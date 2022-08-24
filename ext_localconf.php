<?php

defined('TYPO3') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Typo3Docchecklogin',
    'DocCheckAuthentication',
    [
        \Antwerpes\Typo3Docchecklogin\Controller\DocCheckAuthenticationController::class => 'main, loggedIn, loginForm',
    ],
    // non-cacheable actions
    [
        \Antwerpes\Typo3Docchecklogin\Controller\DocCheckAuthenticationController::class => 'main, loggedIn',
    ]
);

// wizards
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService(
    // Extension Key
    'typo3_docchecklogin',
    // Service type
    'auth',
    // Service key
    'docchecklogin',
    [
        'title' => 'DocCheck Authentication Service',
        'description' => 'Authenticates users through the DocCheck Authentication Service',

        'subtype' => '',

        'available' => true,
        'priority' => 60,
        'quality' => 80,

        'os' => '',
        'exec' => '',

        'className' => \Antwerpes\Typo3Docchecklogin\Service\DocCheckAuthenticationService::class,
    ]
);
