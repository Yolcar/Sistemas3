<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['before' => 'logged'], function () {
    Route::get('/',['as' => 'home', 'uses' => 'HomeController@index'] );

    Route::get('document/select-template', ['as' => 'document.select_template', 'uses' => 'DocumentsController@templateSelect']);

    Route::get('document/create-document', ['as' => 'document.create', 'uses' => 'DocumentsController@create']);

    Route::get('document/edit/{id}', ['as' => 'document.edit', 'uses' => 'DocumentsController@edit']);

    Route::post('document/save-document', ['as' => 'document.save', 'uses' => 'DocumentsController@save']);

    Route::post('document/save-edit-document/{id}', ['as' => 'document.save.edit', 'uses' => 'DocumentsController@saveEdit']);


    Route::get('workflow/{id}/create', ['as' => 'workflow.create', 'uses' => 'WorkflowsController@create']);
    Route::get('workflow/show/{id}', ['as' => 'workflow.show', 'uses' => 'WorkflowsController@show']);
    //Route::resource('workflow','WorkflowsController');


});


