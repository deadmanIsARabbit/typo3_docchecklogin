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

Before you can start to implement the DocCheck Login to your typo3 website, you will need a valid DocCheck Login ID, as well as access to `DocCheck CReaM <http://crm.doccheck.com/com/>`__, the login configuration backend.
For detailed instructions please read the `technical manual <https://more.doccheck.com/fileadmin/user_upload/files/industry/b2b-landingpage/industry-erste-hilfe-kasten-technical_manual_en.pdf>`__.

Example CReaM settings
~~~~~~~~~~~~~~~~~~~~~~~~

Login URL

..  code-block:: bash

    https://yourwebsite.com/login

Target URL

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

   In the TYPO3 backend, switch to the "Maintenance" module and click on "Analyze Database Structure".
   Create the database-fields for ``typo3_docchecklogin``, if necessary. For information what Database Fields get includes :ref:`see here <configuration-exttables>`

3. Include the TypoScript Template

   In the Typo3 backend, switch to the "Template" module and select your Root-Template. Edit the template record and include the static TypoScript configuration for "typo3-docchecklogin"

4. Create a Login Page and Include the Login Plugin

   Navigate to the page of your choice, click on the "+Content" Button and Navigate to the Tab `Plugins`. Here select the `DocCheck Login` Plugin.

5. Edit the Plugin Settings

   Under the Tab "Plugin" set the Login ID for the Plugin to work properly. To set a global Login Id please see :ref:`here <configuration-overwrite-loginid>`

6. Create a User Folder

   In your Page Tree create a user Folder. Switch to the `List View` and Create a Usergroup and a User inside the newly created Folder. The Names can be free of your choice.

   An Example you can see here:

    .. figure:: /Images/user_folder.png
       :class: with-shadow
       :alt: Example User Folder
       :width: 100%

       Example User Folder

7. Edit the Extension Configuration

   For the Plugin to work properly you need to set up the extension configuration accordingly to your Login Licence and your needs.
   To understand better which settings are usable by your Licence the settings are grouped by so.

   For more detailed information about the extension configuration see :ref:`here <extension-configuration>`.
