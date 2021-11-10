<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsUploadController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//
//Route::get('/hello/{name}', function(string $name) {
//    return "<h2>Hello, {$name}</h2>";
//});
///** мы указываем по какому адресу хотим обрабатывать этот маршрут. У нас это /hello/ и {name} это будет динамическое
// * значение. И это динамическое значение будет передаваться в переменную $name. Далее мы просто возвращаем строку
// *
// */

Route::get('/', function () {
    return view('news.myWelcome');
});

//группировка
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::get('/', AdminIndexController::class)->name('index');
    //подключим ресур контроллер
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});


Route::get('/news', [NewsController::class, 'index']) //метод индекс в ньюсконтроллере
->name('news.index');

Route::get('/news/{id}', [NewsController::class, 'show']) //метод шоу в ньюсконтроллере
->where('id', '\d+') //где id это число (валидация, регулярка)
->name('news.show');


Route::resource('/news/feedback', FeedbackController::class);

Route::get('/news/feedback', [FeedbackController::class, 'index'])
    ->name('news.feedback.index');


Route::resource('/news/upload', NewsUploadController::class);
Route::get('/news/upload', [NewsUploadController::class, 'index'])->name('news.upload.index');


Route::get('/news/category/{CategoryId}', [NewsController::class, 'FromCategory'])
    ->where('CategoryId', '\d+')
    ->name('news.fromCategory');

Route::get('news/category', [NewsController::class, 'categoriesList'])
    ->name('news.categoryList');

Route::get('/authorization', [NewsController::class, 'authorization'])
    ->name('authorization');

Route::get('/news/add', [NewsController::class, 'addNews'])
    ->name('news.add');

