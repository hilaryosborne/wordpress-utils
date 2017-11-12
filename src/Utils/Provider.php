<?php

namespace Utils;

use Utils\Session\Flashbag;
use Utils\Session\Storage;
use Utils\Theme\Menu;
use Utils\Theme\Option;
use Utils\Theme\Size;
use Utils\Theme\Taxonomy;
use Utils\Theme\Types;
use Utils\Theme\Webpack;

class Provider {

    public static function init() {
        self::listeners();
    }

    protected static function listeners() {
        // Bootstrap session utils
        Flashbag::init();
        Storage::init();
        // Bootstrap theme utils
        Webpack::init();
        Menu::init();
        Option::init();
        Size::init();
        Taxonomy::init();
        Types::init();
    }

}