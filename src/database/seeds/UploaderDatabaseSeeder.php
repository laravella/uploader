<?php namespace Laravella\Uploader;

use Laravella\Crud\Log;
use \Seeder;

class UploaderDatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('UlSeedMenus');
        Log::write("success", "Populated _db_menus");

//        $this->call('SeedAssets');
        Log::write("success", "Populated _db_assets");

    }

}
?>