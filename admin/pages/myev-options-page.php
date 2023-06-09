<?php

function myev_options_page_html()
{
?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "myev_options"
            settings_fields('myev_options');
            // output setting sections and their fields
            // (sections are registered for "myev", each field is registered to a specific section)
            do_settings_sections('myev');
            // output save settings button
            submit_button(__('Save Settings', 'textdomain'));
            ?>
        </form>
    </div>
<?php
}
