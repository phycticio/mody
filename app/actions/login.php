<?php

use function Roots\bundle;

add_action('login_enqueue_scripts', function() {
    bundle('login')->enqueue();
});
