<?php

use Laravella\Crud\Log;

class SeedActions extends Seeder {

    public function run()
    {
        $arr = array("name" => "getUpload");
        DB::table('_db_actions')->insert($arr);
        Log::write("success", " - getUpload action created");

        $arr = array("name" => "postUpload");
        DB::table('_db_actions')->insert($arr);
        Log::write("success", " - postUpload action created");
    }

}
?>