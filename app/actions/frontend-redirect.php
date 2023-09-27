<?php

add_action('template_redirect', function () {
    if (!is_admin() && !is_404()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        exit;
    }
});
