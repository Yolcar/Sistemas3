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
    Route::post('document/save-edit-document', ['as' => 'document.save.edit', 'uses' => 'DocumentsController@saveEdit']);
    Route::get('document/show',['as' => 'document.list', 'uses' => 'DocumentsController@home']);

    Route::get('document/{id}/print', ['as' => 'document.print', 'uses' => 'DocumentsController@imprimir']);




    Route::get('workflow/{id}/create', ['as' => 'workflow.create', 'uses' => 'WorkflowsController@create']);
    Route::get('workflow/show/{id}', ['as' => 'workflow.show', 'uses' => 'WorkflowsController@show']);
    Route::get('workflow/show', ['as' => 'workflow.list', 'uses' => 'WorkflowsController@home']);

    Route::get('workflow/review/{id}',['as' => 'workflow.review', 'uses' => 'WorkflowsController@review']);
    Route::get('workflow/validate/{id}',['as' => 'workflow.validate', 'uses' => 'WorkflowsController@validate']);
    Route::get('workflow/authorization/{id}',['as' => 'workflow.authorization', 'uses' => 'WorkflowsController@authorization']);
    Route::get('workflow/agree/{id}',['as' => 'workflow.agree', 'uses' => 'WorkflowsController@agree']);

    Route::get('workflow/Accept/{id}',['as' => 'workflow.reviewAccept', 'uses' => 'WorkflowsController@accept']);
    Route::get('workflow/Deny/{id}',['as' => 'workflow.reviewDeny', 'uses' => 'WorkflowsController@deny']);


});


