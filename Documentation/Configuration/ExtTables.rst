.. include:: /Includes.rst.txt

.. _configuration-exttables:

==================
ExtTables
==================

The Plugin adds four new DB fields to the fe_users Table.

..  contents::
    :local:


.. _configuration-table:

Fe_users Table Columns
========================

.. _confval-tx_typo3docchecklogin_profession:

tx_typo3docchecklogin_profession
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
..  confval:: tx_typo3docchecklogin_profession

    :type: int

    Stores the Profession of the User when the Personal-Feature is enabled.

    To get a List for what the IDs stands for `see here <https://service.doccheck.com/service/info/codes_v2.php?scope=profession&language=en>`__

.. _confval-tx_typo3docchecklogin_profession_parent:

tx_typo3docchecklogin_profession_parent
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
..  confval:: tx_typo3docchecklogin_profession_parent

    :type: int

    Stores the Parent Profession of the User when the Personal-Feature is enabled.

    To get a List for what the IDs stands for `see here <https://service.doccheck.com/service/info/codes_v2.php?scope=profession&language=en>`__

.. _confval-tx_typo3docchecklogin_discipline:

tx_typo3docchecklogin_discipline
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
..  confval:: tx_typo3docchecklogin_discipline

    :type: int

    Stores the Discipline of the User when the Personal-Feature is enabled.

    To get a List for what the IDs stands for `see here <https://service.doccheck.com/service/info/codes_v2.php?scope=discipline&language=en>`__

.. _confval-tx_typo3docchecklogin_gender:

tx_typo3docchecklogin_gender
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
..  confval:: tx_typo3docchecklogin_gender

    :type: varchar

    Stores the Gender of the User when the Personal-Feature is enabled.

    *   m = male
    *   f = female
    *   c = company
    *   o = other
    *   u = unknown

