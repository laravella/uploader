<?php

use Laravella\Crud\Log;
use Laravella\Crud\CrudSeeder;
use \Seeder;
use \DB;

class SeedAssets extends CrudSeeder {

    public function run()
    {
        set_time_limit(0);

        $assetGroupId = $this->addAssetType('upload');

        $asset = 'jquery-1.8.3.min.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'vendor/jquery.ui.widget.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'tmpl.min.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'load-image.min.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'canvas-to-blob.min.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'jquery.blueimp-gallery.min.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'jquery.iframe-transport.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'jquery.fileupload.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'jquery.fileupload-process.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'jquery.fileupload-image.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'jquery.fileupload-audio.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'jquery.fileupload-video.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'jquery.fileupload-validate.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'jquery.fileupload-ui.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $asset = 'main.js';
        $id = $this->addAsset($asset, 'scripts', 'default', 'bottom');
        $this->info('adding asset '.$asset);

        $this->linkAssetPage($assetGroupId, '*');
    }

}

?>