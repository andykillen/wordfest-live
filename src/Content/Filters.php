<?php

namespace WFlive\Content;

class Filters {

    static public function init() {
        add_filter("the_content", [__CLASS__, 'content']);
        add_filter("the_title", [__CLASS__, 'title']);
        
    }

    static public function title($content) {
        return $content . "are you listening?";
    }

static public function content($content) {
        return $content . "<p>I love autoloaders</p>";
    }
}