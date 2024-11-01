=== wwwFap AB Alert ===
Contributors: pser63
Donate link: https://cash.me/$HeidiHoe
Tags: adblock, adblocker, ad block, ad blocker, ad-block, ad-blocker, detect, detector, finder, adblock detect, adblocker detect, ad block detect, ad blocker detect, ad-block detect, ad-blocker detect, adblock detector, adblocker detector, ad block detector, ad blocker detector, ad-block detector, ad-blocker detector, adblock finder, adblocker finder, ad block finder, ad blocker finder, ad-block finder, ad-blocker finder
Requires at least: 3.0.1
Tested up to: 5.3
Requires PHP: 5.2.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
Detects the use of ad blockers and displays a red alert banner fixed on the bottom to turn off ad-blocker.

== Description ==
Loads a file called banner_ads_300_250.js, a name routinely blocked by ad-blockers. If the file load is blocked it displays a red banner fixed on the bottom of the page requesting disabling the ad blocker. Website access is not restricted. Extremely light weight, just a few lines of code.
 
If you are using Google Analytics, here is code to track your website's ad blocking events to add to your Google Analytics tag. Place inside the &lt;script&gt;&lt;/script&gt; tags:
if(!document.getElementById('zjaIKtlLcRpd')){
gtag('event', 'blocking_ads', {
'event_label': 'Blocking Ads',
'event_category': 'blocking_ads',
'non_interaction': true
});}

== Installation ==

* Upload the plugin to the `/wp-content/plugins/` directory
* Activate the plugin through the 'Plugins' menu in WordPress

Once you have completed these steps you're done. Now turn on your AdBlock and visit your site to test the plugin!
 
== Frequently Asked Questions ==
 
= Are there any settings that I need to configure? =
 
Nope. Just activate the plugin. That's all.

= Does the banner_ads_300_250.js file contain any ads? =

No it does not. Ad blockers routinely block files that are named ads, banners, common ad sizes, etc. The file is used as bait. As soon as an ad-blocker blocks this file from loading we detect it's presence. 

== Screenshots ==

1. Notice banner on bottom displayed once ad blocker is detected.

== Changelog ==

= 1.0.0 = 2019-06-01
* Initial release

== Upgrade Notice ==
 
= 1.0.0 =
Initial release. No upgrades available.
 
