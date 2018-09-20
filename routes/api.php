<?php

use Dingo\Api\Routing\Router;

/** @var Router $api */
$api = app(Router::class);

$api->version('v1', function (Router $api) {
    $api->group([
        'prefix' => 'auth',
        'namespace' => 'App\Api\V1\Controllers',
    ], function(Router $api) {
        $api->post('signup', 'SignUpController@signUp');
        $api->post('login', 'LoginController@login');

        $api->post('recovery', 'ForgotPasswordController@sendResetEmail');
        $api->post('reset', 'ResetPasswordController@resetPassword');

        $api->post('logout', 'LogoutController@logout');
        $api->post('refresh', 'RefreshController@refresh');
        $api->get('me', 'UserController@me');
    });

    $api->group(['middleware' => 'jwt.auth'], function(Router $api) {
        $api->get('protected', function() {
            return response()->json([
                'message' => 'Access to protected resources granted! You are seeing this text as you provided the token correctly.'
            ]);
        });

        $api->get('refresh', [
            'middleware' => 'jwt.refresh',
            function() {
                return response()->json([
                    'message' => 'By accessing this endpoint, you can refresh your access token at each request. Check out this response headers!'
                ]);
            }
        ]);

        // Entry
        $api->post('entry', ['as' => 'entry.store', 'uses' => '\App\Http\Controllers\EntryController@store']);
        $api->patch('entry/{id}', ['as' => 'entry.update', 'uses' => '\App\Http\Controllers\EntryController@update']);
        $api->delete('entry/{id}', ['as' => 'entry.destroy', 'uses' => '\App\Http\Controllers\EntryController@destroy']);

        // Entry Detail
        $api->post('entry-detail', ['as' => 'entry-detail.store', 'uses' => '\App\Http\Controllers\EntryDetailController@store']);
        $api->patch('entry-detail/{id}', ['as' => 'entry-detail.update', 'uses' => '\App\Http\Controllers\EntryDetailController@update']);
        $api->delete('entry-detail/{id}', ['as' => 'entry-detail.destroy', 'uses' => '\App\Http\Controllers\EntryDetailController@destroy']);
    });

    $api->get('hello', function() {
        return response()->json([
            'message' => 'This is a simple example of item returned by your APIs. Everyone can see it.'
        ]);
    });
});
