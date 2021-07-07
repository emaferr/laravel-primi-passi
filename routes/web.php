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

    $data = [

        'products' => array(

            [
                'path' => 'img/Royal-gg-4-fiore-erba-legale.jpeg',
                'name' => 'royal gg#4',
                'details' => 'Indoor | CBD + CBDA < 25%',
                'price' => 9.99
            ],
            [
                'path' => 'img/gorilla-glue-cannabis-light-1.jpeg',
                'name' => 'gorilla glue',
                'details' => 'Indoor | CBD + CBDA < 22%',
                'price' => 4.70
            ],
            [
                'path' => 'img/cannabis-legale-do-si-dos.jpeg',
                'name' => 'do si dos',
                'details' => 'Indoor | CBD + CBDA < 22,5%',
                'price' => 4.30
            ]
        )
    ];

    // rename the main view to 'home'
    return view('home',$data);
});
