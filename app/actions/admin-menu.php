<?php

add_action('admin_menu', function(){
    remove_menu_page('themes.php');
    remove_menu_page('tools.php');
    remove_menu_page('edit-comments.php');
    remove_menu_page('plugins.php');
    remove_submenu_page('edit.php', 'acf-settings-updates');
    remove_submenu_page('options-general.php', 'options-general.php');
    remove_submenu_page('options-general.php', 'options-permalink.php');
    remove_submenu_page('options-general.php', 'options-privacy.php');
    remove_submenu_page('options-general.php', 'options-discussion.php');
}, 10, 0);
