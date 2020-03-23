# Query String to Object plugin for Craft CMS 3

Craft CMS filter to convert Query String to Object.

---
### Installation
Open your terminal and go to your Craft project:

```bash
cd /path/to/project
```
Run this command to load the plugin:

```bash
composer require amici/craft-querystring-to-object
```

In the Control Panel, go to Settings → Plugins and click the “Install” button for "Query string to Object".

---
### Usage
```bash
{% set obj = craft.app.request.queryStringWithoutPath | queryToObj %}
```

```bash
{% set obj = craft.app.request.queryString | queryToObj %}
```


```
### Documentation
Visit the [Super PDF page](https://docs.amiciinfotech.com/craft/querystring-to-object) for all documentation, guides, pricing and developer resources.

### Support
Get in touch with us via the [Amici Infotech Support](https://amiciinfotech.com/contact) or by [creating a Github issue](https://github.com/amici-infotech/craft-querystring-to-object/issues)
