<?php declare(strict_types=1);

use Antwerpes\Typo3Docchecklogin\Middleware\LoginMiddleware;

return [
    'frontend' => [
        'doccheck-loginhandler' => [
            'target' => LoginMiddleware::class,
            'after' => [
                'typo3/cms-frontend/authentication',
            ],
            'before' => [
                'typo3/cms-frontend/page-resolver',
            ],
        ],
    ],
];
