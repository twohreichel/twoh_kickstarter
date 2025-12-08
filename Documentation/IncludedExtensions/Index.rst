..  include:: /Includes.rst.txt

.. _included-extensions:

===================
Included Extensions
===================

The TWOH Kickstarter bundles and configures the following extensions to provide
a solid foundation for your TYPO3 project.

.. _extensions-overview:

Overview
========

.. list-table::
   :header-rows: 1
   :widths: 25 75

   * - Extension
     - Description
   * - b13/container
     - Container elements for flexible backend layouts
   * - staticfilecache
     - Static file caching for better performance
   * - sourceopt
     - Source code optimization and minification
   * - twoh/twoh_base
     - Base configuration and utility package
   * - twoh/twoh_tiny_png
     - TinyPNG image compression integration
   * - yoast_seo
     - Yoast SEO for TYPO3
   * - solr
     - Apache Solr search integration

.. _extension-container:

b13/container
=============

**Purpose:** Provides flexible container elements for the TYPO3 backend.

**Features:**

*  Create custom container elements
*  Flexible grid layouts
*  Easy content grouping

**Repository:** `github.com/b13/container <https://github.com/b13/container>`__

.. _extension-staticfilecache:

StaticFileCache
===============

**Purpose:** Caches pages as static HTML files for maximum performance.

**Features:**

*  Generates static HTML files
*  Reduces server load significantly
*  Configurable cache rules

**Repository:** `github.com/lochmueller/staticfilecache <https://github.com/lochmueller/staticfilecache>`__

.. _extension-sourceopt:

SourceOpt
=========

**Purpose:** Optimizes the HTML source code output.

**Features:**

*  HTML minification
*  Whitespace removal
*  Comment stripping

**Repository:** `github.com/lochmueller/sourceopt <https://github.com/lochmueller/sourceopt>`__

.. _extension-twoh-base:

TWOH Base
=========

**Purpose:** Provides base configuration and utilities for TWOH extensions.

**Features:**

*  Common utility classes
*  Base TypoScript configuration
*  Shared resources

**Repository:** `github.com/twohreichel/twoh_base <https://github.com/twohreichel/twoh_base>`__

.. _extension-twoh-tiny-png:

TWOH TinyPNG
============

**Purpose:** Integrates TinyPNG for automatic image compression.

**Features:**

*  Automatic image optimization on upload
*  PNG and JPEG compression
*  Significant file size reduction

**Configuration:**

Requires a TinyPNG API key. Get one at `tinypng.com/developers <https://tinypng.com/developers>`__.

**Repository:** `github.com/twohreichel/twoh_tiny_png <https://github.com/twohreichel/twoh_tiny_png>`__

.. _extension-yoast-seo:

Yoast SEO
=========

**Purpose:** Professional SEO optimization for TYPO3.

**Features:**

*  Real-time content analysis
*  SEO score indicators
*  Readability analysis
*  Social media preview
*  Focus keyword optimization

**Repository:** `github.com/Yoast/Yoast-SEO-for-TYPO3 <https://github.com/Yoast/Yoast-SEO-for-TYPO3>`__

.. _extension-solr:

Apache Solr for TYPO3
=====================

**Purpose:** Enterprise search functionality with Apache Solr.

**Features:**

*  Full-text search
*  Faceted search
*  Autocomplete suggestions
*  Search statistics

**Requirements:**

Requires a running Apache Solr server.

**Repository:** `github.com/TYPO3-Solr/ext-solr <https://github.com/TYPO3-Solr/ext-solr>`__

.. _extension-dependencies:

TYPO3 Core Dependencies
=======================

The extension also requires these TYPO3 core extensions:

*  **fluid_styled_content** - Fluid-based content rendering
*  **seo** - Core SEO features (meta tags, sitemaps)
*  **form** - Form handling extension
