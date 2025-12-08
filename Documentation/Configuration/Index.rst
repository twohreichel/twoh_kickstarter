..  include:: /Includes.rst.txt

.. _configuration:

=============
Configuration
=============

This section describes how to configure the TWOH Kickstarter extension.

.. _configuration-typoscript:

TypoScript Configuration
========================

.. _configuration-include-typoscript:

Include TypoScript
------------------

To include the TypoScript configuration:

1. Navigate to your root page in the TYPO3 backend
2. Go to :guilabel:`Site Management > TypoScript`
3. Create or edit your TypoScript record
4. In the :guilabel:`Includes` tab, add the static template **TWOH Kickstarter**

.. _configuration-typoscript-constants:

TypoScript Constants
--------------------

The extension provides the following TypoScript constants:

.. code-block:: typoscript

   # Basic page configuration
   page {
       # Your custom page configuration
   }

   # Extension-specific constants
   plugin.tx_twoh_kickstarter {
       # Configuration options
   }

.. _configuration-typoscript-setup:

TypoScript Setup
----------------

The extension includes several TypoScript setup files:

*  :file:`setup.typoscript` - Main setup configuration
*  :file:`setup_extensions.typoscript` - Extension-specific setups
*  :file:`Page/config.typoscript` - Page configuration
*  :file:`Page/page.typoscript` - Page rendering setup
*  :file:`Seo/sitemap.typoscript` - XML sitemap configuration

.. _configuration-extensions:

Extension Configuration
=======================

.. _configuration-solr:

Solr Configuration
------------------

The extension includes pre-configured Solr settings in
:file:`Configuration/TypoScript/Extensions/solr.typoscript`.

To customize Solr settings, override them in your site package TypoScript.

.. _configuration-news:

News Configuration
------------------

If you use the news extension, pre-configured settings are available in
:file:`Configuration/TypoScript/Extensions/news.typoscript`.

.. _configuration-seo:

SEO Configuration
-----------------

The SEO configuration includes:

*  XML sitemap generation
*  Meta tag defaults
*  Yoast SEO integration

Configure SEO settings via the page properties and TypoScript constants.

.. _configuration-caching:

Caching Configuration
=====================

Static File Cache
-----------------

The extension includes `staticfilecache` for optimal performance. Configure
caching behavior in your site's TypoScript or via extension configuration.

.. code-block:: typoscript

   # Example: Exclude pages from caching
   config.tx_staticfilecache {
       excludePages = 123,456
   }

.. _configuration-images:

Image Optimization
==================

The TinyPNG integration requires an API key. Configure it in the
Extension Configuration in the TYPO3 backend:

1. Go to :guilabel:`Admin Tools > Settings > Extension Configuration`
2. Select **twoh_tiny_png**
3. Enter your TinyPNG API key

.. _configuration-reference:

Configuration Reference
=======================

.. list-table::
   :header-rows: 1
   :widths: 30 20 50

   * - Property
     - Type
     - Description
   * - page.config
     - array
     - General page configuration
   * - plugin.tx_twoh_kickstarter
     - array
     - Plugin-specific configuration

.. _configuration-examples:

Examples
========

Basic Setup Example
-------------------

.. code-block:: typoscript

   # Include kickstarter configuration
   @import 'EXT:twoh_kickstarter/Configuration/TypoScript/setup.typoscript'

   # Override specific settings
   page {
       10 = FLUIDTEMPLATE
       10 {
           templateRootPaths.100 = EXT:your_sitepackage/Resources/Private/Templates/
       }
   }

For more examples, refer to the included TypoScript files in the
:file:`Configuration/TypoScript/` directory.
