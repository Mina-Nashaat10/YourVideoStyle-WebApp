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

Route::prefix('admin')->middleware('admin')->namespace('BackEnd')->group(function(){

    Route::resource("videos","Videos",["except"=>["show","delete"]]);

});

//Emad

Route::get('/addcategory1' , function(){

  return view('back-end.Admin.addcategory');
});

Route::get('/allcategory' , 'BackEnd\Categories@index');

Route::get('/updatecategory1/{id}' , 'BackEnd\Categories@edit');

Route::put('/updatecategory2/{id}' , 'BackEnd\Categories@update');



Route::post('/addcategory' , 'BackEnd\Categories@add');


Route::get('/index/deleted/{id}' , 'BackEnd\Categories@delete');
//Emad




//Mina



Route::get('/', function () {
    return view('back-end.Home.login');
});

Route::get('/users',"BackEnd\Users@alluser");

Route::get("/add",function(){
  return view('back-end.User.adduser');
});

Route::post("/adduser","BackEnd\Users@Adduser");

Route::get("/edituser/{id}","BackEnd\Users@edit");

Route::post("/edit/{id}","BackEnd\Users@edituser1");

Route::get("/deleteuser/{id}","BackEnd\Users@deleteuser");
// To Show Specific Category
Route::get('Category/{id}',"BackEnd\Categories@myvideos");
// To Show Video
Route::get('Category/Video/{id}',"BackEnd\Categories@showvideo");
// Dashboard
Route::get('Dashboard','BackEnd\Users@dashboard');
//Search Video
Route::post('resultsearch','BackEnd\Users@searchvideo');
//Mina


//Dahab
Route::post ('/loginuser',"BackEnd\Users@logs");


Route::get('/resetpass' , function(){

  return view('back-end.User.resetpass');
});

Route::post ('/reset',"BackEnd\Users@resetpass");
//Dahab
