<?php

namespace Homescriptone\ClickToChatWhatsapp;
use Illuminate\Support\Facades\File;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Facades\CP\Nav;
use Homescriptone\ClickToChatWhatsapp\Commands\CopyAssets;
use Statamic\Statamic;
class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__.'/../routes/cp.php',
    ];

    protected $tags = [
        \Homescriptone\ClickToChatWhatsapp\Tags\Clicktochat::class,
    ];

    protected $commands = [
        CopyAssets::class,
    ];

    public function boot()
    {     

        parent::boot();

        //Load views.
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'homescriptone/click-to-chat-whatsapp');

        // Add a new menu into the dashboard.
        Nav::extend(function ($nav) {
            $nav->create('Click To Chat')->section('Homescript')->icon( File::get(__DIR__.'/../resources/svg/dashboard-icons.svg') )->route('homescriptone/click-to-chat.settings');
        });

    }


    public function bootAddon() {
        Statamic::afterInstalled(function ($command) {
            $command->call('click-to-chat:copy-assets');
        });
    }

}
