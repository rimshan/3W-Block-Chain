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
set_time_limit(6000);
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/callback', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

Route::get('/last_price', 'Apicontroller@getLastPrices');
//Route::get('/last_price_view', 'Apicontroller@viewLastPrices');
//Route::controller('last_price_view', 'Apicontroller', [ 'anyData' => 'last_price_view.data', 'getIndex' => 'last_price_view', ]);
Route::get('/last_price_view','Apicontroller@getLastPriceView');
Route::get('/last_price_view/gettable','Apicontroller@getLastPriceTableData');
Route::get('/trade_history', 'Apicontroller@getTradeHistory');
//Route::get('/trade_history_view', 'Apicontroller@viewTradeHistory');

Route::get('/trade_history_view','Apicontroller@getTradeHistoryView');
Route::get('/trade_history_view/gettable','Apicontroller@getTradeHistoryTableData');