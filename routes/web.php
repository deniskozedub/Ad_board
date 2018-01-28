<?php



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/ad','AdController@ad_page')->name('ad_page');
Route::post('/ad/adhandler','AdController@ad_page_handler')->name('ad_page_handler');
Route::get('/delete_ad/{id}','AdController@delete_ad_handler')->name('delete_ad_handler');
Route::get('/edit/{id}','AdController@edit_page')->name('edit_page');
Route::post('/edit/edithandler','AdController@edit_handler')->name('edit_ad_handler');
Route::get("ad/one_ad/{id}",'AdController@one_ad')->name('one_ad');
