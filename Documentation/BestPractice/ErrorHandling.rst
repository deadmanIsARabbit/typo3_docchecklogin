.. include:: /Includes.rst.txt
.. index:: BestPractice
.. _error-handling:

==================
403 error handling
==================

When you have a restriced page and the user is clicking on it the user will normaly comes to a 403 page that you can define in the
TYPO3 backend under :guilabel:`Site Management` ➞ :guilabel:`Error Handling`.

If you want that the user get redirected to the login page and after login gets back to the requested page you can use this error handler.

.. rst-class:: bignums-important

1.  Create the file :file:`ErrorLoginHandler` in you extension :file:`Classes` folder

    The class can look like the following:

    .. code-block:: php

        <?php

        namespace Vendor\MyExtension;

        use Psr\Http\Message\ResponseInterface;
        use Psr\Http\Message\ServerRequestInterface;
        use TYPO3\CMS\Core\Context\Context;
        use TYPO3\CMS\Core\Error\PageErrorHandler\PageErrorHandlerInterface;
        use TYPO3\CMS\Core\Http\RedirectResponse;
        use TYPO3\CMS\Core\Utility\GeneralUtility;
        use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

        class ErrorLoginHandler implements PageErrorHandlerInterface
        {
            public function handlePageError(
                ServerRequestInterface $request,
                string $message,
                array $reasons = []
            ): ResponseInterface {
                return new RedirectResponse('/login?redirect_url='.$request->getUri()->getPath(), 403);
            }
        }

    ..  note::
        The class expects that you have a `/login` page where the DocCheck Login plugin is included.
        Incase you have the DocCheck Login included in another page, just change the url accordingly.


2.  Navigate in the TYPO3 backend to

    :guilabel:`Sites` ➞ :guilabel:`Your Site Configuration` ➞ :guilabel:`Error Handling` ➞ :guilabel:`+ Create new`

3.  The configurate should look like the following

    .. figure:: /Images/error_handler.png
       :class: with-shadow
       :alt: Example user folder
       :width: 100%

       Example configuration

4.  Save and enjoy

    Now the user should get redirected back to the requested url that he tried to access while he was not logged in.
