<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

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

Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('/hello/{name}', function(string $name) {
//    return "<h2>Hello, {$name}</h2>";
//});
///** мы указываем по какому адресу хотим обрабатывать этот маршрут. У нас это /hello/ и {name} это будет динамическое
// * значение. И это динамическое значение будет передаваться в переменную $name. Далее мы просто возвращаем строку
// *
// */

//группировка
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
    //подключим ресур контроллер
    Route::resource('/news', AdminNewsController::class);
});



Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name('news.index');

Route::get('/news/{id}', [\App\Http\Controllers\NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

