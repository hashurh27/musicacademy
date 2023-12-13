<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
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
    return view('home.home');
});

Route::prefix('admin')->group(function () {
    Route::prefix('category')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('index.category');
        Route::get('create', [CategoryController::class, 'index'])->name('create.category.show');
        Route::post('', [CategoryController::class, 'create'])->name('create.category.store');
        Route::get('categorylist', [CategoryController::class, 'list'])->name('list.category');
        Route::get('{category_id}-edit',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('{category_id}-edit', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('{category_id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
    
    Route::prefix('product')->group(function () {
        route::get('', [ProductController::class, 'index'])->name('product.index');
        Route::get('create', [ProductController::class, 'create'])->name('product.create');
        Route::post('store', [ProductController::class, 'store'])->name('product.store');
    });
    
    
        
});
