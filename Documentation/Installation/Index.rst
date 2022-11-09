.. include:: /Includes.rst.txt

.. _installation:

============
Installation
============
..  contents::
    :local:

.. _before-you-start:

Before you start
-------------------------

Before you can start to implement the DocCheck Login to your TYPO3 website, you will need a valid DocCheck Login ID, as well as access to `DocCheck CReaM <http://crm.doccheck.com/com/>`__, the login configuration backend.
For detailed instructions please read the `technical manual <https://more.doccheck.com/fileadmin/user_upload/files/industry/b2b-landingpage/industry-erste-hilfe-kasten-technical_manual_en.pdf>`__.

Example CReaM settings
~~~~~~~~~~~~~~~~~~~~~~~~

Login url

..  code-block:: bash

    https://yourwebsite.com/login

Target url

..  code-block:: bash

    https://yourwebsite.com/login?logintype=login&dc=dcloginparam


.. _step-by-step:

Step-by-step instruction
-------------------------

.. rst-class:: bignums-important

1. Install the extension

   Install the extension using **composer** on the command-line:

   .. code-block:: bash

      composer require antwerpes/typo3-docchecklogin

2. Make sure the database-fields were created

   In the TYPO3 backend, switch to the :guilabel:`Maintenance` module and click on :guilabel:`Analyze Database Structure`.
   Create the database-fields for ``typo3_docchecklogin``, if necessary. For information what database fields get includes :ref:`see here <configuration-exttables>`.

3. Include the TypoScript template

   In the TYPO3 backend, switch to the :guilabel:`Template` module and select your Root-Template. Edit the template record and include the static TypoScript configuration for `typo3-docchecklogin`.

4. Create a login page and include the login plugin

   Navigate to the page of your choice, click on the :guilabel:`+ Content` button and navigate to the tab :guilabel:`Plugins`. Here select the :guilabel:`DocCheck Login` plugin.

5. Edit the plugin settings

   Under the tab :guilabel:`Plugins` set the Login ID for the plugin to work properly. To set a global Login ID please see :ref:`here <configuration-overwrite-loginid>`

6. Create a user folder

   In your page tree create an user folder. Switch to the :guilabel:`List View` and create a usergroup and a user inside the newly created folder. The names can be free of your choice.

   An example you can see here:

    .. figure:: /Images/user_folder.png
       :class: with-shadow
       :alt: Example user folder
       :width: 100%

       Example user folder

7. Edit the extension configuration

   For the plugin to work properly you need to set up the extension configuration accordingly to your login licence and your needs.
   To understand better which settings are usable by your licence the settings are grouped by so.

   For more detailed information about the extension configuration see :ref:`here <extension-configuration>`.
