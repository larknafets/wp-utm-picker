# wp-utm-picker
This plugin picks up UTM tracking data from a URL and saves it to cookies. The UTM parameters can be read out and used by shortcodes.

The following parameters will be extracted from URL:
- utm_source
- utm_medium
- utm_term
- utm_content
- utm_campaign
- utm_id (Ads Campaign ID)
- fbclid (Facebook Click ID)
- gclid (Google Ads ID)
- dclid (Google Display Ads ID)
- epik (Pinterest Ads/Click ID)

The following URLs will be stored in cookies:
- landing page URL (first enter of the website)
- referrer URL (page referring from)
- last page URL (last view page before leaving the website)

Shortcodes:
[wp_utm_source]
[wp_utm_medium]
[wp_utm_term]
[wp_utm_content]
[wp_utm_campaign]
[wp_utm_id]
[wp_utm_fbclid]
[wp_utm_gclid]
[wp_utm_dclid]
[wp_utm_epik]
[wp_url_referer]
[wp_url_landing]
[wp_url_last]
[wp_url_actual]

You need to load the JS file separately. As per GDPR you have to ask to store unnecessary cookies.
In case you want to load it automatically, just look into the PHP file and uncomment the part where JS file will be loaded.
JS file:
/wp-content/plugins/wp-utm-picker/js/wp-utm-picker.js
E.g.:
<script src="/wp-content/plugins/wp-utm-picker/js/wp-utm-picker.js"></script>

## Installation
1. Make the src directory a ZIP file. => wp-utm-picker.zip
2. Login into admin panel.
3. Go to plugins.
4. Click on add new.
5. Locate plugin ZIP file.
6. Click install.
7. Enable the plugin after you see successful installation page.
8. Add JS file to header or your GDPR cookie plugin.
