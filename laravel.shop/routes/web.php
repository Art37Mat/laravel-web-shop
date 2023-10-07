<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AccessoriesController;


// для пользователя********************************

Route::get('/', [HomeController::class, 'main'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');

// на каталог и карточку товара
Route::get('/catalog',[HomeController::class,'catalog'])->name('catalog');
Route::get('/catalog/{Id}', [HomeController::class ,'show']);

Route::get('/catalogall',[HomeController::class,'catalogall'])->name('catalogall');


Route::get('/reviews',[HomeController::class,'reviews'])->name('reviews');

Route::get('/reviewscreate',[HomeController::class,'reviewscreate'])->name('reviewscreate');

Route::get('/component',[HomeController::class,'component'])->name('component');

Route::get('/componentcatalog',[HomeController::class,'componentcatalog'])->name('componentcatalog');

Route::get('/privacypolicy',[HomeController::class,'privacypolicy'])->name('privacypolicy');



// для клиента
 // выход
 Route::get('/logout',[HomeController::class,'logout'])->name('logout');

// / Регистрация и авторизация
Route::get('/register',[HomeController::class,'register'])->name('auth.register');
Route::get('/login',[HomeController::class,'login'])->name('auth.login');



// Для сохранения
Route::post('/register',[RegisterController::class,'store'])->name('register');

// Для входа
Route::post('/login',[LoginController::class,'login'])->name('login');



// ************************************************

// маршрут на корзину
Route::get('/basket', [BasketController::class,'index'])->name('basket');


Route::post('/basket/componentadd/{id}', [BasketController::class,'componentadd'])->name('basket.componentadd');


// добавить в корзину, выбранный товар
Route::post('/basket/add/{id}', [BasketController::class,'add'])->name('basket.add');

//Удаление из корзины строки
Route::delete('/basket/index',[BasketController::class,'deleteProductBasket'])->name('deleteProductBasket');

//Добавление  количества товара в покупку в корзине
Route::put('/basket/index',[BasketController::class,'PlusProductBasket'])->name('PlusProductBasket');

//Вычитание количества товара из покупки в корзине
Route::patch('/basket/index',[BasketController::class,'MinusProductBasket'])->name('MinusProductBasket');

// Оформление заказа
Route::post('/basket/index',[BasketController::class,'OrderProduc'])->name('OrderProduc');


// ****************************************************

 //  админка
 Route::middleware(['auth','role:1'])->prefix('admin')->group(function () {
    Route::get('/home',[HomeController::class,'Adminindex'])->name('Adminindex');

    Route::get('/settings',[HomeController::class,'Adminsettings'])->name('settings');

    Route::get('/accessories',[HomeController::class,'Adminaccessories'])->name('accessories');

    Route::resource('/users', UserController::class);

    Route::resource('/contacts', ContactsController::class);

    Route::resource('/categories',CategoryController::class);

    Route::resource('/products', ProductController::class);

    Route::resource('/orders', OrderController::class);

});




