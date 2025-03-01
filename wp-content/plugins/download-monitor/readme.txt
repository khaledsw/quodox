=== Download Monitor ===
Contributors: never5, barrykooij, mikejolley, hchouhan
Donate link: http://www.barrykooij.com/donate/
Tags: download, downloads, monitor, hits, download monitor, tracking, admin, count, counter, files, versions, download count, logging, AJAX, digital, documents, download category, download manager, download template, downloadmanager, file manager, file tree, grid, hits, ip-address, manager, media, monitor, password, protect downloads, tracker
Requires at least: 3.8
Tested up to: 4.5.2
Stable tag: 1.9.4
License: GPLv3

Download Monitor is a plugin for uploading and managing downloads, tracking downloads, and displaying links.

== Description ==

Download Monitor provides an interface for uploading and managing downloadable files (including support for multiple versions), inserting download links into posts, and logging downloads.

= Features =

* Add, edit and remove downloads from a familiar WP interface; Your downloads are just like posts.
* Quick-add panel for adding downloads / files whilst editing posts.
* Add multiple file versions to your downloads each with their own data like download count and file links.
* Define alternative links (mirrors) per download version.
* Categorize, tag, or add other meta to your downloads.
* Display download links on the frontend using shortcodes.
* Change the way download links get displayed via template files.
* Track downloads counts and log user download attempts.
* Member only downloads, requires users to be logged in to download your files.
* Customisable endpoints for showing pretty download links.

[Read more about Download Monitor](https://www.download-monitor.com/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-after-features).

> #### Download Monitor Extensions
> Extend the core Download Monitor plugin with it's powerful extensions. All extensions come with one year of updates and support.<br />
>
> Some of our popular extensions include: [Page Addon](https://www.download-monitor.com/extensions/page-addon/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-block-page-addon), [Email Lock](https://www.download-monitor.com/extensions/email-lock/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-block-email-lock), [CSV Importer](https://www.download-monitor.com/extensions/csv-importer/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-block-csv-importer) and [Gravity Forms Lock](https://www.download-monitor.com/extensions/gravity-forms/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-block-gravity-forms-lock).
>
> Want to see more? [Browse All Extensions](https://www.download-monitor.com/extensions/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-block-browse-all)

= Documentation =
We have a large Knowledge Base on our [Download Monitor website](https://www.download-monitor.com/kb/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-documentation) that contains documentation about how to how to setup and use Download Monitor.

Are you a new Download Monitor user? Read these articles on how to get your files ready for download with Download Monitor:

1. [How to install Download Monitor](https://www.download-monitor.com/kb/installation/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-documentation)
2. [How to add your first download in Download Monitor](https://www.download-monitor.com/kb/adding-downloads/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-documentation)
3. [How to list your first download on your website with the download shortcode](https://www.download-monitor.com/kb/shortcode-download/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-documentation)

More advanced topics that a lot of people find interesting:

1. [Learn more about the different ways you can style your download buttons](https://www.download-monitor.com/kb/content-templates/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-documentation)
2. [Learn more about how to customize your download buttons](https://www.download-monitor.com/kb/overriding-content-templates/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-documentation)
3. [Learn more about what actions and filters are available in Download Monitor](https://www.download-monitor.com/kb/action-and-filter-reference/?utm_source=wp-plugin-repo&utm_medium=link&utm_campaign=description-documentation)

= Contributing and reporting bugs =

You can contribute code to this plugin via GitHub: [https://github.com/download-monitor/download-monitor](https://github.com/download-monitor/download-monitor)

You can contribute localizations via Transifex [https://www.transifex.com/projects/p/download-monitor/](https://www.transifex.com/projects/p/download-monitor/)

= Support =

Use the WordPress.org forums for community support. If you spot a bug, you can of course log it on [Github](https://github.com/download-monitor/download-monitor) instead where we can act upon it more efficiently.

Unfortunately we can't offer you help with a customisation. Please consider hiring a developer for your website's customizations.

== Installation ==

= Automatic installation =

Automatic installation is the easiest option as WordPress handles the file transfers itself and you don't even need to leave your web browser. To do an automatic install, log in to your WordPress admin panel, navigate to the Plugins menu and click Add New.

In the search field type "Download Monitor" and click Search Plugins. Once you've found the plugin you can view details about it such as the the point release, rating and description. Most importantly of course, you can install it by clicking _Install Now_.

= Manual installation =

The manual installation method involves downloading the plugin and uploading it to your webserver via your favourite FTP application.

* Download the plugin file to your computer and unzip it
* Using an FTP program, or your hosting control panel, upload the unzipped plugin folder to your WordPress installation's `wp-content/plugins/` directory.
* Activate the plugin from the Plugins menu within the WordPress admin.

== Frequently Asked Questions ==

= Can I upload .xxx filetype using the uploader? =

Download Monitor uses the WordPress uploader for uploading files. By default these formats are supported:

* Images - .jpg, .jpeg, .png, .gif
* Documents - .pdf, .doc, .docx, .ppt, .pptx, .pps, .ppsx, .odt, .xls, .xlsx
* Music - .mp3, .m4a, .ogg, .wav
* Video - .mp4, .m4v, .mov, .wmv, .avi, .mpg, .ogv, .3gp, .3g2

To add more you can use a plugin, or filters. This post is a good resource for doing it with filters: [Change WordPress Upload Mime Types](http://www.paulund.co.uk/change-wordpress-upload-mime-types).

= Can I link to external downloads? =

Yes, you can use both local paths and external URLs.

= My Download links 404 =

Download links are powered by endpoints. If you find them 404'ing, go to Settings > Permalinks and save. This will flush the permalinks and allow our endpoints to be added.

= Download counts are not increasing when I download something =

Admin hits are not counted, log out and try!

= I used this before, so why is this version 1? =

Version 1.0.0 is a fresh start/complete rewrite of the legacy 3.0 version using modern best-practices such as custom post types and endpoints. Because of this, data from the legacy plugin won't work without migration using [the legacy importer](https://www.download-monitor.com/extensions/dlm-legacy-importer/). Since this upgrade process isn't straightforward nor automated I've reverted the version to 1.0.0 to prevent automatic updates.

More documentation can be found in our [Knowledge Base](https://www.download-monitor.com/kb/).

== Screenshots ==

1. The main admin screen lists your downloads using familiar WordPress UI.
2. Easily add file information and multiple versions.
3. The quick add panel can be opened via a link about the post editor. This lets you quickly add a file and insert it into a post.
4. Display regular download links or fancy ones all using shortcodes and templates.

== Changelog ==

= 1.9.4: May 2, 2016 =
* Tweak: Various cookie tweaks to prevent incorrect double logging entries.
* Tweak: Added a Cookie Manager class to centralize cookie related tasks.

= 1.9.3: April 11, 2016 =
* Tweak: Small rework of [downloads] loop. Downloads now filterable per download via dlm_shortcode_downloads_loop_download.
* Tweak: We now report missing versions for removed downloads in logs, props [Matt Mower](https://github.com/mdmower).
* Tweak: Updated Danish translation, props [Georg Adamsen](https://github.com/GSAdev).

= 1.9.2: March 27, 2016 =
* Tweak: Fixed bug where 'version' and 'version_id' were ignored in [download].
* Tweak: Fixed a bug that caused the file upload overlay to append file URL to wrong version, props [kraftner](https://github.com/kraftner).
* Tweak: Optimized [download] shortcode code.
* Tweak: Flush rewrites in admin settings on shutdown instead of during page load, props [sybrew](https://github.com/sybrew).
* Tweak: Added extra checks to blacklist checks to prevent stristr empty needle notices, props [Matt Mower](https://github.com/mdmower).
* Tweak: Removed DS_Store backups, props [Matt Mower](https://github.com/mdmower).
* Tweak: Added Ukrainian translation, props [Fremler](https://www.transifex.com/user/profile/Fremler/).
* Tweak: Added Croatian translation, props [molekula](https://www.transifex.com/user/profile/molekula/).
* Tweak: Updated Dutch translation.
* Tweak: Updated Portuguese (Brazil) translation.

= 1.9.1: December 1, 2015 =
* Tweak: Check if $visitor_ua isn't empty to prevent stristr warnings.
* Tweak: Added wmv filetype icon support
* Tweak: Correctly populate data on quick edit of download.
* Tweak: Settings tab now loads tab of set URL hash.

= 1.9.0: September 15, 2015 =
* Feature: We added a separate 'No Access' page that includes the following features:
* No Access Page : Added [dlm_no_access] shortcode that displays the no access content.
* No Access Page : Added new option in Access settings tab to set No Access Page.
* No Access Page : Added new template file for no access page.
* No Access Page : We now redirect to set No Access page (if set) when user has no access to download.
* Feature: Added ability to remove log entries.
* Feature: Added browser detection for IE 11 and up.
* Feature: Added OS detection for Windows 8.1
* Feature: Added OS detection for Windows 10
* Feature: Added Featured download, Members only and Redirect to file to bulk edit options.
* Feature: Added Featured download, Members only and Redirect to file to quick edit options.

= 1.8.1: August 21, 2015 =
* Tweak: Small tweak to make download count fit better in box template.
* Tweak: Fixed a zero file size bug.
* Tweak: Fixed featured image disappears bug, props [Ricardo](https://wordpress.org/support/profile/ricardopires).
* Tweak: Search template file in custom path before in plugin path.

= 1.8.0: July 10, 2015 =
* Feature: Added option to only count downloads and add logs from unique ip addresses, props [Matt Mower](https://github.com/mdmower).
* Feature: It's now possible to display downloads with the downloads shortcode that are in all given categories (AND instead of OR) by using + (plus_ instead of , (comma).
* Feature: Display nginx rules if server is running nginx.
* Feature: Added Multisite / Network compatibility.
* Feature: Redone blacklist IP feature, now available in the 'Access' tab.
* Feature: Redone blacklist user agent feature, now available in the 'Access' tab.
* Tweak: Added icon support for Office X Excel & PPT extensions.
* Tweak: Run thumbnail compatibility method later to allowed themes to register first.
* Tweak: Prefixed admin CSS classes to prevent plugin conflicts.
* Tweak: Fix checking shortcodes for empty version strings, props [Matt Mower](https://github.com/mdmower).
* Tweak: Fixed a call of trigger() in DLM_Download_Handler, props [Matt Mower](https://github.com/mdmower).
* Tweak: Remove trailing space from downloads count, props [Matt Mower](https://github.com/mdmower).
* Tweak: Directory browser items are now always in alphabetical order, props [Matt Mower](https://github.com/mdmower).
* Tweak: The 60 seconds download counter increment cool down is now set to version ID instead of download ID, props [Matt Mower](https://github.com/mdmower).
* Tweak: Created and implemented local independent basename fixing issues with Cyrillic alphabets.
* Tweak: Made user agents regexes filterable: dlm_ua_parser_regexes.
* Tweak: Optimized log status icons, also fixes WP emoji conflict.
* Tweak: Members Only check now only does check if requester can still download.
* Tweak: Replaced PHP4 constructors in widget.
* Tweak: Added Danish translation.
* Tweak: Updated Dutch translation.
* Tweak: Updated German translation.

= 1.7.2: April 29, 2015 =
* Tweak: Fixed a bug that caused logs not to be displayed in WP 4.2.

= 1.7.1: April 17, 2015 =
* Tweak: Pass third arg to add_query_arg to prevent XSS.

= 1.7.0: March 22, 2015 =
* Feature: Added 'Download Information' meta box to edit download screen that displays useful download information.
* Feature: Error message shown when visitor has no access to download is now an option.
* Tweak: Fixing a bug where versions with spaces did not work, versions now are checked on a sanitized title.
* Tweak: Viewing logs now needs custom capability: dlm_manage_logs (automatically added to administrators).
* Tweak: Improved hotlink prevention check.
* Tweak: Extension page tweaks.
* Tweak: Added $download_id argument to dlm_hotlink_redirect filter.
* Tweak: Moved hash settings to their own tab.
* Tweak: Moved 'X-Accel-Redirect / X-Sendfile' and 'Prevent hotlinking' settings to General tab.
* Tweak: Optimized the Insert Download button.
* Tweak: Introduced a multi-byte-safe pathinfo so we can handle 'special' filenames.
* Tweak: Also set the post_date_gmt value for version dates.
* Tweak: Updated French translation. Props Li-An.
* Tweak: Updated German translation. Props maphy-psd.
* Tweak: Updated Swedish translation. Props EyesX.
* Tweak: Update Slovakian translation. Props attitude.
* Tweak: Added Dutch translation.

= 1.6.4: March 8, 2015 =
* Removed unused library jqueryFileTree.
* dlm_shortcode_download_content filter now also includes $atts.
* Fixed small parse file parse error because of whitespace.
* Changed some admin menu hook priorities.

= 1.6.3: January 18, 2015 =
* Fixed an undefined method call 'get_filesize'.
* Allow third party extensions to hijack [downloads] shortcode with filter dlm_shortcode_download_content.
* Made 'wp_dlm_downloading' cookie only accessible through the HTTP protocol, props [Matt Mower](https://github.com/mdmower).

= 1.6.2: January 11, 2015 =
* Fixed a bug that caused translations not to load.
* Fixed a bug that prevented download versions from being removed.
* Fixed a pagination in 'insert download' shortcode bug.
* Fixed a bug in the template loader when used with a custom directory, a slug and no custom template.
* Removed assigning by reference, fixed strict notice when deleting downloads.
* Tweaked template loader to accept arguments.
* Allow downloads shortcode WP_Query arguments to be filtered with 'dlm_shortcode_downloads_args'.

= 1.6.1: January 9, 2015 =
* Fixed an extension activation error.
* Fixed a bug that caused the featured image to disappear in some themes.
* Tweak: In multisite only users that are a member of the blog can download 'member only' downloads.

= 1.6.0: January 8, 2015 =
* Plugin is now initiated at plugins_loaded.
* Implemented auto loader.
* Classes are no longer initiated at bottom of class file but whenever an object is needed.
* Code standards corrections.
* Introduced Template_Handler. Loading of template parts should be done through this class.
* Removed $GLOBALS['dlm_logging'] global.
* Removed $GLOBALS['DLM_Download_Handler'] global.
* Removed internal use of $download_monitor global.
* Moved all inline JavaScript to separate JavaScript files.
* Moved all install related code to installer class.
* Moved main plugin class to it's own file.
* Deprecated 'dlm_create_log' function.
* Redone extensions page.
* Fixed a bug in shortcode download where orderby=download_count wasn't working.
* Fixed a bug where downloads didn't work with default WP permalink structure.
* Delete dlm_file_version_ids_ transient on save.
* Added dlm_download_headers filter.
* Added dlm_get_template_part filter.

= 1.5.1 =
* Fallback for JSON_UNESCAPED_UNICODE to fix accented characters on < PHP 5.4.
* Changed default orderby for downloads shortcode to date, desc.

= 1.5.0 =
* JSON_UNESCAPED_UNICODE for files to fix unicode chars when json encoded. Fix needs PHP 5.4+ to work, but won't break lower versions.
* Style filetype-docx
* Update get_version_id to work with non-numeric versions.
* Fix shortcode arg booleans.
* Add transient cache for get_file_version_ids.
* Moved all translations to Transifex - https://www.transifex.com/projects/p/download-monitor/
* Changed text domain from download_monitor to download-monitor.
* Added Grunt.
* Added options to generate file hashes DISABLED BY DEFAULT as they can cause performance issues with large files.

= 1.4.4 =
* Use home_dir instead of site_dir - fixes hot-linking protections against own site (when not in root dir)
* Replace hardcoded WP_CONTENT_DIR and WP_CONTENT_URL with wp_upload_dir to work when UPLOADS and UPLOADS_URL constants are set.
* Added some filters for hotlink protection customisation.

= 1.4.3 =
* Add password form to download page when required
* Run shortcodes in excerpt/short desc
* Various hook additions
* pr_br and zh_cn translation
* Sort download count by meta_value_num
* Store URLs in JSON format to allow easier search/replace
* Fix dashboard sorting
* Option for basic referer checking to prevent hotlinking.
* Only get file hashes on save as they are resource heavy.
* Disable remote file hash generation, but can be enabled with filter dlm_allow_remote_hash_file
* Radio buttons instead of select (with pagination) in popup to improve performance.

= 1.4.2 =
* Fix for site_url -> abspath
* Check if hash functions are supported before use.

= 1.4.1 =
* Fix file_exists error in download handlers

= 1.4.0 =
* MP6/3.8 admin styling. Requires 3.8.
* Polish translation.
* Turkish translation.
* Change capability required to view dashboard widget.
* Don't show "insert download" when editing a download.
* Allow pagination for the [downloads] shortcode. Simply add paginate=true to the shortcode.
* Reverted flush change in download handler to reduce memory usage on some hosting envrionments
* changed download handlers and fixed corruption when resuming files
* Calculate md5/sha1/crc32 hashes for files. Obtainable via methods or download_data, e.g. [download_data id="86" data="md5"]
* Added file_date data

= 1.3.2 =
* Cleaned up log table queries
* Tweaked download handler headers
* Tweaked logging
* Limit UA to 200
* Setcookie to prevent double logging
* Addons page (disable using add_filter( 'dlm_show_addons_page', '__return_false' ); )

= 1.3.1 =
* Added some new hooks
* FR and SR_RS updates

= 1.3.0 =
* Fix 0kb downloads in some hosting enviroments
* Added button to delete logs
* Fixed log page when no logs are present
* FR and HU updates
* Added dropdown for the default template option to make available templates more obvious
* Added version-list and title templates

= 1.2.0 =
* Option to redirect to files only (do not force)
* Fixed textdomains
* HU translation by Győző Farkas
* Fix dlm_upload folder when not using month/day upload folders.
* Fix IP lookup
* Resumable download support
* Tweaked download handler

= 1.1.2 =
* HTTPS headers for IE fix
* Italian locale

= 1.1.1 =
* Specify error statuses on wp_die messages e.g. 404 for missing files.
* Moved DONOTCACHEPAGE

= 1.1.0 =
* Fixed admin notices
* Added download link to admin 'file' column for copying and pasting
* Farsi localisation
* Wrapping content in a [download] shortcode will wrap it in a simple link.

= 1.0.6 =
* Hide taxonomies from nav menus
* Fix categories in download_data method.

= 1.0.5 =
* When do_not_force is enabled, still replace abspath with home_url
* Exclude dlm_download from search and disable query var
* Added category_include_children option for downloads shortcode
* Fixed logs time offset.

= 1.0.4 =
* Tweak admin page detection to work when no downloads exist.
* Fix dashboard widget warning.
* Add filters to logs and export csv function.
* Added extra columns to CSV.

= 1.0.3 =
* Fix config page to work with multibyte tab names.
* Japanese locale by hide92795
* Admin CSS/script conditonally loaded
* Versions are now strtolower to be compatible with version_compare and to standardise numbers.

= 1.0.2 =
* Only use wp_remote_head to get fielsize on remote files. Prevents timeouts when a file doesn't exist.
* If a filesize cannot be found, set to -1 to prevent re-tries.
* Insert button added to all CPT except downloads.
* French locale by Jean-Michel MEYER.

= 1.0.1 =
* Update blockui
* Workaround root relative URLS

= 1.0.0 =
* Complete rewrite of the plugin making use of custom post types and other best practices. Fresh start version '1' to prevent auto-updates (legacy importer needs to be used to migrate from old versions).

== Upgrade Notice ==
