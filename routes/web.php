<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware'=>'json'], function () use ($router){
    
    $router->post('/user/registrer', 'UsersController@registrer');
    $router->post('/login', 'UsersController@login');

    $router->get('/business', 'businessesController@index');
    $router->get('/block', 'blocksController@index');
    $router->get('/document', 'documentsController@index');
    $router->get('/finishe', 'finishesController@index');
    $router->get('/item-custom', 'itemCustomsController@index');
    $router->get('/news', 'newsController@index');
    $router->get('/printing', 'printingsController@index');
    $router->get('/setting', 'settingsController@index');
    $router->get('/single', 'singlesController@index');
    $router->get('/template', 'templatesController@index');
    $router->get('/template', 'templatesController@index');
    $router->get('/third', 'thirdsController@index');
    $router->get('/type-ctp', 'typeCtpsController@index');
    $router->get('/type-machine', 'typeMachinesController@index');
    $router->get('/type-paper', 'typePapersController@index');
    $router->get('/type-sheet', 'typeSheetsController@index');

    
    
    $router->group(['middleware'=>'auth'], function () use ($router){
        $router->get('/user', 'UsersController@index');
    });
});


