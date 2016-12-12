<?php

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
    return $app->version();
});
//random
// $app->get('/key', function() {
//     return str_random(32);
// });
//belajar crud

//create
$app->post('/addproduct','ProductController@store');
//read
$app->get('/listproduct','ProductController@index');
//update
$app->put('/updateproduct/{id}','ProductController@update');
//delete
$app->delete('/deleteproduct/{id}','ProductController@destroy');