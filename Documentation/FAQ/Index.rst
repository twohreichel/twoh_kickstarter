..  include:: /Includes.rst.txt

.. _faq:

===
FAQ
===

Frequently asked questions about the TWOH Kickstarter extension.

.. _faq-general:

General Questions
=================

.. _faq-what-is:

What is TWOH Kickstarter?
-------------------------

TWOH Kickstarter is a TYPO3 extension that provides a ready-to-use foundation
for new TYPO3 projects. It bundles essential extensions and configurations for
performance optimization, SEO, and search functionality.

.. _faq-who-for:

Who is this extension for?
--------------------------

This extension is designed for:

*  TYPO3 developers starting new projects
*  Agencies looking for a standardized project setup
*  Developers who want performance and SEO optimization out of the box

.. _faq-installation:

Installation Questions
======================

.. _faq-composer-required:

Is Composer required?
---------------------

While not strictly required, Composer installation is highly recommended for
TYPO3 13 projects. It ensures proper dependency management and makes updates
easier.

.. _faq-manual-install:

Can I install manually without Composer?
----------------------------------------

Yes, but it's not recommended. You would need to manually install all
dependencies listed in the `composer.json` file.

.. _faq-configuration:

Configuration Questions
=======================

.. _faq-tinypng-key:

Where do I get a TinyPNG API key?
---------------------------------

Register at `tinypng.com/developers <https://tinypng.com/developers>`__ to
get a free API key. The free tier allows 500 compressions per month.

.. _faq-solr-required:

Is Apache Solr required?
------------------------

Solr is included as a dependency but you don't need to use it. If you don't
need search functionality, you can leave Solr unconfigured.

.. _faq-customize:

Can I customize the TypoScript configuration?
---------------------------------------------

Yes! The extension provides base configurations that you can override in your
site package TypoScript.

.. _faq-troubleshooting:

Troubleshooting
===============

.. _faq-cache-issues:

Pages not updating after changes?
---------------------------------

Try clearing all caches:

.. code-block:: bash

   vendor/bin/typo3 cache:flush

.. _faq-typoscript-not-found:

TypoScript template not showing?
--------------------------------

1. Ensure the extension is activated
2. Clear all caches
3. Check that your TypoScript record is on the root page
