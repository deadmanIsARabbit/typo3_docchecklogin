.. include:: /Includes.rst.txt

.. _configuration-exttables:

==================
ExtTables
==================

The plugin adds four new database fields to the fe_users table.

..  contents::
    :local:


.. _configuration-table:

fe_users table columns
========================

.. _confval-tx_typo3docchecklogin_profession:

tx_typo3docchecklogin_profession
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
..  confval:: tx_typo3docchecklogin_profession

    :type: int

    Stores the profession of the user when the Personal-Feature is enabled.

    To get a list for what the ids stands for `see here <https://service.doccheck.com/service/info/codes_v2.php?scope=profession&language=en&format=json>`__.

    You can change the parameter `language` in the url to get the results for different languages.


.. _confval-tx_typo3docchecklogin_profession_parent:

tx_typo3docchecklogin_profession_parent
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
..  confval:: tx_typo3docchecklogin_profession_parent

    :type: int

    Stores the parent profession of the user when the Personal-Feature is enabled.

    To get a list for what the ids stands for `see here <https://service.doccheck.com/service/info/codes_v2.php?scope=profession&language=en&format=json>`__.

    You can change the parameter `language` in the url to get the results for different languages.

.. _confval-tx_typo3docchecklogin_discipline:

tx_typo3docchecklogin_discipline
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
..  confval:: tx_typo3docchecklogin_discipline

    :type: int

    Stores the discipline of the User when the Personal-Feature is enabled.

    To get a List for what the IDs stands for `see here <https://service.doccheck.com/service/info/codes_v2.php?scope=discipline&language=en&format=json>`__.

    You can change the parameter `language` in the url to get the results for different languages.

.. _confval-tx_typo3docchecklogin_gender:

tx_typo3docchecklogin_gender
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
..  confval:: tx_typo3docchecklogin_gender

    :type: varchar

    Stores the gender of the user when the Personal-Feature is enabled.

    *   m = male
    *   f = female
    *   c = company
    *   o = other
    *   u = unknown

