<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    foreach (range(0, 5) as $number) {
        dispatch(function() {
            sleep(5);
            throw new \Exception('oh shit!');
            logger('job done!');
        });
    }

    dd('welcome!');
});
