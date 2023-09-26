<?php

add_filter('rest_pre_dispatch', function ($result, $wp_rest_server, $request) {
    $not_allowed_methods = ['POST', 'PUT', 'PATCH'];
    if(in_array($request->get_method(), $not_allowed_methods)) {
        return new WP_Error(
            'method_not_allowed',
            __('Method not allowed.'),
            ['status' => 405]
        );
    }
    $api_key = get_field('api_key', 'option');
    $token = get_field('token', 'option');

    $api_key_valid = $request->get_header('X-Api-Key') === $api_key;
    $token_valid = $request->get_header('X-Token') === $token;

    if ($api_key_valid && $token_valid) {
        return $result;
    }

    // If authentication fails, return a WP_Error
    return new WP_Error(
        'rest_forbidden',
        __('You\'re not authorized to see this page.'),
        ['status' => 403]
    );
}, 10, 3);
