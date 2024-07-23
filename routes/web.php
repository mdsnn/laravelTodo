<?php

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Counter;
use App\Livewire\Register;
use App\Livewire\Customers;
use App\Livewire\Calculator;
use App\Livewire\EditCustomer;
use App\Livewire\ViewCustomer;
use App\Livewire\CreateCustomer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'show'])->name('product.show');
Route::get('/products', [HomeController::class,'index'])->name('product.index');;
Route::post('/add_product', [HomeController::class,'add_product'])->name('product.store');

Route::get('delete_product/{id}', [HomeController::class,'delete_product'])->name('product.delete');
Route::get('product_update/{id}', [HomeController::class,'product_update'])->name('product.update');
Route::post('product_edit/{id}', [HomeController::class,'product_edit'])->name('product.edit');

Route::middleware('auth')->group(function(){
    Route::get('/customers', Customers::class);
    Route::get('/customers/create', CreateCustomer::class);
    Route::get('/customers/{customer}', ViewCustomer::class);
    Route::get('/customers/{customer}/edit', EditCustomer::class);

});

Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/counter', Counter::class);
Route::get('/calculator',Calculator::class);
Route::get('/home',Home::class);

