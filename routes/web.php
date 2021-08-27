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

$router->get("/", function () use ($router) {
    return $router->app->version();
});

$router->group(["prefix" => "api"], function () use ($router) {
    $router->group(["prefix" => "owners"], function () use ($router) {
        $router->post("", "OwnersController@store");
        $router->get("", "OwnersController@index");
        $router->get("{id}", "OwnersController@show");
        $router->put("{id}", "OwnersController@update");
        $router->delete("{id}", "OwnersController@destroy");
    });

    $router->group(["prefix" => "pets"], function () use ($router) {
        $router->post("", "PetsController@store");
        $router->get("", "PetsController@index");
        $router->get("{id}", "PetsController@show");
        $router->put("{id}", "PetsController@update");
        $router->delete("{id}", "PetsController@destroy");
    });
});
