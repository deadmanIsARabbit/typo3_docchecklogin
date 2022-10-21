.. include:: /Includes.rst.txt

.. _extension-configuration:

========================
Extension configuration
========================

For the plugin to work properly you need to set up the extension configuration accordingly to your login licence and your needs.

To understand better which settings are usable by your licence the settings are grouped by so. To know what the different licences are standing for
please follow `this page <https://more.doccheck.com/en/industry/login-licenses/>`__.

For the basic functionality, the free DocCheck Basic Licence should suffice.

If you don't have a licence yet and you are interested in buying one, please contact `industry@doccheck.com`. They will also provide you with test licenses if needed.

Each group in the extension configuration is based on the group before. The exception is the Crawling-Feature that can be used even when you dont have a licence.

To access the extension configuration navigate in the TYPO3 backend to :guilabel:`Settings` ➞ :guilabel:`Extension Configuration` ➞ :guilabel:`typo3_DocChecklogin`.

..  contents::
    :local:

.. _configuration_basic:

Basic
===============

The Basic-Features don't require a DocCheck Login Licence.

.. _confval-dcParam:

dcParam
~~~~~~~~~~~~
..  confval:: dcParam

    :Required: true
    :type: string

    Expected value of the dc GET-Parameter.

    The extension will check :php:`$_GET['dc']` for this value after a successful DocCheck Login. Set it to an arbitrary string that can be used as a url parameter.

.. _confval-dummyUser:

dummyUser
~~~~~~~~~~~~
..  confval:: dummyUser

    :Required: true
    :type: string

    Username of the dummy user to be used with the DocCheck Authentication Service.

    This user will be logged in with your TYPO3 website, whenever a DocCheck user logs in successfully. The dummyuser must be stored in pid as determined in :ref:`basic.dummyUserPid <confval-dummyUserPid>`.

.. _confval-dummyUserPid:

dummyUserPid
~~~~~~~~~~~~
..  confval:: dummyUserPid

    :Required: true
    :type: int

    Uid of the page/folder where the dummy user and the user group(s) is stored.

    The extension will look for the dummy user or the configured user groups (when using the UniqueKey-Feature) on the page (or storage folder) with this id.

.. _configuration_economy:

Economy
===============

..  attention::

    For the Economy-Features a paid licence is needed.


.. _confval-uniqueKeyEnable:

uniqueKeyEnable
~~~~~~~~~~~~~~~~~~~~
..  confval:: uniqueKeyEnable

    :Required: false
    :type: boolean

    Enable the UniqueKey-Feature. Creates one TYPO3 frontend user per unique key.

.. _confval-clientSecret:

clientSecret
~~~~~~~~~~~~~~~~~~~~
..  confval:: clientSecret

    :Required: false (Only needed for the UniqueKey and Personal-Feature)
    :type: string

    Client secret is needed to establish an oAuth connection.

.. _confval-uniqueKeyGroup:

uniqueKeyGroup
~~~~~~~~~~~~~~~~~~~~
..  confval:: uniqueKeyGroup

    :Required: false
    :type: int

    Define the group id in which the unique users get sorted in. This group must be found in the page which you configured in :ref:`basic.dummyUserPid <confval-dummyUserPid>`.

    This user will be overwritten when the Routing-Feature is enabled.

.. _confval-routingEnable:

routingEnable
~~~~~~~~~~~~~~~~~~~~
..  confval:: routingEnable

    :Required: false
    :type: boolean

    Use Routing-Feature to route different values for the "dc" param to different user groups. Each dcParam will be routed to one frontend user group.

    This requires you to set some routes in your DocCheck CReaM configuration.

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

    For the Business-Features a paid licence is needed.

.. _confval-dcPersonalEnable:

dcPersonalEnable
~~~~~~~~~~~~~~~~~~~~
..  confval:: dcPersonalEnable

    :Required: false
    :type: boolean

    Add user specific data to the created user account when the users agrees to it.

    The UniqueKey-Feature needs to be activated for it to work properly.

.. _configuration_crawling:

Crawling
===============

The Crawling-Feature allows an external crawler to bypass the DocCheck Login.

A crawler is a program that visits your website, loads its content and prepares it for searches.
This is especially needed when you use your website with the DocCheck Search.

For more information `visit this page <https://crm.DocCheck.com/uploads/assets/other/FS_DC_Industry_Search_Whitepaper_EN.pdf>`__.

.. _confval-crawlingEnable:

crawlingEnable
~~~~~~~~~~~~~~~~~~~~
..  confval:: crawlingEnable

    :Required: false
    :type: boolean

    Enabled crawlers to bypass the DocCheck Login

.. _confval-crawlingUser:

crawlingUser
~~~~~~~~~~~~~~~~~~~~
..  confval:: crawlingUser

    :Required: false
    :type: string

    Name of the user that will be used for crawling. Defaults to :ref:`basic.dummyUser <confval-dummyUser>`

.. _confval-crawlingIP:

crawlingIP
~~~~~~~~~~~~~~~~~~~~
..  confval:: crawlingIP

    :Required: false
    :type: string

    IP of the crawler. To bypass the DocCheck Search crawler user the IP `195.82.66.150`.
