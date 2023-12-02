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
// Route::get('blog',function(){
//     return view('blog');
// });

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


