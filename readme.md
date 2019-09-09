# HuC Wordpress Project themes
## Description
This Wordpress Gutenberg theme provides a basic theme for research project.

## Features
* Hero image with introduction text.
* Partner logo gallery
* Homepage Block items
* News
* Blogs
* Project members list
* Project members personal page
* List of publications
* List of presentations

## Development
This theme is build with Gulp. Gulp runs on Node.js / NPM. [Here's a Gulp install guide](https://gulpjs.com/docs/en/getting-started/quick-start). With every change it builds a theme in the `_dist` folder. You have to add a .json file in the `content/data`. This file lets you copy the theme to your localhost [for testing with MAMP for example](https://www.mamp.info/en/).

The name of the file should be `copyPath.json` and it contain this json code:
```
{
  "copyDestination": "/path/to/your/MAMP/httpdocs/wp-content/themes/wp-huc-theme"
}
```

## Use in Wordpress
Copy the folder `wp-huc-theme` in `_dist` to theme's folder on your Wordpress server.

## Configuration in Wordpress
Goto
