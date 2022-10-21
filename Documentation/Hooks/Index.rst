.. include:: /Includes.rst.txt

.. _hooks:

=============
Hooks
=============

Following hooks can be used to extend functionalities of the DocCheck Login plugin.


beforeRedirect
===============

This extension offers the signal slot `beforeRedirect`, which is called before a successfully logged-in user will be redirected.

Usage from within your extension's :file:`ext_localconf.php`:

.. code-block:: php

    $GLOBALS['TYPO3_CONF_VARS']['EXT']['typo3_docchecklogin']['beforeRedirect'][] =
    \Vendor\Package\Hook\MyHook::class . '->beforeRedirect';


