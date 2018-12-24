<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    [
        'prefix' => 'company',
        'namespace' => 'Company',
    ],
    function(){
        //route-job posting
        Route::get('jobs/create','JobController@showJobCreateForm')->name('company.jobs.create');
        Route::post('jobs/create','JobController@storeJobCreateForm')->name('company.jobs.store');
    }

);

Route::get('auth/{uid}', function($uid){
    auth()->loginUsingId($uid);
    return redirect()->route('home');

});

//website route
Route::get('topjobs','WebsiteController@index')->name('show.website');

