<?php

use App\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    $products = Product::all();

    return $products;
}); 

$app->post('/lunch', 'LunchController@store');

$app->delete('/lunch/{id}', 'LunchController@delete');

$app->delete('/all', 'LunchController@clear');
