<?php
use Illuminate\Routing\Router;
use OpenAdmin\Admin\Facades\Admin;
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\ProductController;
use App\Admin\Controllers\CategoryController;
Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('categories', CategoryController::class);
    $router->resource('products', ProductController::class);


});
