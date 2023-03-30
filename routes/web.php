<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix'=>'/','namespace'=>'App\\Http\\Controllers\\'],function(){

    Route::get('/',['uses'=>'TripController@index','as'=>'index']);
    Route::resource('trips', 'TripController');
    Route::get('/form/{group}',['uses'=>'CustomerController@create','as'=>'form.create']);
    Route::post('/form/{group}',['uses'=>'CustomerController@store','as'=>'form.store']);
    Route::get('/group/{group}',['uses'=>'GroupController@create','as'=>'group.create']);
    Route::post('/group/{group}',['uses'=>'GroupController@store','as'=>'group.store']);
    Route::get('/signature/{group}',['uses'=>'CustomerController@signature','as'=>'signature.create']);
    Route::post('/signature/{group}',['uses'=>'CustomerController@addSignature','as'=>'signature.add']);

});

Route::get('storage/{path}', function(string $path){
    return Storage::disk('local')->download($path);
})->name('show-image');

Route::group(['prefix'=>'admin/','namespace'=>'App\\Http\\Controllers\\Admin\\','as'=>'admin.','middleware'=>['admin']],function(){

    Route::get('index',['uses'=>'AdminController@index','as'=>'index']);
    Route::get('trips',['uses'=>'TripController@index','as'=>'trips']);
    Route::get('groups',['uses'=>'GroupController@index','as'=>'groups']);
    Route::get('group/{id}',['uses'=>'GroupController@show','as'=>'group']);
    Route::get('groups/{id}',['uses'=>'GroupController@destroy','as'=>'dgroup']);
    Route::get('export/{id}',['uses'=>'GroupController@export','as'=>'export']);
});


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
