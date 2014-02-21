Auto Thumbnail WP-CLI
===================

This plugin adds the `auto-thumbnail` command to the [WP-CLI](https://github.com/wp-cli/wp-cli) command line. 
When run, `auto-thumbnail`, queries all posts without featured images (post thumbnails) and set the first attached image as the featured image. 
If you are unfamiliar with [WP-CLI](https://github.com/wp-cli/wp-cli) or command line, this plugin isn't for you. 

Usage:

```
wp auto-thumbnail
```

Limit to post type 

```
wp auto-thumbnail --post_type=page
```

Limit number of posts

```
wp auto-thumbnail --posts_per_page=-1
```

## Installation

This section describes how to install the plugin and get it working.


### Using The WordPress Dashboard 

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'auto-thumbnail-wp-cli'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

### Uploading in WordPress Dashboard

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `auto-thumbnail-wp-cli.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

### Using FTP 
1. Download `auto-thumbnail-wp-cli.zip`
2. Extract the `auto-thumbnail-wp-cli` directory to your computer
3. Upload the `auto-thumbnail-wp-cli` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard


## GitHub Updater

The Super Simple Events includes native support for the [GitHub Updater](https://github.com/afragen/github-updater) which allows you to provide updates to your WordPress plugin from GitHub.

## License

The Super Simple Events is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

> You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA


## Contributions

Anyone is welcome to contribute to Super Simple Events

There are various ways you can contribute:

* Raise an issue on GitHub.
* Send us a Pull Request with your bug fixes and/or new features.
* Provide feedback and suggestions on enhancements.

## Credits 

This plugin was written by the development team at [IPC Media](http://www.ipcmedia.com/) and maintained by [@spacedmonkey](https://github.com/spacedmonkey/).
