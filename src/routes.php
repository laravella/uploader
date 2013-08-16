<?php

Route::filter('uploadauth', function()
        {
            if (Request::ajax())
            {
                if (Auth::guest())
                {
                    App::abort(403);
                }
            }

            if (Auth::guest())
                return Redirect::to('/admin/login');
        });
        
Route::when('upload*', 'uploadauth');


Route::controller('upload', 'UploadController');

?>
