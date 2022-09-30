.. include:: /Includes.rst.txt

.. _extension-configuration:

========================
Extension Configuration
========================

For the Plugin to work properly you need to set up the extension configuration accordingly to your Login Licence and your needs.

To understand better which settings are usable by your Licence the settings are grouped by so. To know what the different Licences are standing for
please follow `this Page (only in de) <https://flexikon.doccheck.com/de/DocCheck:DocCheck_Login_f%C3%BCr_Ihre_Website#Unsere_Lizenzen>`__

Each Group is based on the group before. The exception is the Crawling Feature that can be used even when you dont have a licence.

To access the extension configuration navigate in the typo3 backend to `Settings` ➞ `Extension Configuration` ➞ `typo3_DocChecklogin`.

..  contents::
    :local:

.. _configuration_basic:

Basic
===============

The Basic-Features don't require a Doccheck Login Licence.

.. _confval-dcParam:

dcParam
~~~~~~~~~~~~
..  confval:: dcParam

    :Required: true
    :type: string

    Expected Value of the dc GET Parameter.

    The Extension will check `$_GET['dc']` for this value after a successful DocCheck Login. Set it to an arbitrary string that can be used as a url parameter.

.. _confval-dummyUser:

dummyUser
~~~~~~~~~~~~
..  confval:: dummyUser

    :Required: true
    :type: string

    Username of the dummy user to be used with the DocCheck Authentication Service.

    This user will be logged in with your TYPO3 website, whenever a DocCheck User logs in successfully. The dummyuser must be stored in PID as determined in `basic.dummyUserPid`

.. _confval-dummyUserPid:

dummyUserPid
~~~~~~~~~~~~
..  confval:: dummyUserPid

    :Required: true
    :type: int

    UID of the page/folder where the dummy user and the user group(s) is stored.

    The extension will look for the dummy user or the configured user groups (when using the UniqueKey-Feature) on the page (or storage folder) with this ID.

.. _configuration_economy:

Economy
===============

..  attention::

    For the Economy-Features a paid Licence is needed.


.. _confval-uniqueKeyEnable:

uniqueKeyEnable
~~~~~~~~~~~~~~~~~~~~
..  confval:: uniqueKeyEnable

    :Required: false
    :type: boolean

    Enable the UniqueKey-Features. Creates one Typo3 FE User per Unique Key.

.. _confval-clientSecret:

clientSecret
~~~~~~~~~~~~~~~~~~~~
..  confval:: clientSecret

    :Required: false (Only needed for the UniqueKey and Personal-Feature)
    :type: string

    Client Secret is needed to establish an OAuth Connection.

.. _confval-uniqueKeyGroup:

uniqueKeyGroup
~~~~~~~~~~~~~~~~~~~~
..  confval:: uniqueKeyGroup

    :Required: false
    :type: int

    Define the Group ID in which the unique Users get sorted in. This group must be found in the page which you configured in :ref:`basic.dummyUserPid <confval-dummyUserPid>`

    This User will be overwritten when the Routing-Feature is enabled.

.. _confval-routingEnable:

routingEnable
~~~~~~~~~~~~~~~~~~~~
..  confval:: routingEnable

    :Required: false
    :type: boolean

    Use Routing-Feature to route different Values for the "dc" param to different User Groups. Each dcParam will be routed to one frontend user group.

    This requires you to set some routes in your DocCheck CReaM Configuration.

    Works only in combination with UniqueKey-Feature and overrides :ref:`basic.dcParam <confval-dcParam>` and :ref:`economy.uniqueKeyGroup <confval-uniqueKeyGroup>`


.. _confval-routingMap:

routingMap
~~~~~~~~~~~~~~~~~~~~
..  confval:: routingMap

    :Required: false
    :type: string

    This map resolves each dc-Param to one frontend user group.

    | *Format*
    | <GROUP_ID>=<DC_PARAM>,<GROUP_ID>=<DC_PARAM>...

    | *Example*
    | 2=akDJKw82,3=dk8Dkkv

.. _configuration_business:

Business
===============

..  attention::

    For the Business-Features a paid Licence is needed.

.. _confval-dcPersonalEnable:

dcPersonalEnable
~~~~~~~~~~~~~~~~~~~~
..  confval:: dcPersonalEnable

    :Required: false
    :type: boolean

    Add User Specific Data to the created User Account when the Users agrees to it.

    The UniqueKey-Feature needs to be activated for it to work properly.

.. _configuration_crawling:

Crawling
===============

The Crawling-Feature allows an external Crawler to Bypass the DocCheck Login.

A Crawler is a program that visits your website, loads its content and prepares it for searches.
This is especially needed when you use your website with the DocCheck Search.

For more information `visit this page <https://crm.DocCheck.com/uploads/assets/other/FS_DC_Industry_Search_Whitepaper_EN.pdf>`__

.. _confval-crawlingEnable:

crawlingEnable
~~~~~~~~~~~~~~~~~~~~
..  confval:: crawlingEnable

    :Required: false
    :type: boolean

    Enabled Crawlers to bypass the DocCheck Login

.. _confval-crawlingUser:

crawlingUser
~~~~~~~~~~~~~~~~~~~~
..  confval:: crawlingUser

    :Required: false
    :type: string

    Name of the User that will be used for crawling. Defaults to basic.dummyUser

.. _confval-crawlingIP:

crawlingIP
~~~~~~~~~~~~~~~~~~~~
..  confval:: crawlingIP

    :Required: false
    :type: string

    IP of the Crawler. To Bypass the DocCheck Search Crawler user the IP `195.82.66.150`
