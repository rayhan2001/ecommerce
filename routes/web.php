<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
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
//===========================FRONTEND ROUTE===============
Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('/product-view{id}',[FrontendController::class,'productView'])->name('product.view');

// class Car extends Engine{
//     private $color;
//     public function __constactor($color = null)
//     {
//         $this->color = $color;
//     }
//     public function Function1(Type $var = null)
//     {
//         # code...
//     }

//     public function Function2(Type $var = null)
//     {
//         # code...
//     }
// }

// class Engine{
//     private $type1;
//     private $type2;
// }

// $function1  = new Car('Green');

// $function2 = new Car('Blue');



//===========================ADMIN ROUTE===============

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

//    All the Category related route will be written here...........................
    Route::resource('categories',CategoryController::class);
    Route::get('/category-status{id}',[CategoryController::class,'status'])->name('category.status');

//    All the Subcategory related route will be written here...........................
    Route::resource('subcategory',SubCategoryController::class);
    Route::get('/subcategory-status{id}',[SubCategoryController::class,'status'])->name('subcategory.status');

//    All the Brand related route will be written here...........................
    Route::resource('brand',BrandController::class);
    Route::get('/brand-status{id}',[BrandController::class,'status'])->name('brand.status');

//    All the Unit related route will be written here...........................
    Route::resource('unit',UnitController::class);
    Route::get('/unit-status{id}',[UnitController::class,'status'])->name('unit.status');

//    All the Sizes related route will be written here...........................
    Route::resource('size',SizeController::class);
    Route::get('/size-status{id}',[SizeController::class,'status'])->name('size.status');

//    All the Colors related route will be written here...........................
    Route::resource('color',ColorController::class);
    Route::get('/color-status{id}',[ColorController::class,'status'])->name('color.status');

//    All the Products related route will be written here...........................
    Route::resource('products',ProductController::class);
    Route::get('/products-status/{id}',[ProductController::class,'status'])->name('product.status');
});
