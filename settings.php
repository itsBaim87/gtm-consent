<?php

function gtm_admin_menu() {
    add_menu_page('GTM Manager Settings', 'GTM Consent Settings', 'manage_options', 'gtm-manager', 'gtm_manager_settings_page', 'dashicons-admin-generic');
}

add_action('admin_menu', 'gtm_admin_menu');

function gtm_manager_settings_page() {
    ?>
    <div class="wrap">
        <h2>GTM Consent Settings</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields('gtm-options');
            do_settings_sections('gtm-manager');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function gtm_register_settings() {
    add_option('gtm_container_id', '');
    register_setting('gtm-options', 'gtm_container_id', array('type' => 'string', 'sanitize_callback' => 'sanitize_text_field'));
    add_settings_section('gtm-settings-section', 'GTM Container Settings', 'gtm_section_text', 'gtm-manager');
    add_settings_field('gtm-field', 'GTM Container ID', 'gtm_field_callback', 'gtm-manager', 'gtm-settings-section');
}

function gtm_section_text() {
    echo '<p>Enter your Google Tag Manager Container ID below.</p>';
}

function gtm_field_callback() {
    $gtm_id = get_option('gtm_container_id');
    echo "<input type='text' id='gtm_container_id' name='gtm_container_id' value='$gtm_id' />";
}

add_action('admin_init', 'gtm_register_settings');
