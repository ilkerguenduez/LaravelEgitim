<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\FormIslemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\Iletisimislemleri;
use App\Http\Controllers\UploadIslemleri;







Route::get('/', function () {
    return view('welcome');
});
//Route::get('/deneme',function(){
    //return view('ornek');
//});
Route::get("/Laravel/{isim}",[Test::class,'test']);
Route::get("/url",[Deneme::class,'fonksiyonismi']);
Route::get("/site",[Yonet::class,'site'])->name('ana');
Route::get("/form",[FormIslemleri::class,'gorunum']);
Route::middleware('arakontrol')->post("/form-sonuc",[FormIslemleri::class,'sonuc'])->name('sonuc');
Route::get("/ekle",[Veritabaniislemleri::class,'ekle']);
Route::get("/guncelle",[Veritabaniislemleri::class,'guncelle']);
Route::get("/sil",[Veritabaniislemleri::class,'sil']);
Route::get("/listele",[Veritabaniislemleri::class,'bilgioku']);
Route::get("/modelliste",[Modelislemleri::class,'liste']);
Route::get("/modelekle",[Modelislemleri::class,'ekle']);
Route::get("/modelguncelle",[Modelislemleri::class,'guncelle']);
Route::get("/modelsil",[Modelislemleri::class,'sil']);
Route::get("/iletisim",[Iletisimislemleri::class,'index']);
Route::post("/iletisim-sonuc",[Iletisimislemleri::class,'ekleme'])->name("iletisim-sonuc");
Route::get("/upload",function(){
    return view('upload');
});
Route::post('/resim-ilet',[UploadIslemleri::class,'resimYukleme'])->name('yukle');
Route::get("/uye",function(){
    return view('uyelik');
});
Route::post('/uye-kayit',[App\Http\Controllers\UyelikIslemleri::class,'uyekayit'])->name('uyekayit');
