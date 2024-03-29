# Widgets Reloaded

The default WordPress widgets don't offer much control over how they are output on the screen.  Widgets Reloaded seeks to correct this problem.

This plugin replaces many of the default widgets with versions that allow much more control.  Widgets come with highly customizable control panels.  Each widget can also be used any number of times.

## Features

The plugin overwrites many of the default WordPress widgets.  The following is the list of custom widgets the plugin offers.

* Archives
* Authors
* Bookmarks (Links)
* Calendar
* Categories
* Navigation Menu
* Pages
* Search
* Tags

## Changelog

### Version 0.5.1

* Added an upgrade notice for users below 0.5.0.
* Added a fix for users of the MP6 plugin who are having issues with widget controls.

### Version 0.5.0

* Overhauled how the entire plugin works.
* Ported in new versions of the widgets from the Hybrid Core framework.
* Users of Hybrid Core-based themes can now use this plugin and the theme at the same time.
* Recent Posts widget is no longer disabled.

### Version 0.4.1

* `WP_DEBUG` notices fixes so that the plugin is a bit cleaner and uses best practices.

### Version 0.4.0

* Revamped each of the widgets individually to be much easier to use (lots of pointing and clicking instead of typing in IDs).
* Loads of new options and things to play around with.
* Added the Navigation Menu widget to use the WordPress 3.0 nav menus.
* Moved the language files into the `languages` folder.
* Note that you may need to re-save your widget settings upon upgrade.

### Version 0.3.0

* The widgets are now completely ported over from the Hybrid theme framework. This just makes more sense than dealing with two separate codebases.
* Individual widget files now begin with `widget-`.
* The Categories widget now has a `search` option and the `orderby` option has two new parameters: `slug` and `term_group`.
* Added a `search` and `title_li` option for the Bookmarks widget.
* Added `separator`, `search`, `name__like`, `pad_counts`, `parent`, `child_of`, and `hide_empty` options for the Tags widget.
* Added a `number` and `offset` option for the Pages widget.
* Fixed the `show_post_count` option in the Archives widget.

### Version 0.2.0

* Completely rewrote every line of code to work with the WordPress 2.8+ widget API.
* By God, I'm not going to document every one of those changes.
* You'll likely have to re-add your widgets once you've upgraded because of the new widget system in WordPress.

### Version 0.1.2

* Code cleanup.
* Added the Calendar widget.

### Version 0.1.1

* Cleaned up a lot of the code.
* Fixed a few bugs.
* Added the Authors widget.

### Version 0.1.0

* Plugin launch.

## Professional Support

If you need professional plugin support from me, the plugin author, you can access the support forums at [Theme Hybrid](http://themehybrid.com/support), which is a professional WordPress help/support site where I handle support for all my plugins and themes for a community of 40,000+ users (and growing).

## Copyright and License

This project is licensed under the [GNU GPL](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.

2008&thinsp;&ndash;&thinsp;2013 &copy; [Justin Tadlock](http://justintadlock.com).