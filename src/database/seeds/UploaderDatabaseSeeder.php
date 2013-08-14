<?php namespace Laravella\Crud;

use Laravella\Crud\Log;
use \Seeder;

class UploaderDatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('SeedMenus');
        Log::write("success", "Populated _db_menus");

//        $this->call('SeedOptions');
//        Log::write("success", "Populated _db_options");

        $this->call('SeedActions');
        Log::write("success", "Populated _db_actions");
        
        
    }

}
?>