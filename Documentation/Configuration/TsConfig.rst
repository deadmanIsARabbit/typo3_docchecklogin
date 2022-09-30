.. include:: /Includes.rst.txt

.. _configuration-tsconfig:

==================
TsConfig
==================

This Configuration covers options to configure the plugin

.. _configuration-custom-template:

Custom View Templates
====================

.. confval:: templateLayouts

    :type: array

    You might want to change the HTML Code that renders the iFrame.

    To do so, copy the `Resources/Private/Templates/DocCheckAuthentication/` and `Resources/Private/Partials/DocCheckAuthentication/` folder to, for example, your `<yourPathOfChoice>/Templates/DocCheckAuthentication` and set the following in your TYPO3 Setup:

    Example::

      plugin.tx_typo3docchecklogin.view.templateRootPath.10 = <yourPathOfChoice>/Templates/DocCheckAuthentication
      plugin.tx_typo3docchecklogin.view.partialRootPaths.10 = <yourPathOfChoice>/Partials/DocCheckAuthentication


.. _configuration-overwrite-loginid:

Overwrite Login ID
====================

.. confval:: loginOverrideId

    :type: string
    :Default: null

    This numeric parameter overrides the used Doccheck Login ID. Especially useful for working in multiple environments.

    Example::

       [like(request.getNormalizedParams().getHttpHost(), '*stage.domain.com')]
            plugin.tx_typo3docchecklogin.settings.loginOverrideId = 1111111111
       [global]


