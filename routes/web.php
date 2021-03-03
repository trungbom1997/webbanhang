<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;



Route::get('/',[Homecontroller::class , 'index']  );


#backend
Route::get('/admin',[Admincontroller::class , 'dashboard']  );
Route::get('/login',[Admincontroller::class , 'login']  );
Route::post('/admin-login',[Admincontroller::class , 'loginadmin']  );

#category
Route::get('/add-new-category',[Admincontroller::class , 'add_category']  );
Route::post('/save-category',[Admincontroller::class , 'SaveCategory']  );

