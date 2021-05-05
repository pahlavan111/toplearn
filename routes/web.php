<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/users', function () {
    return 'hi users';
});

// Route::get('/members/{id}','MembersControler@show')->name('members.show');

// Route::get('/', function () {
//     return 'hi behrooz';
// });

// Route::get('/{id}',function($id){
//  return $id;
// })->where ('id','[0-5]');

// Route::get('/{usermame}',function($username){
//     return $username;
//    })->where ('username','[A-Z]');


// Route::midleware('auth')->group(function (){

//     Route::get('dashboard', function(){
//         return view('dashboard');
//     });

//     Route::get('account', function(){
//         return view('account');
//     });

// });

// Route::prefix('dashboard')->group(function(){
//     Route::get('/', function(){
//         return 'dashboard';
//     });

//     Route::get('/menu', function(){
//         return 'dashboard/menu';
//     });
// });

// Route::group(['prefix' => 'dashboard'], function () {
//     Route::get('/', function () {
//         return 'dashboard';
//     });

//     Route::get('/menu', function () {
//         return 'dashboard/menu';
//     });
// });

Route::domain('test.myapp.com')->group(function () {

    Route::get('/', function () {
        return "hi";
    });
});


Route::domain('{account}.myapp.com')->group(function(){
     
    Route::get('user/{id}', function($account, $id){

    });
});

