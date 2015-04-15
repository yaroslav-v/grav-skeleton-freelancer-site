# Freelancer Skeleton for Grav

![Freelancer](assets/readme_1.png)

This Grav skeleton is based around the [Freelancer Grav theme](https://github.com/yaroslav-v/grav-theme-freelancer) which in turn, is based on the [Jekyll Agency theme](https://github.com/jeromelachaud/freelancer-theme) by [Jerome Lachaud (jeromelachaud)](https://github.com/jeromelachaud), which originated from the [Freelancer Bootstrap theme by Start Bootstrap](http://startbootstrap.com/templates/freelancer/).

# Demo

Demo of this skeleton can be found here: http://demo.gibstudio.com/grav-freelancer

Additionally added basic localization for content, try:
* http://demo.gibstudio.com/grav-freelancer/en (the same as  http://demo.gibstudio.com/grav-freelancer)
* http://demo.gibstudio.com/grav-freelancer/ru

# Features

* Flat icons by flaticons.com
* LESS files and compiled CSS included
* Fixed top navigation that collapses on scroll
* Scrollspy on navigation items
* Perfectly responsive portfolio grid with hover effects
* Responsive, full screen modal windows for featuring project details
* Custom horizontal rules using Font Awesome icons
* Custom outline button style
* Mobile friendly contact form with floating form labels
* Includes jqBootstrapValidation plugin for contact form validation

## Basic Setup for a new Grav site

The simplest way to install Freelancer theme for Grav is to download and install the Freelancer Skeleton package:

1. [Download Agency Skeleton](https://github.com/yaroslav-v/grav-skeleton-freelancer-site)
2. Simply unzip the package into your web root folder.
3. Point your browser at the folder, job done!

**TIP:** Check out the [general Grav installation instructions](http://learn.getgrav.org/basics/installation) for more details on this process.

---

## Existing Grav site

It is possible to install just the theme, but page content will need to reference the [Freelancer theme](https://github.com/yaroslav-v/grav-theme-freelancer)'s supported templates.  It is strongly advised to at least install the Freelancer Skeleton package to see the theme's capabilities in action.

To install  **just** the theme:

1. Install Grav
2. Install [Simple Form plugin](https://github.com/nunopress/grav-plugin-simple_form)
3. Install [Freelancer theme](https://github.com/yaroslav-v/grav-theme-freelancer)
4. Add additional parameter 'position' for fields in /user/plugins/simple_form/simple_form.yaml to sort fields in necessary order.
5. Update simple_form.php from skeleton installation.
