# WP-Theme

You can paste this directly in the directory where themes are located.

On windows, this is typically: C:\MAMP\htdocs\wordpress\wp-content\themes

There are some changes made to files (like index.php) within the wpForo folder within the theme files.

# Setup

Under wpForo -> Settings -> Login & Registration -> Custom Redirect URLs,
can configure redirecting to forum, or other page here.

For custom pages / whitelisting. Go to Board settings and add page URL to allowed URL list.
Add to theme page-<page_slug>.php with the contents of the page.

# Shortcodes and Custom Pages

To have custom pages outside of wpForo, the setup is to create the content and shortcodes for it.

Then, add a new page and add the shortcode(s) to the page. You must add a page-<page_title>.php file with:
<?php
// Exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;

wp_head();

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
endif;

get_footer();
?>


# Troubleshooting
If the add topic and other wpForo buttons aren't working and the styling isn't being loaded, modify the standalone checks in the wpForo index.php file (in the theme):
```
header:
if( WPF()->board->get_current( 'is_standalone' ) ) {
    wp_head();
    get_header();
}

...

footer:
if( WPF()->board->get_current( 'is_standalone' ) ) {
    wp_footer();
    get_footer();
}  
```
Forum post about adding a new page template:
https://wpforo.com/community/how-to-and-troubleshooting-2/how-to-add-a-page-template/

Lost password not working:
https://wpforo.com/community/how-to-and-troubleshooting-2/lost-your-password-bug/
