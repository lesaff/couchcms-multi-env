<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Multiple development environment settings
    // By Rudy Affandi @168labs
    // http://github.com/lesaff/

    // Define Environments - may be a string or array of options for an environment
    $environments = array(
        'local'       => array('.local', 'local.'),
        'development' => '.dev',
        'staging'     => 'staging.',
        'preview'     => 'preview.',
        'mobile'      => 'm.',
    );

    // Get Server name
    $server_name = $_SERVER['SERVER_NAME'];
    foreach($environments AS $key => $env){
        if(is_array($env)){
            foreach ($env as $option){
                if(stristr($server_name, $option)){
                    define('ENVIRONMENT', $key);
                    break 2;
                }
            }
        } else {
            if(strstr($server_name, $env)){
                define('ENVIRONMENT', $key);
                break;
            }
        }
    }

    // If no environment is set default to production
    if(!defined('ENVIRONMENT')) define('ENVIRONMENT', 'production');

    // Define different DB connection details depending on environment
    switch(ENVIRONMENT){

    case 'local':

        define('K_DB_NAME', 'database_name_here');
        define('K_DB_USER', 'database_user_here');
        define('K_DB_PASSWORD', 'database_password_here');
        define('K_DB_HOST', 'localhost');
        define('K_DB_TABLES_PREFIX', '');        
        //define( 'K_ADMIN_PAGE', 'index.php' );
        //define( 'K_SITE_URL', 'http://domain.local/subfolder1/mysite/' ); // Uncomment if your site is not located on the root page
        define( 'K_SITE_OFFLINE', 0 );
        define( 'K_PRETTY_URLS', 1);
        define( 'K_USE_CACHE', 0 ); // You might want to disable caching during development process
        define( 'K_CACHE_PURGE_INTERVAL', 24 );
        define( 'K_MAX_CACHE_AGE', 7 * 24 ); // Default is 7 days
        //define( 'K_UPLOAD_DIR', 'myuploads' );
        define( 'K_SNIPPETS_DIR', 'inc' );
        define( 'K_GOOGLE_KEY', '' );
        define( 'K_USE_ALTERNATIVE_MTA', 0 );
        define( 'K_EMAIL_TO', 'user@domain.ltd' );
        define( 'K_EMAIL_FROM', 'another_user@domain.tld' );
        define( 'K_COMMENTS_REQUIRE_APPROVAL', 0 );
        define( 'K_PAYPAL_USE_SANDBOX', 1 );
        break;

    case 'development':
        define('K_DB_NAME', 'database_name_here');
        define('K_DB_USER', 'database_user_here');
        define('K_DB_PASSWORD', 'database_password_here');
        define('K_DB_HOST', 'localhost');
        define('K_DB_TABLES_PREFIX', '');        
        //define( 'K_ADMIN_PAGE', 'index.php' );
        //define( 'K_SITE_URL', 'http://domain.dev/subfolder1/mysite/' ); // Uncomment if your site is not located on the root page
        define( 'K_SITE_OFFLINE', 1 );
        define( 'K_PRETTY_URLS', 1);
        define( 'K_USE_CACHE', 0 ); // You might want to disable caching during development process
        define( 'K_MAX_CACHE_AGE', 7 * 24 ); // Default is 7 days
        define( 'K_CACHE_PURGE_INTERVAL', 24 );
        //define( 'K_UPLOAD_DIR', 'myuploads' );
        define( 'K_SNIPPETS_DIR', 'inc' );
        define( 'K_GOOGLE_KEY', '' );
        define( 'K_USE_ALTERNATIVE_MTA', 0 );
        define( 'K_EMAIL_TO', 'user@domain.tld' );
        define( 'K_EMAIL_FROM', 'another_user@domain.tld' );
        define( 'K_COMMENTS_REQUIRE_APPROVAL', 0 );
        define( 'K_PAYPAL_USE_SANDBOX', 1 );
        break;

    case 'staging':
        define('K_DB_NAME', 'database_name_here');
        define('K_DB_USER', 'database_user_here');
        define('K_DB_PASSWORD', 'database_password_here');
        define('K_DB_HOST', 'localhost');
        define('K_DB_TABLES_PREFIX', '');        
        //define( 'K_ADMIN_PAGE', 'index.php' );
        //define( 'K_SITE_URL', 'http://staging.domain.tld/subfolder1/mysite/' ); // Uncomment if your site is not located on the root page
        define( 'K_SITE_OFFLINE', 1 );
        define( 'K_PRETTY_URLS', 1);
        define( 'K_USE_CACHE', 0 ); // You might want to disable caching during development process
        define( 'K_CACHE_PURGE_INTERVAL', 24 );
        define( 'K_MAX_CACHE_AGE', 7 * 24 ); // Default is 7 days
        //define( 'K_UPLOAD_DIR', 'myuploads' );
        define( 'K_SNIPPETS_DIR', 'inc' );
        define( 'K_GOOGLE_KEY', '' );
        define( 'K_USE_ALTERNATIVE_MTA', 0 );
        define( 'K_EMAIL_TO', 'user@domain.tld' );
        define( 'K_EMAIL_FROM', 'another_user@domain.tld' );
        define( 'K_COMMENTS_REQUIRE_APPROVAL', 0 );
        define( 'K_PAYPAL_USE_SANDBOX', 1 );
        break;

    case 'preview':
        define('K_DB_NAME', 'database_name_here');
        define('K_DB_USER', 'database_user_here');
        define('K_DB_PASSWORD', 'database_password_here');
        define('K_DB_HOST', 'localhost');
        define('K_DB_TABLES_PREFIX', '');        
        //define( 'K_ADMIN_PAGE', 'index.php' );
        //define( 'K_SITE_URL', 'http://preview.domain.tld/subfolder1/mysite/' ); // Uncomment if your site is not located on the root page
        define( 'K_SITE_OFFLINE', 1 );
        define( 'K_PRETTY_URLS', 1);
        define( 'K_USE_CACHE', 1 ); // Caching enabled during preview process
        define( 'K_CACHE_PURGE_INTERVAL', 24 );
        define( 'K_MAX_CACHE_AGE', 7 * 24 ); // Default is 7 days
        //define( 'K_UPLOAD_DIR', 'myuploads' );
        define( 'K_SNIPPETS_DIR', 'inc' );
        define( 'K_GOOGLE_KEY', '' );
        define( 'K_USE_ALTERNATIVE_MTA', 0 );
        define( 'K_EMAIL_TO', 'user@domain.tld' );
        define( 'K_EMAIL_FROM', 'another_user@domain.tld' );
        define( 'K_COMMENTS_REQUIRE_APPROVAL', 0 );
        define( 'K_PAYPAL_USE_SANDBOX', 1 );
        break;

    case 'mobile':
        define('K_DB_NAME', 'database_name_here');
        define('K_DB_USER', 'database_user_here');
        define('K_DB_PASSWORD', 'database_password_here');
        define('K_DB_HOST', 'localhost');
        define('K_DB_TABLES_PREFIX', '');        
        //define( 'K_ADMIN_PAGE', 'index.php' );
        //define( 'K_SITE_URL', 'http://m.domain.tld/subfolder1/mysite/' ); // Uncomment if your site is not located on the root page
        define( 'K_SITE_OFFLINE', 1 );
        define( 'K_PRETTY_URLS', 1);
        define( 'K_USE_CACHE', 1 ); // Caching enabled during preview process
        define( 'K_CACHE_PURGE_INTERVAL', 24 );
        define( 'K_MAX_CACHE_AGE', 7 * 24 ); // Default is 7 days
        //define( 'K_UPLOAD_DIR', 'myuploads' );
        define( 'K_SNIPPETS_DIR', 'inc' );
        define( 'K_GOOGLE_KEY', '' );
        define( 'K_USE_ALTERNATIVE_MTA', 0 );
        define( 'K_EMAIL_TO', 'user@domain.tld' );
        define( 'K_EMAIL_FROM', 'another_user@domain.tld' );
        define( 'K_COMMENTS_REQUIRE_APPROVAL', 1 );
        define( 'K_PAYPAL_USE_SANDBOX', 1 );
        break;

    case 'production':
        define('K_DB_NAME', 'database_name_here');
        define('K_DB_USER', 'database_user_here');
        define('K_DB_PASSWORD', 'database_password_here');
        define('K_DB_HOST', 'localhost');
        define('K_DB_TABLES_PREFIX', '');        
        //define( 'K_ADMIN_PAGE', 'index.php' );
        //define( 'K_SITE_URL', 'http://www.domain.tld/subfolder1/mysite/' ); // Uncomment if your site is not located on the root page
        define( 'K_SITE_OFFLINE', 1 );
        define( 'K_PRETTY_URLS', 1);
        define( 'K_USE_CACHE', 1 ); // Caching enabled for performance gain
        define( 'K_CACHE_PURGE_INTERVAL', 24 );
        define( 'K_MAX_CACHE_AGE', 7 * 24 ); // Default is 7 days
        //define( 'K_UPLOAD_DIR', 'myuploads' );
        define( 'K_SNIPPETS_DIR', 'inc' );
        define( 'K_GOOGLE_KEY', '' );
        define( 'K_USE_ALTERNATIVE_MTA', 0 );
        define( 'K_EMAIL_TO', 'user@domain.tld' );
        define( 'K_EMAIL_FROM', 'another_user@domain.tld' );
        define( 'K_COMMENTS_REQUIRE_APPROVAL', 1 );
        define( 'K_PAYPAL_USE_SANDBOX', 1 );
        break;
}

    // MySQL settings. You need to get this info from your web host. If database is not set in any
    // of the environment settings above, the following information will be used.
    if(!defined('K_DB_NAME'))
        define('K_DB_NAME', 'database_name_here');

    if(!defined('K_DB_USER'))
        define('K_DB_USER', 'database_user_here');

    if(!defined('DB_PASSWORD'))
        define('K_DB_PASSWORD', 'database_password_here');

    if(!defined('DB_HOST'))
        define('K_DB_HOST', 'localhost');

    if(!defined('K_DB_TABLES_PREFIX'))
        define('K_DB_TABLES_PREFIX', '');        

    // 0.
    // Set the follwing to 1 to put your site in maintenance mode.
    // In this mode only admins will be able to access the site while the visitors will be
    // shown the 'Site undergoing maintenance' message.

    // 1.
    // If neccesary, define the full URL of your site including the subdomain, if any.
    // V.IMP: Don't forget the trailing slash!

    // 1b.
    // For security purpose, the 'index.php' file of Couch can be renamed to anything else.
    // If you do so, uncomment the following line and enter the new name.

    // 2.
    // Your Time Zone
    // Example values (note how :15, :30, :45 will be entered as .25, .5 and .75 respectively):
    // +12.75 New Zealand (UTC+12:45)
    // +8.75  Australia (UTC+08:45)
    // +5.5   India (UTC+05:30)
    // +1     Germany (UTC+01:00)
    // 0      United Kingdom (UTC±0)
    // -2     Brazil (UTC-02:00)
    // -4.5   Venezuela (UTC-04:30)
    // -6     United States (Central Time) (UTC-06:00)
    // -8     United States (Pacific Time) (UTC-08:00)
    define( 'K_GMT_OFFSET', 0 );

    // 3.
    // Define the charset used by your site. If in any doubt, leave the default utf-8.
    define( 'K_CHARSET', 'utf-8' );

    // MySQL settings. You need to get this info from your web host. 
    // 4.
    // Name of the database
    // 5.
    // Database username
    // 6.
    // Database password 
    // 7.
    // MySQL hostname (it will usually be 'localhost' )
    // 7b.
    // Needed only if multiple instances of this CMS are to be installed in the same database
    // (please use only alphanumeric characters or underscore (NO hyphen) )

    // 8.
    // Set the following to '1' if you wish to enable Pretty URLS.
    // After enabling it, use gen_htaccess.php to generate an .htaccess file and place it in the root folder of your site.

    // 9.
    // If set, CMS will cache generated pages and serve them if possible.

    // 10.
    // When the cache is invalidated (by adding, deleting or modifying pages in admin), 
    // existing files in cache become useless but are not deleted immediately.
    // A purge routine gets executed at interval set here (in hours)
    // during which this deletion of stale files occurs.

    // 11.
    // Even if the cache does not become invalidated, as noted above, files in cache
    // are removed after this interval (set in hours).

    // 12.
    // Upload folder if not using the default upload folder within 'couch'.
    // Should be relative to your site (don't forget to set write permissions on it).
    // No leading or trailing slashes please.

    // 12b.
    // Folder containing the embedded snippets if not using the default 'snippets' folder within 'couch'.
    // Should be relative to your site. No leading or trailing slashes please.

    // 13.
    // Your Email address. Will be used in contact forms.

    // 14.
    // Will be used as the sender of messages delivered by contact forms to the address above.

    // 15.
    // By default the inbuilt php function 'mail()' is used to deliver messages.
    // On certain hosts this function might fail due to configuration problems.
    // In such cases, set the following to '1' to use an alternative method to send emails

    // 16.
    // Google Maps API Key.
    // You'll have to get one for your site from 'http://code.google.com/apis/maps/'
    // if your site makes use of Google maps.

    // Set the following if you use PayPal buttons to sell products.
    // 17.
    // Set this to zero once you are ready to go live
    // 18.
    // Email address of your PayPal 'business' account selling the item
    define( 'K_PAYPAL_EMAIL', '' );
    // 19. 
    // A three letter code for the currency you do your business in.
    // Some valid values are: AUD(Australian Dollar), CAD(Canadian Dollar), EUR(Euro),
    // GBP (Pound Sterling), JPY (Japanese Yen) and USD (U.S. Dollar).
    // Please check PayPal to find yours.
    define( 'K_PAYPAL_CURRENCY', 'CAD' );

    // 20.
    // A setting of '1' will necessitate the admin to approve comments before they get published.
    // '0' will publish comments immediately.
    // A setting of '1' is strongly recommended in order to avoid spam.

    // 21.
    // Minimum time interval required between two comments posted by the same user (in seconds).
    // Prevents comment flooding. A setting of 5 minutes (300 seconds ) is recommended.
    define( 'K_COMMENTS_INTERVAL', 5 * 60 );

    // 22.
    // Language used for localization of admin panel. Needs to have a corresponding language file in couch folder.
    // Change to 'DE' for German or 'FR' for French.
    define( 'K_ADMIN_LANG', 'EN' );
    
    // 23. 
    // Uncomment the following line if you wish to format self-closing HTML tags the old way e.g. as <BR> instead of <BR />
    //define( 'K_HTML4_SELFCLOSING_TAGS', 1 );

    // 24. 
    // Set the following to '1' if you wish to extract EXIF data from images uploaded to Gallery
    define( 'K_EXTRACT_EXIF_DATA', 0 );
    
    // 99.
    // VERY IMPORTANT! 
    // Set the following to '1' ONLY IF YOU HAVE BOUGHT A COMMERCIAL LICENSE for the site you are using this file on.
    // Doing so otherwise is NOT PERMITTED and will constitute a violation of the CPAL license this software is provided under.
    define( 'K_PAID_LICENSE', 0 );

        // Rebranding. Uncomment the following defines and add your info.
        // 99a. Company Logo on light background  (Max. 171 x 64 pixels. Needs to be placed within 'couch/theme/images/' folder)
        //define( 'K_LOGO_LIGHT', 'couch.gif' );

        // 99b. Company Logo on dark background  (Max. 171 x 64 pixels. Needs to be placed within 'couch/theme/images/' folder)
        //define( 'K_LOGO_DARK', 'couch_dark.gif' );

        // 99c. Footer content (Company name and link)
        //define( 'K_ADMIN_FOOTER', '<a href="http://www.yourcompany.com">COMPANY NAME</a>' );

    // 100.
    // VERY IMPORTANT! 
    // If you wish to use this software under the free open source license, it is mandatory to have an attribution link
    // on all pages rendered by the software. By default, a footer link will be automatically added if you do not
    // have a commercial license for the site this file is being used on.
    // Set the following to '1' if you want to prevent the link from being automatically added.
    // You are, however, then REQUIRED to manually add the following link in the output of all pages rendered by this software. 
    // You are free to style the link in any manner so long as it remains legible and unobscured. 
    // 
    // <div id="copyright">Powered by 
    // <a href="http://www.couchcms.com/" title="CouchCMS - Simple Open-Source Content Management">CouchCMS</a></div>
    //
    // Failing to do so will constitute a violation of the CPAL license this software is provided under.
    define( 'K_REMOVE_FOOTER_LINK', 0 );
   