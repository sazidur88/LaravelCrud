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

// Route :: get('sadi', function(){
//     echo ("Hello World\n" );
//     return ("Hello World");
    
// });

// Route::get("ashraful",function(){
//     return("I am your instructor");
// });


// Route::get('dev/{name?}/{job?}', function($name = null,$job = null){
//     echo "<h1>My name is $name and I am a professional $job developer.</h1>";
// });



// //get, post, (put, patch), delete, resource 



// // //Prefix route
// Route::prefix('user') -> group(function(){
//     Route::get('ashraful',function(){
//     echo "I am your instructor";
// });

//     Route::get('sadi',function(){
//     echo "I am a laravel developer";
// });

// });

// //Name route
// Route::get('ash', function(){
//     echo "Ash route name route";
// }) -> name('ash-name');


// //Controller create
// Route::get('student', 'StudentController@studentInfo');


Route::get('test', function(){

});


// Route::get('student', 'StudentController@studentInfo');

Route::resource('sadi', 'studentController');
// Route::get('sadi{id}', 'studentController@edit');

Route::get('/',function(){
    return view('index');
});

Route::get('table', function(){
    return view('table');
});