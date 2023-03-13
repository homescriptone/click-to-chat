<?php

namespace Homescriptone\ClickToChatWhatsapp;
use Illuminate\Support\Facades\File;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Facades\CP\Nav;

use Statamic\Assets\Asset;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__.'/../routes/cp.php',
        'web' => __DIR__.'/../routes/web.php',
    ];

    protected $tags = [
        \Homescriptone\ClickToChatWhatsapp\Tags\Clicktochat::class,
    ];

    protected $styles = [
        __DIR__.'/../resources/css', 'intlTelInput.css',
    ];

    public function boot()
    {     

        parent::boot();


        $this->scripts += array(
            __DIR__.'../resources/js/intlTelInput.js',
            __DIR__.'../resources/js/utils.js'
        );

        //Load views.
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'homescriptone/click-to-chat-whatsapp');

        // Add a new menu into the dashboard.
        Nav::extend(function ($nav) {
            $nav->create('Click To Chat')->section('Homescript')->icon( File::get(__DIR__.'/../resources/svg/dashboard-icons.svg') )->route('homescriptone/click-to-chat.settings');
        });

    }

}
