<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Default response.
$app->get('/', function() use ($app) {
    return redirect('api/comments');
});

// Get.
$app->get('api/comments', 'App\Http\Controllers\CommentController@index');
$app->get('api/comments/id/{id}', 'App\Http\Controllers\CommentController@getComment');
$app->get('api/comments/post/{slug}', 'App\Http\Controllers\CommentController@getCommentsForPost');
$app->get('api/comments/count', 'App\Http\Controllers\CommentController@getCommentsCount');

// Post.
$app->post('api/comments/new', 'App\Http\Controllers\CommentController@saveComment');
