<?php

namespace WFlive\Admin;

class Actions {

    public function __construct()
    {
        add_action( 'admin_enqueue_scripts', [$this,'scripts'] );
        add_action( 'admin_enqueue_scripts', [$this,'styles'] );
    }

    public function scripts() {
        wp_enqueue_script('admin', WORDFEST_PLUGIN_URI . '/js/admin.min.js');
    }

}