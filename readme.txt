=== Online Booking Calendar Scheduled247 ===
Contributors: costansin
Donate link: https://costansin.com/contact
Tags: online appointments, online scheduling, scheduled247, calendar, bookings, appointments
Requires at least: 4.6
Tested up to: 5.2.2
Stable tag: 4.3
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin allows you to insert a calendar widget that allows you to take appointments from your clients via a simple shortcode. 
Make sure to register for a FREE account on Scheduled247.com first to get the calendar ID.


== Description ==

This plugin allows you to insert a calendar widget that allows you to take appointments from your clients via a simple shortcode. 
Make sure to register for a FREE account on Scheduled247.com first to get the calendar ID.


== Installation ==

Please follow these steps to install the plugin:

1. Upload the plugin files to the `/wp-content/plugins/scheduled247` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Visit https://www.scheduled247.com/signup to register for a free account, then follow these additional steps:
  a. Click on 'Register Your Business' and follow the on-screen instructions as per https://www.scheduled247.com/pages/getting-started to create your business for FREE.
  b. Click on the 'Calendars' tab (https://www.scheduled247.com/dashboard/calendars) to create your FREE calendar.
  c. Go back to your calendar list and click on your newly create calendar.
  d. Take note of the Calendar ID. This is the long alphanumber string in your URL after you completed previous step: https://www.scheduled247.com/dashboard/calendars/edit/[calendarID]
4. After installing and activating plugin you can use following short-code to embed your calendar in any of your pages or posts: [s247-calendar calendar="<calendarID>"]

Note: Make sure that the calendar ID is embedded in double-quotes. Do not include the angle brackets < or >.

If you want to customize the embedded calendar, you can add other iframe attributes like width, height, class, style etc. Examples:
So if you want to increase height you can use short-code as:
[s247-calendar calendar="<calendarID>" height="600"]
or increase width:
[s247-calendar calendar="<calendarID>" height="600" width="800"]
OR
[s247-calendar calendar="<calendarID>" height="600" width="100%"] (for full width)

For more details on installing the Online Booking Calendar Scheduled247 plugin, visit https://www.scheduled247.com/pages/help.


== Frequently Asked Questions ==
= Is this free? =

Yes. Both the plugin and the Scheduled247 registration are FREE. With the FREE account, you get one FREE calendar with a maximum of 30 bookings every month.

= Can I add multiple calendars? =

Yes. Scheduled247 is designed to cater for multiple services or multiple shops that can be mapped to corresponding multiple calendars. Simply add multiple shortcodes
representing the respective calendarID's.

= What if I am stuck? =

If you are on the free account please submit your question in the WordPress plugin forum. If you are a paid Scheduled247 user, you can contact our customer support and we will get back to you soon.

== Screenshots ==

1. Default settings mode [s247-calendar calendar="<calendarID>"]

== Changelog ==

= 1.0 =
* First release.

== Upgrade Notice ==

= 1.0 =
First Release

== Known Issues ==

1. If you want to embed the Scheduled247 calendar inside a page managed by Elementor, refrain from using the 'shortcode' Elementor Widget. Instead, use the Text Widget and paste the same shortcode as usual.
