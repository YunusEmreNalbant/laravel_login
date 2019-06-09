<?php


Route::group(["prefix"=>'kullanici'],function(){
    Route::get('/oturumac','KullaniciController@giris_form')->name('kullanici.oturumac');
    Route::post('/oturumac',"KullaniciController@oturumac");
    Route::get('/kaydol','KullaniciController@kaydol_form')->name('kullanici.kaydol');
    Route::post('/kaydol',"KullaniciController@kaydol");
});

Route::get('/hosgeldin','KullaniciController@hosgeldin')->name('hosgeldin');