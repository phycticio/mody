<?php

add_action('acf/options_page/save', function($post_id, $menu_slug) {
    if($menu_slug !== 'credentials') return;
    if(!get_field('generate_api_keys', 'option')) return;

    $current_user_id = get_current_user_id();
    $userdata = get_userdata($current_user_id);

    $api_key = substr(md5(time()), 0, 6) . '-' .
        substr(md5($userdata->user_email), 0, 6) . '-' .
        substr(md5(gmdate('Y-m-d H:i:s')), 0, 6);

    $token = substr(md5(get_bloginfo() . site_url() . time()), 0, 16);

    update_field('api_key', $api_key, 'option');
    update_field('token', $token, 'option');
    update_field('generate_api_keys', false, 'option');
    update_field('are_you_sure', false, 'option');
}, 10, 2);
