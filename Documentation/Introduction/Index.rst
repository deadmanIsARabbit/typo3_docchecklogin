.. include:: /Includes.rst.txt

.. _introduction:

============
Introduction
============

If you find any errors or have feature requests please contact us on `github <https://github.com/antwerpes/typo3_docchecklogin/issues>`__.

.. _what-does-it-do:

What does it do?
================

This extension integrates the popular DocCheck Login Service with your TYPO3 Website. It is currently maintained by antwerpes ag (a subsidiary of DocCheck AG).

*  It supports the **basic functionality** by logging in a dummy frontend user whenever someone has been authorized by DocCheck.
*  It supports the **Unique Key feature** (optional, requires license Economy or higher), which allows you to identify returning visitors, by creating one frontend user per unique DocCheck User.
*  It supports the **DocCheck Routing feature** family, allowing you to configure different frontend user groups for different routing targets.
*  It supports the **DocCheck Personal feature** (optional, requires license Business and the Unique Key feature), which will augment your Unique DocCheck User by some person-related data – given, that the user agrees to this data transmission.
*  It supports the **DocCheck Crawler feature** to add your protected content in the DocCheck Search Engine index. With this powerful feature your valuable content will be searchable for healthcare professionals.


.. _screenshots:

Screenshots
===========

.. _configuration-screen:

Configuration Screen
---------------------

This are the Extension Configuration Screens that are reachable from the typo3 backend.

For this navigate to `Settings` ➞ `Extension Configuration` ➞ `typo3_docchecklogin`

.. _basic:

Basic
""""""""""""""
.. figure:: /Images/settings_basic.png
   :class: with-shadow
   :alt: Configuration Screen: Basic
   :width: 100%

   Configuration Screen: Basic

.. _economy:

Economy
""""""""""""""
.. figure:: /Images/settings_economy.png
   :class: with-shadow
   :alt: Configuration Screen: Economy
   :width: 100%

   Configuration Screen: Economy

.. _business:

Business
""""""""""""""
.. figure:: /Images/settings_business.png
   :class: with-shadow
   :alt: Configuration Screen: Business
   :width: 100%

   Configuration Screen: Business

.. _crawling:

Crawling
""""""""""""""
.. figure:: /Images/settings_crawling.png
   :class: with-shadow
   :alt: Configuration Screen: Crwaling
   :width: 100%

   Configuration Screen: Crwaling

.. _plugin-configuration:

Plugin Configuration
-------------------------
The Settings within the plugin flexform

.. figure:: /Images/plugin_settings.png
   :class: with-shadow
   :alt: Configuration Screen: Crwaling
   :width: 100%

   Configuration Screen: Crwaling

Frontend View
-------------------
Language will vary.

.. figure:: /Images/plugin_frontend.png
   :class: with-shadow
   :alt: Default Login-Form
   :width: 100%

   Default Login-Form
