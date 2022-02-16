=== Wedepohl Engineering Time Since ===
Contributors: mwedepohl
Donate link: https://paypal.me/martinwedepohl
Tags: time, span, years, days
Requires at least: 4.9
Tested up to: 5.9
Stable tag: 1.0.5
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Shortcode to display the number of years or days since a certain date.

== Description ==

Shortcode to return the number of years or days since a certain date.

Usage: `[we_time_since y=Y m=M d=D type="T"]`

Where:
* Y = the year **required**
* M = the month (1 - 12) - **optional** Default = **1**
* D = the day (1-31) - **optional** Default = **1**
* T = the type ("year", "day") - **optional** Default = **"year"**

Returns: 
The number of years or days since the supplied date or an error message if the date is invalid / no year supplied

= Examples =

I have worked at Wedepohl Engineering for `[we_time_since y=1998 m=1 d=1]` years 

I have been sailing for `[we_time_since y=2008 m=4]` years

I have been on this journey for `[we_time_since y=2020 m=5 d=5 type="day"]` days

= Actions =

`before_we_time_since` - Called upon entry to the shortcode. Passed the array of arguments that are passed to the shortcode.
`after_we_time_since` - Called just before exit of the function. Passed the processed array of arguments from the shortcode.

= Filters =

`we_time_since` Called at exit of the function. Passed a string which is the results of the shortcode.

= Active Contributors =
<li>[Martin Wedepohl](https://profiles.wordpress.org/mwedepohl/) (Development)</li>

== Installation ==

1. Upload `we-disable-fs` folder to the `/wp-content/plugins/` directory
2. Navigate to the plugins admin page
3. Click the **Activate** link
4. That's all (no further configuration or settings required)

or

1. Navigate to the plugins admin page
2. Click the **Add New** button
3. Search for `Wedepohl Engineering Time Since`
4. Click the **Install Now** button
5. Click the **Active** button
6. That's all (no further configuration or settings required)

= Removal Instructions =
1. Navigate to the plugins admin page
2. Click the **Deactivate** link
3. Click the **Delete** link
4. That's all (plugin doesn't use the database so there is nothing to cleanup)

== Frequently Asked Questions ==

= Settings =
There are none, just activate and use the shortcode

= Database =
This plugin doesn't use the database at all

= Does this work with WordPress blocks =
Yes, just enter the shortcode in the text of a paragraph or heading

= Does this work with ClassicPress =
Yes, there is nothing WordPress specific

= Issues/Bugs/Features =
1. Go to [Plugin GitHub Page](https://github.com/martin-wedepohl/we-time-since)
2. Create an Issue
3. I will endevor to resolve issues as soon as time permits

== Changelog ==

= 1.0.5 =
Feb 15, 2022
* Tested with WordPress Version 5.9

= 1.0.4 =
Aug 1, 2021
* Tested with WordPress Version 5.8

= 1.0.3 =
February 5, 2021
* Tested with WordPress Version 5.6.1

= 1.0.2 =
October 24, 2020
* Tested with WordPress Version 5.5.1

= 1.0.1 =
June 10, 2020
* Tested with WordPress Version 5.4.2

= 1.0.0 =
May 15, 2020
* Initial release
