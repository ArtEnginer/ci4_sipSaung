<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Theme extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Used theme
     * --------------------------------------------------------------------------
     *
     * Theme to be used. One from selected list,
     *
     *    http://example.com/
     *
     * If this is not set then we will use the default theme
     * Our default theme is SB Admin 2
     *
     * @var null|string
     */
    public $theme  = [
        'landing'       => 'App\Views\Frontend\Layout\\',
        'auth'          => '',
        'panel'         => 'App\Views\Backend\Layout\\',

    ];

    public $viewLayout  = [
        'portal'        =>'App\Views\Backend\Layout\\',
    ];
}
