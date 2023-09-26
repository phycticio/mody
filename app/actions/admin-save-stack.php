<?php

add_action('acf/options_page/save', function($post_id, $menu_slug) {
    if($menu_slug !== 'stack') return;

    $environments = get_field('base_urls', 'option');
    $kebab_cased_environments = [];
    foreach($environments as $environment) {
        $kebab_cased_environments[] = [
            'name' => _wp_to_kebab_case($environment['name']),
            'url' => $environment['url'],
        ];
    }
    update_field('base_urls', $kebab_cased_environments, 'option');
}, 10, 2);
