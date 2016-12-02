<?php
define('YOURSTORE_CHILD_THEME_URI', get_template_directory_uri());
wp_enqueue_script('yourstore-child-custom', YOURSTORE_CHILD_THEME_URI . '/js/custom.js', array('jquery'), '201202127', true);
?>
