=== WP-Memory-Usage ===
Contributors: berkux
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=APWXWK3DF2E22
Tags: memory, admin, php, memory-limit, ip, ips, adress, php, server, info
Requires at least: 5.3
Tested up to: 6.3
Stable tag: 1.2.8
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Show up the PHP version, memory limit and current memory usage in the dashboard and admin footer

== Description ==

New from 1.2.7 on: Multiple Memory Measurement for checking the memory multiple times 
Show up the PHP version, memory limit and current memory usage in the dashboard and admin footer. You can now simple measure the requirements of your plugins and language files.
<a href="https://profiles.wordpress.org/alexrabe/">The plugin was transferred from alexrabe to berkux on Jan 2 2022</a>

== Credits ==

Copyright 2009-2013 by Alex Rabe, 2022- Bernhard Kux

== Screenshots ==

1. Screenshot Dashboard
2. Screenshot Dashboard: Running Multiple Memory Measurement
3. Screenshot Dashboard: Finished Multiple Memory Measurement
4. Screenshot Admin footer

== Changelog ==
= 1.2.8 =
* Fixed situation when WP_MEMORY_LIMIT or WP_MAX_MEMORY_LIMIT is not set, which gives a PHP-Warning when using PHP 8.X. Thank you @PowerMan 
* Improve I18N Issues. Thank you @alexclassroom

= 1.2.7 =
* New feature "Multiple Memory Measurement": Measure the memory multiple times by reloading the page. This gives us measuring points and an average value. With this you can better measure different settings, e. g. switch some plugins off to see the difference.
* If the PHP/WP-Memorylimit is defined as "1G" instead of "1024M" this gives valid output.
* Plugin ok with PHP 8.1
* Plugin ok with Worpdress 6.1.1

= 1.2.6 =
* Fixed translation bug
* New screenshots
* Plugin ok with Worpdress 5.9.3

= 1.2.5 =
* Plugin prepared for Translation, PO-File and de_DE-MO-File added
* Wordpress-Multisite-Installations: Plugin now also in Network-Dashboard
* Plugin ok with Worpdress 5.8.3

= 1.2.4 =
* Reengineered: Used newer functions to measure memory etc.
* consider different Wordpress- and PHP-Memorylimits
* New: German Translation
* New: Added display of IP-Adress and PHP-max-exec-time

= 1.2.3 =
* Plugin ok with PHP 7.2 and WordPress 5.8.2 (fixed some issues) 


