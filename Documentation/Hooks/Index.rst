.. include:: /Includes.rst.txt

.. _hooks:

=============
Hooks
=============

Following Hooks can be used to extend functionalities of the DocCheck Login Plugin.


beforeRedirect
===============

This Extension offers the Signal Slot `beforeRedirect`, which is called before a successfully logged-in user will be redirected.

Usage from within your extension’s ext_localconf.php:

.. code-block:: php

    $GLOBALS['TYPO3_CONF_VARS']['EXT']['typo3_docchecklogin']['beforeRedirect'][] =
    \Vendor\Package\Hook\MyHook::class . '->beforeRedirect';


