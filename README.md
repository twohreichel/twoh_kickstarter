# TWOH Atom (Kickstarter)

This extension serves as a kickstart for the creation and reuse of TYPO3 projects. Additional required extensions expand your TYPO3 with performance and SEO optimizations.

## Minimum requirements

* **PHP** 8
* **composer** ^2
* **TYPO3** 12

## Setup

##### Install

* install Extension via Composer or FTP
* include Extension in TypoScript **ROOT Template**
* include Extension in Page TS **ROOT**
* start commands below

##### Header & Footer

You can set the Header and Footer Menu PID's over TypoScript or Backend constants.

```
headerMenu = {$plugin.tx_twohatom.settings.headerMenu}
footerMenu = {$plugin.tx_twohatom.settings.footerMenu}
```

##### Grid Layout

We use **container**.

##### Accessibility

Check out the [Accessibility] for your Webpage.
https://www.npmjs.com/package/a11y-sitechecker

##### Performance and SEO

You can find an optimized .htaccess file in ext directory.
Also set **compressionLevel** to ```9``` in **FE** and **BE** Configuration.

###### Yoast SEO plugin

If you install our extension with composer, then the [YoastSeo](https://extensions.typo3.org/extension/yoast_seo) plugin
will also be installed.

###### Scheme.org

We recommend to stick to [Scheme.org](https://schema.org/docs/gs.html) when building the HTML5 structure. See our
contact module as an example.
Please use also the [Scheme.org Validator](https://validator.schema.org/)