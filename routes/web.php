<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    // echo "welcome to Home page";
});

Route::get('/about', function () {
    return view('about');
});
Route::view('/contact','contact');
Route::get('/product/{id}/{cat_id?}', function ($id, $cat_id=0) {
    echo $id;
    echo $cat_id;
    return view('product',["id"=>$id, "cat"=>$cat_id]);
    // echo "welcome to Home page";
})->where(["id"=>"[0-9]+"]);

Route:: get('/test',[TestController::class,'test']);
Route:: get('/service/{id}/{cat_id}/ ,',[TestController::class,'service']);
