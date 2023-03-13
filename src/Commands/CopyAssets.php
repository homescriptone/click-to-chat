<?php

namespace Homescriptone\ClickToChatWhatsapp\Commands;

use Illuminate\Console\Command;
use Statamic\Console\RunsInPlease;
use Statamic\Extend\Manifest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CopyAssets extends Command
{
    use RunsInPlease;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'click-to-chat:copy-assets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copy addon assets to the public folder';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Manifest $manifest)
    {
        File::copyDirectory( base_path("vendor/homescriptone/click-to-chat/dist"), base_path("public/homescriptone/click-to-chat") );
        $this->info('Assets copied successfully.');
    }
}
