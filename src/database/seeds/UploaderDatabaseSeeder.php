<?php namespace Laravella\Uploader;

use Laravella\Crud\Log;
use \Seeder;

class UploaderDatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('UlSeedMenus');
        Log::write("success", "Populated _db_menus");

//        $this->call('SeedOptions');
//        Log::write("success", "Populated _db_options");

//        $this->call('SeedActions');
//        Log::write("success", "Populated _db_actions");
        
        
    }

}
?>