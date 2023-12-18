<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::fallback(function(){
// return redirect('/');
// });
//ROUTE::fallback(fn()=> redirect('/'));

// Route::get('/',function(){
//     return view('food');
//    });

// Route::prefix('lar')->group(function(){
//     Route::get('test',function(){
//         return 'welcome to my app';
//     });
// });
// ROUTE::get('/',function(){
//  return view('test');
// });

// Route::get('test',function(){
//     return 'WELCOME to test page';
// });


// Route::get('test',function(){
//     return 'WELCOME,WE ARE HAPPY TO VISIT OUR APP';
// });


// Route::get('test1/{id}',function($id){
//     return 'THE NAME IS '. $id;
// });

// Route::get('test2/{id?}',function($id=0){
//     return 'THE NAME IS '. $id;
// });


// Route::get('test2/{id?}',function($id=0){
//     return 'THE ID IS '. $id;
// })->where(['id'=>'[0-9]+']);

// Route::get('test2/{id?}',function($id=0){
//     return 'THE ID IS : '. $id;
// })->whereNumber('id');


// Route::get('test3/{name?}',function($name=null){
//     return 'THE NAME IS '. $name;
// })->whereAlpha('name');



// Route::get('test4/{name}/{id}',function($name,int $id){
//     return 'THE NAME IS '. $name . 'and the AGE is : ' . $id;
// })->where(['id'=> '[0-9]+','name'=>'[a-z]+']);    //accept the name's small leter only

// Route::get('test5/{name}/{id}',function($name,int $id){
//     return 'THE NAME IS '. $name . ' and the AGE is : ' . $id;
// })->where(['id'=> '[0-9]+','name'=>'[a-zA-Z]+']);  //accept the name's capital or small leter


// Route::get('test6/{id}',function($id){
//     return 'WELCOME '. $id ;
// })->where(['id'=> '[a-zA-Z0-9]+']);  //use alpha and numbers in the $id


// Route::get('product/{category}',function($cat){
//     return 'The category is : '. $cat;
// })->whereIn('category', ['labtop','pc','mobile']);

// });

Route::get('about',function(){
return "<h1 style='color:red; text-align: center;'>We are HAPPY for your visit</h1>
<h2 style='text-align: center;'>Iam Susana Sameh</h2>
<h2 style='text-align: center;'>Iam a BACKEND developer";

});


Route::get('contact',function(){
    return view('contact');

});




    Route::prefix('blog')->group(function(){
        Route::get('/', function () {
            return view('blog');
        });

    Route::get('science',function(){
     return "<h1 style='text-align: center;'>This is the Science page</h1>";
    });

    Route::get('sport',function(){
        return "<h1 style='text-align: center;'>This is the Sport page</h1>";
    });

    Route::get('math',function(){
        return "<h1 style='text-align: center;'>This is the Math page<h1>";

    });

    Route::get('medical',function(){
        return "<h1 style='text-align: center;'>This is the Medical page<h1>";
    });

});

Route::get('login',function(){
    return view('login');
});

Route::post('logged',function(){
    return "you are logged in";
})->name('logged');

Route::get('control',[ExampleController::class,'show']);

Route::post('form',[FormController::class,'store'])->name('form');
// Route::post('form','FormController@store')->name('form');

// Route::resource('car', CarController::class);



//routes of car table:

Route::get('createCar',[CarController::class,'create'])->name('createCar');

//store into cartable

Route::post('storeCar',[CarController::class,'store'])->name('storeCar');

Route::get('car',[CarController::class,'index'])->name('car');
Route::get('updateCar/{id}', [CarController::class, 'edit']);
Route::put('update/{id}', [CarController::class, 'update'])->name('update');
Route::get('showCar/{id}',[CarController::class, 'show'])->name('showCar');
Route::get('deleteCar/{id}',[CarController::class, 'destroy']);
Route::get('trashedCar',[CarController::class, 'trashed'])->name('trashedCar');
Route::get('forceDeleteCar/{id}',[CarController::class, 'forceDelete'])->name('forceDeleteCar');
Route::get('restoreCar/{id}',[CarController::class, 'restore'])->name('restoreCar');






//routes of post table:
//the form page
Route::get('addPost',[PostController::class,'create'])->name('addPost');
Route::post('storePost',[PostController::class,'store'])->name('storePost');
//the index page
Route::get('post',[PostController::class,'index'])->name('post');
//the edit page
Route::get('editPost/{id}', [PostController::class, 'edit']);
//to update data in database
Route::put('updatePost/{id}', [PostController::class, 'update'])->name('updatePost');
//to show one column
Route::get('showPost/{id}',[PostController::class, 'show'])->name('showPost');
//to delete one column
Route::get('deletePost/{id}',[PostController::class, 'destroy']);
//to move the data to trash
Route::get('trashedPost',[PostController::class, 'trashed'])->name('trashedPost');
//to force delete the data
Route::get('forceDelete/{id}',[PostController::class, 'forceDelete'])->name('forceDeletePost');
//to restore data from trashed table
Route::get('restorePost/{id}',[PostController::class, 'restore'])->name('restorePost');












