# 🚀 TWOH Kickstarter

[![TYPO3 13](https://img.shields.io/badge/TYPO3-13-orange.svg)](https://get.typo3.org/version/13)
[![PHP 8.2-8.3](https://img.shields.io/badge/PHP-8.2--8.3-blue.svg)](https://www.php.net/)
[![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/gpl-2.0)
[![Latest Version](https://img.shields.io/badge/version-1.0.4-green.svg)](https://github.com/twohreichel/twoh_kickstarter/releases)

> **Kickstart your TYPO3 projects with performance and SEO optimizations out of the box!**

This extension serves as a kickstart for the creation and reuse of TYPO3 projects. Additional required extensions expand your TYPO3 with performance and SEO optimizations.

---

## 📋 Table of Contents

- [Features](#-features)
- [Requirements](#-requirements)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Included Extensions](#-included-extensions)
- [Support](#-support)
- [Authors](#-authors)
- [License](#-license)

---

## ✨ Features

- 🎯 **Quick Project Setup** – Get your TYPO3 project running in minutes
- ⚡ **Performance Optimizations** – Built-in caching and optimization tools
- 🔍 **SEO Ready** – Pre-configured SEO settings with Yoast SEO integration
- 🔎 **Solr Search** – Apache Solr integration out of the box
- 🖼️ **Image Optimization** – Automatic image compression with TinyPNG
- 📦 **Best Practice Configuration** – TypoScript setup following TYPO3 standards

---

## 📌 Requirements

| Requirement | Version |
|-------------|---------|
| PHP | 8.2 - 8.3 |
| Composer | ^2 |
| TYPO3 | 13.4+ |

---

## 📥 Installation

### Via Composer (recommended)

```bash
composer require twoh/twoh_kickstarter
```

### Manual Installation

1. Download the extension
2. Upload to `typo3conf/ext/twoh_kickstarter`
3. Activate in Extension Manager

---

## ⚙️ Configuration

1. **Include TypoScript**
   - Navigate to your root page
   - Edit the TypoScript template
   - Add `TWOH Kickstarter` to the included static templates

2. **Include Page TSconfig**
   - Navigate to your root page
   - Add Page TSconfig in the page properties

3. **Clear caches**
   ```bash
   vendor/bin/typo3 cache:flush
   ```

---

## 📦 Included Extensions

This kickstarter bundles the following extensions:

| Extension | Description |
|-----------|-------------|
| [b13/container](https://github.com/b13/container) | Container elements for flexible layouts |
| [staticfilecache](https://github.com/lochmueller/staticfilecache) | Static file caching for better performance |
| [sourceopt](https://github.com/lochmueller/sourceopt) | Source code optimization |
| [twoh/twoh_base](https://github.com/twohreichel/twoh_base) | Base configuration package |
| [twoh/twoh_tiny_png](https://github.com/twohreichel/twoh_tiny_png) | TinyPNG image compression |
| [yoast_seo](https://github.com/Yoast/Yoast-SEO-for-TYPO3) | Yoast SEO for TYPO3 |
| [solr](https://github.com/TYPO3-Solr/ext-solr) | Apache Solr for TYPO3 |

---

## 🆘 Support

- 🐛 **Issues:** [GitHub Issues](https://github.com/twohreichel/twoh_kickstarter/issues)
- 📖 **Documentation:** [TYPO3 Docs](https://docs.typo3.org/p/twoh/twoh_kickstarter/main/en-us/)
- 💻 **Source:** [GitHub Repository](https://github.com/twohreichel/twoh_kickstarter)

---

## 👥 Authors

| Name | Role | Contact |
|------|------|---------|
| **Andreas Reichel** | Developer | [a.reichel91@outlook.com](mailto:a.reichel91@outlook.com) |
| **Igor Smertin** | Developer | [igor.smertin@web.de](mailto:igor.smertin@web.de) |

---

## 📄 License

This project is licensed under the **GPL-2.0-or-later** license. See the [LICENSE](LICENSE) file for details.

---

<p align="center">
  Made with ❤️ for the TYPO3 community
</p>
