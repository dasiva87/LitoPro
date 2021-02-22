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
    //USER
    $router->post('/user/registrer', 'UsersController@registrer');
    $router->post('/login', 'UsersController@login');

    //BUSINESS
    $router->get('/business/{id}', 'businessesController@index');
    $router->post('/business/create', 'businessesController@create');
    $router->post('/business/update', 'businessesController@update');
    $router->post('/business/delete', 'businessesController@delete');
    $router->get('/business/all', 'businessesController@all');

    //BLOCK
    $router->get('/block', 'blocksController@index');
    $router->post('/block/create', 'blocksController@create');
    $router->post('/block/update', 'blocksController@update');
    $router->post('/block/delete', 'blocksController@delete');
    
    //DOCUMENT
    $router->get('/document/{id}', 'documentsController@index');
    $router->post('/document/create', 'documentsController@create');
    $router->post('/document/update', 'documentsController@update');
    $router->post('/document/delete', 'documentsController@delete');
    $router->get('/document/all', 'documentsController@all');
    
    //FINISHES
    $router->get('/finishe/{id}', 'finishesController@index');
    $router->post('/finishe/create', 'finishesController@create');
    $router->post('/finishe/update', 'finishesController@update');
    $router->post('/finishe/delete', 'finishesController@delete');
    $router->get('/finishe/all', 'finishesController@all');
    
    //ITEM-CUSTOM
    $router->get('/item-custom', 'itemCustomsController@index');
    $router->post('/item-custom/create', 'itemCustomsController@create');
    $router->post('/item-custom/update', 'itemCustomsController@update');
    $router->post('/item-custom/delete', 'itemCustomsController@delete');
    
    //NEWS
    $router->get('/news/{id}', 'newsController@index');
    $router->post('/news/create', 'newsController@create');
    $router->post('/news/update', 'newsController@update');
    $router->post('/news/delete', 'newsController@delete');
    $router->get('/news/all', 'newsController@all');
    
    //PRINTING
    $router->get('/printing', 'printingsController@index');
    $router->post('/printing/create', 'printingsController@create');
    $router->post('/printing/update', 'printingsController@update');
    $router->post('/printing/delete', 'printingsController@delete');
    
    //SETTING
    $router->get('/setting/{id}', 'settingsController@index');
    $router->post('/setting/create', 'settingsController@create');
    $router->post('/setting/update', 'settingsController@update');
    $router->post('/setting/delete', 'settingsController@delete');
    
    //SINGLE
    $router->get('/single', 'singlesController@index');
    $router->post('/single/create', 'singlesController@create');
    $router->post('/single/update', 'singlesController@update');
    $router->post('/single/delete', 'singlesController@delete');
    
    //TEMPLAE
    $router->get('/template', 'templatesController@index');
    $router->post('/template/create', 'templatesController@create');
    $router->post('/template/update', 'templatesController@update');
    $router->post('/template/delete', 'templatesController@delete');
    
    //THIRD
    $router->get('/third/{id}', 'thirdsController@index');
    $router->post('/third/create', 'thirdsController@create');
    $router->post('/third/update', 'thirdsController@update');
    $router->post('/third/delete', 'thirdsController@delete');
    $router->get('/third/all', 'thirdsController@all');
    
    //TYPE-CTP
    $router->get('/type-ctp/{id}', 'typeCtpsController@index');
    $router->post('/type-ctp/create', 'typeCtpsController@create');
    $router->post('/type-ctp/update', 'typeCtpsController@update');
    $router->post('/type-ctp/delete', 'typeCtpsController@delete');
    $router->get('/type-ctp/all', 'typeCtpsController@all');
    
    //TYPE-MACHINE
    $router->get('/type-machine/{id}', 'typeMachinesController@index');
    $router->post('/type-machine/create', 'typeMachinesController@create');
    $router->post('/type-machine/update', 'typeMachinesController@update');
    $router->post('/type-machine/delete', 'typeMachinesController@delete');
    $router->get('/type-machine/all', 'typeMachinesController@all');
    
    //TYPE-PAPER
    $router->get('/type-paper/{id}', 'typePapersController@index');
    $router->post('/type-paper/create', 'typePapersController@create');
    $router->post('/type-paper/update', 'typePapersController@update');
    $router->post('/type-paper/delete', 'typePapersController@delete');
    $router->get('/type-paper/all', 'typePapersController@all');
    
    //TYPE-SHEET
    $router->get('/type-sheet/{id}', 'typeSheetsController@index');
    $router->post('/type-sheet/create', 'typeSheetsController@create');
    $router->post('/type-sheet/update', 'typeSheetsController@update');
    $router->post('/type-sheet/delete', 'typeSheetsController@delete');
    $router->get('/type-sheet/all', 'typeSheetsController@all');

    
    
    $router->group(['middleware'=>'auth'], function () use ($router){
        $router->get('/user', 'UsersController@index');
    });
});


