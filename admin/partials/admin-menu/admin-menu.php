<?php
// require_once dirname(dirname(__FILE__)) . '/admin/pages/myev-options-page.php';


add_action('admin_menu', 'myev_admin_link_page');
function myev_admin_link_page()
{
    add_menu_page(
        'My Evaluations', // Title of the page
        'My Evaluations', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'myev-main-page.php', // The 'slug' - file to display when clicking the link
        '', // Function to call to display the page content, leave blank to display nothing
    );
    add_submenu_page(
        'myev-main-page', // slug parent
        'myev Options', // header title
        'Options', // nom du sous menu
        'manage_options', // capability
        'myev-options', // URL slug
        'myev_options_page_html' // callback
    );
}
