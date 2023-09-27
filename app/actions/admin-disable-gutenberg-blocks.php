<?php

add_action('admin_init', function(){
    remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );
});
