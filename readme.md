# HuC Wordpress Project theme
## Description
This Wordpress Gutenberg theme provides a basic theme for research project. It handles your team members and publications.

## Features
* Hero image with introduction text.
* Partner logo gallery
* Homepage block items
* News
* Blogs
* Project members list
* Project members personal page
* List of publications
* List of presentations
* Add analytics code

## Development
This theme is build with Gulp. Gulp runs on Node.js / NPM. [Here's a Gulp install guide](https://gulpjs.com/docs/en/getting-started/quick-start). With every change it builds a theme in the `_dist` folder. You have to add a .json file in the `content/data`. This file lets you copy the theme to your localhost [for testing with MAMP for example](https://www.mamp.info/en/).

The name of the file should be `copyPath.json` and it contain this json code:
```
{
  "copyDestination": "/path/to/your/MAMP/httpdocs/wp-content/themes/wp-huc-theme"
}
```

## Install in Wordpress
* Copy the folder `wp-huc-theme` in `_dist` to theme's folder on your Wordpress server.
* Install the [Pods plugin](https://wordpress.org/plugins/pods/) and activate it.
* Go to `wp-admin/admin.php?page=pods-components` and enable _Migrate: Packages_.
* Copy the content of `data/pods.json`
* Go to `wp-admin/admin.php?page=pods-component-migrate-packages` click import and paste the code.

## Configuration in Wordpress
* Select a page, that will be the homepage. Select the `Home split screen` template.
* Go to Appearance / Customize.
* Homepage settings: select _A static page_ and select the page.
* Homepage elements: Tick the modules you want to use.
* Site identity: Set the logo, title, tag line and favicon. If no logo is selected the title will appear on top of the page.
* Home split Screen: Set the homepage split screen. Select the images and colors.
* Colors: Set then branding colors.
* Footer: Type the text for the footer columns. Add a Twitter handle for a Twitter link.
* Analytics code: Add your Analytics code
* Use for Huygens eLaborate editions.

## content
* Import [/extra/data/wp-partners.xml](https://github.com/knaw-huc/wordpress-default-huc-theme/blob/master/extra/data/wp-partners.xml)
* Upload [partner logos](https://github.com/knaw-huc/wordpress-default-huc-theme/tree/master/extra/images/partners) to your media.
