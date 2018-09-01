<?php

$prefix = 'demo';
$namespace = 'processdrive\demo\http\controllers';

// make sure authenticated
Route::group(compact('namespace'), function () {
    // Role
    Route::get('demo', 'DemoController@index')->name('index');
});

// Route::get('demo', function() {
//     echo 'here';
// });


// Route::get(['namespace' => 'processdrive\demo\http\controllers', 'uses' => 'test', ]);
