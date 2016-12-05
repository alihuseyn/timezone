<?php


Route::get('/timezone',['middleware'=>'timezone_middleware',
                        'uses'=>"Signum\\Timezone\\Http\\Controllers\\TimezoneController@index"]);