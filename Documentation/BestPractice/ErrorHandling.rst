.. include:: /Includes.rst.txt
.. index:: BestPractice
.. _error-handling:

===============
403 Error Handling
===============

When you have a restriced page and the User is clicking on it the User will normaly comes to a 403 Page that you can define in the
Typo3 Backend under `Site Management` ➞ `Error Handling`.

If you want that the User get redirected to the Login Page and after login gets back to the requested Page you can use this Error Handler.

.. rst-class:: bignums-important

1.  Create the File `ErrorLoginHandler` in you extension `Classes` Folder

    The Class can look like the Following:

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
        The Class expects that you have a `/login` Page where the DocCheck Login Plugin is included.
        Incase you have the DocCheck Login included in another Page, just change the URL accordingly.


2.  Navigate in the Typo3 Backend to

    `Sites` ➞ `Your Site Configuration` ➞ `Error Handling` ➞ `+Create new`

3.  The Configurate should look like the following

    .. figure:: /Images/error_handler.png
       :class: with-shadow
       :alt: Example User Folder
       :width: 100%

       Example Configuration

4.  Save and enjoy

    Now the User should get redirected back to the requested Url that he tried to access while he was not logged in.
