<?php

function gtm_consent_banner() {
    $gtm_id = get_option('gtm_container_id');
    include 'banner-template.php';
}

add_action('wp_footer', 'gtm_consent_banner');
