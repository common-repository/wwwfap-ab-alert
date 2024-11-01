<?php
/*
Plugin Name: wwwFap AB Alert
Description: Detects the use of ad blockers and displays a red sticky alert banner on the bottom to turn off ad-blocker.
Version: 1.0.0
Author: wwwFap
Author URI: https://adultswag.com/ 
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
Text Domain: wwwfap-ab-alert

This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
General Public License version 2, as published by the Free Software Foundation. You may NOT assume 
that you can use any other version of the GPL.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
 
function wwwfap_ab_alert_style() {
    echo '<style>
#FNWcjVjxjUlT {clear: both;display: none;width: 100%;padding: 0;margin: 0;background-color: #D30000;position: fixed;bottom: 0;z-index: 9999999999998;}#FNWcjVjxjUlT .notice {margin: 0 auto;padding: 5px;color: #fff;text-align: center;font-family: Arial, Helvetica, sans-serif;font-size: 18px;line-height: 20px;}
</style>'."\n";
}
add_action('wp_head', 'wwwfap_ab_alert_style');

function wwwfap_ab_alert_notice() {
    echo '<div id="FNWcjVjxjUlT">
    <div class="notice">It looks like you are using an ad-blocker! Ad blockers may cause some areas of this website to malfunction. Please disable ad blocker and refresh page.</div>
</div>

<script src="'.plugins_url( 'banner_ads_300_250.js', __FILE__ ).'" type="text/javascript"></script>
<script type="text/javascript">

if(!document.getElementById("zjaIKtlLcRpd")){
  document.getElementById("FNWcjVjxjUlT").style.display="block";
}

</script>'."\n";
}
add_action('wp_footer', 'wwwfap_ab_alert_notice');
