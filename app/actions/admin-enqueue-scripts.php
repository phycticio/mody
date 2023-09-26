<?php

use function Roots\bundle;

add_action('admin_enqueue_scripts', function(){
    bundle('admin')->enqueue();
});
