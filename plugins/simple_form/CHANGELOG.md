# v1.2.6
## 02/06/2015

1. [](#bugfix)
    * Added the missed validation for required into select field.

# v1.2.5
## 02/06/2015

1. [](#bugfix)
    * Fixed bug in the Twig function without passing token value.
    
1. [](#improved)
    * Added select support in the dinamic fields.

# v1.2.4
## 02/04/2015

1. [](#bugfix)
    * Change name for internal method mergeConfig to mergePluginConfig.

# v1.2.3
## 02/04/2015

1. [](#improved)
    * Update blueprints.yaml.

# v1.2.2
## 01/13/2015

1. [](#bugfix)
    * If field type not defined use text instead into template file.

# v1.2.1
## 01/10/2015

1. [](#improved)
    * Add partial support for plugin configuration on Admin Plugin.

# v1.2.0
## 01/06/2015

1. [](#new)
    * Add twig function for use this plugin. You need to read with attenction the [README](README.md).

# v1.1.2
## 12/30/2014

1. [](#improved)
    * Change tab size again to 2 for yaml/markdown problem. Easy way.

# v1.1.1
## 12/30/2014

1. [](#bugfix)
    * Fix problem with render template and Markdown.

# v1.1.0
## 12/29/2014

1. [](#bugfix)
    * Fix issue with cache content.

1. [](#improved)
    * Change tab size to 4 from 2.
    * Update code design to PSR-2.

1. [](#new)
    * Removed <code>auto_content</code> key from config/plugin. If you want overwrite the content, simply put the <code>{[simple_form]}</code> short code only in the page content.
    * Added the _configuration/page header_ key <code>short_code</code> for change the default short code key from <code>simple_form</code> to <code>my_short_code_key</code>.
    * Added the _configuration/page header_ key <code>template_file</code> for change the default template file name <code>simple_form.html.twig</code> to another one. This is need when you want have more then one simple form in your site.

# v1.0.1
## 12/23/2014

1. [](#bugfix)
    * Fixed bug when in the page header use <code>simple_form: false</code>.
    * Fixed bug for the page not see, now use collection and page to filter the form.

1. [](#improved)
    * Added <code>number</code>, <code>url</code>, <code>range</code>, <code>date</code> for field type.
    * Use a private method to filter the form.

# v1.0.0
## 12/23/2014

1. [](#new)
    * Release development version.
