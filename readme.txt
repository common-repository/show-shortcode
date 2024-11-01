=== Show Shortcode ===
Contributors: Pat Friedl
Donate link: http://www.adffiliatetechhelp.com
Tags: Plugin development, Shortcode, Show Shortcode, Display Shortcode, Format Shortcode

Requires at least: 3.0
Tested up to: 3.2.1
Stable tag: 1.0

Show Shortcode lets plugin developers display the shortcodes for their plugins/themes with no extra formatting.

== Description ==

Show Shortcode is a plugin that lets plugin developers display their shortcodes without executing them and without any special formatting or extra work. No HTML tricks or hacks, no raw editing in the HTML view! Just wrap your shortcode in the [showshortcode] tags and it will display your shortcode as plain text.

Available shortcodes:

[showshortcode]
[showsc]
[ssc]

All shortcodes perform the same task. Add the optional parameter linebreak=1 to add a &lt;br /&gt; tag to the end of the shortcode

== Installation ==

1. Upload `show-shortcode` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the `Plugins` menu in WordPress
3. Use any of the following shortcodes in your posts or pages:
   Available Shortcodes:

	[showshortcode][your-shortcode-here][/showshortcode]
	[showsc][your-shortcode-here][/showsc]
	[ssc][your-shortcode-here][ssc]

All shortcodes perform the same task. Add the optional parameter linebreak=1 to add a &lt;br /&gt; tag to the end of the shortcode

== Changelog ==

= 1.0 =
* New code