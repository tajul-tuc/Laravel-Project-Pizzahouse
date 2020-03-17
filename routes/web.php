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
    return view('welcome');
});

Route::get('/pizzas', function () {
    // return view('pizzas');
    //get data from db
    // return view('pizzas', ['type' => 'Chicken Donar Pizza', 'base' => 'With Salad']);

    // $pizza = [
    //     'type' => 'Chicken Donar Pizza', 
    //     'base' => 'Garlic',
    //     'price' => 10
    // ];
    // return view('pizzas', $pizza);
    $pizzas = [
        ['type' => 'Chicken Donar Pizza',  'base' => 'Chessy crust', 'price' => 10],
        ['type' => 'Garlic Chee',  'base' => 'Garlic crust', 'price' => 10],
        ['type' => 'Veg',  'base' => 'Vegetables crust', 'price' => 10]
    ];
    return view(
        'pizzas', [
            'pizzas'=> $pizzas,
            'name' => request('name'),
            'age' => request('age')

    
    
        ]);
});

Route::get('/pizzas/{id}', function ($id) {
    return view('details',['id' =>$id]);
});

