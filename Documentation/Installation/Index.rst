..  include:: /Includes.rst.txt

.. _installation:

============
Installation
============

.. _requirements:

Requirements
============

The extension has the following requirements:

.. list-table::
   :header-rows: 1

   * - Requirement
     - Version
   * - PHP
     - 8.2 - 8.4
   * - TYPO3
     - 13.4+
   * - Composer
     - 2.x (recommended)

.. _installation-composer:

Installation via Composer (recommended)
=======================================

The recommended way to install this extension is via Composer.

.. code-block:: bash

   composer require twoh/twoh_kickstarter

After installation, flush all caches:

.. code-block:: bash

   vendor/bin/typo3 cache:flush

.. _installation-extensionmanager:

Installation via Extension Manager
==================================

.. note::
   Installation via the Extension Manager is possible but not recommended for
   TYPO3 v13 projects as Composer mode is the standard.

1. Download the extension from the TYPO3 Extension Repository (TER)
2. Upload to :file:`packages/twoh_kickstarter` or :file:`typo3conf/ext/twoh_kickstarter`
3. Activate the extension in the Extension Manager

.. _installation-activate:

Activate the Extension
======================

After installation via Composer, the extension is automatically activated.
If you installed it manually, activate it in the TYPO3 Backend:

1. Go to :guilabel:`Admin Tools > Extensions`
2. Search for "TWOH Kickstarter"
3. Click the :guilabel:`Activate` button

.. _installation-verify:

Verify Installation
===================

To verify the installation was successful:

1. Check that no errors appear in the TYPO3 backend
2. Navigate to :guilabel:`Site Management > TypoScript`
3. Verify that the "TWOH Kickstarter" static template is available

.. _next-steps:

Next Steps
==========

After installation, continue with the :ref:`configuration` section to learn
how to set up the extension for your project.
