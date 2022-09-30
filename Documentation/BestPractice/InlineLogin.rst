.. include:: /Includes.rst.txt
.. _inline-login:

===============
Inline Login
===============

If you want to use the Login Template directly inside a Fluid Template, for example to use it in a Popup,
you can do so by creating a lib Element.

Got to your typoscript Configuration and add + edit the following code.

.. code-block:: php

    lib.login = USER
    lib.login{
        userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
        vendorName = Antwerpes
        extensionName = Typo3Docchecklogin
        pluginName = DocCheckAuthentication
        controller = DocCheckAuthentication
        features.requireCHashArgumentForActionArguments = 0
        view =< plugin.tx_typo3docchecklogin.view
        settings =< plugin.tx_typo3docchecklogin.settings
        settings.loginId = <yourLoginId>
        settings.loginLayout = xl
        settings.customLayout =
        settings.language = de
        settings.redirect = 1
    }

Afterwards you can use the Code in the Fluid Template like the following:

.. code-block:: php

    <f:cObject typoscriptObjectPath="lib.login"/>
