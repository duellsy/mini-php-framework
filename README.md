# Mini PHP Framework

* Version: 0.1

## Team

* [Chris Duell](http://www.subooa.com.au/)

## Description

Mini PHP Framework (MPF) is a quick and simple framework for small websites.

## Installation

To get a simple site up and running, you will need to create a file called mpf_config.php which you can base off the mpf_config.php.template file, change the path variable to match your sites location.

You will also need to create a .htaccess file (base this off the htaccess.template file) and also edit the RewriteBase rule on the fourth line to match your sites location.

After that, you should be able to fire up the site and see it working.

## Adding pages

To create a new page, simply duplicate an existing page in the pages folder, and edit it as you see fit.

In the example theme provided, the menu is broken out into a separate file, theme/example/assets/main_nav.php, you can edit this file to add new menu items.

## Custom themes

You can use the provided them, or simply roll your own by creating a new folder in the theme folder. You will need to at least have a default.php file in there, as this is the default layout that is called.

You can override which layout is called by adding a line in the pages top config items such as $config['layout'] = 'custom' (see the 404 page for an example of this)