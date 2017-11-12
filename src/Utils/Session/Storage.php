<?php

namespace Utils\Session;

class Storage {

    public static function startup() {
        self::init();
    }

    public static function init() {
        if (!session_id()) { session_start(); }
        if (!isset($_SESSION['flashbag']) || !is_array($_SESSION['flashbag'])) {
            $_SESSION['flashbag'] = [];
        }
    }

    public static function set($path, $value) {
        $_SESSION['storage'][$path] = $value;
    }

    public static function get($path, $default=false) {
        return isset($_SESSION['storage'][$path]) ? $_SESSION['storage'][$path] : $default;
    }

}
