<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class Modelislemleri extends Controller
{
      public function liste()
      {
        //$bilgi=Bilgiler::get();
        //$bilgi=Bilgiler::where("id",3)->first();
        //$bilgi=Bilgiler::whereId(4)->first();
        //$bilgi=Bilgiler::whereMetin("Sakla samanı gelir zamanı.")->first();
        $bilgi=Bilgiler::find(3);


        echo $bilgi->metin;
      }

      public function ekle()
      {
          Bilgiler::create([
            "metin"=>"Model dosyasından veri eklendi",
          ]);
      }

      public function guncelle()
      {
        /*Bilgiler::whereHas('getKullanici', function($query){
          $query->where('name', 'ilker')
        })*/
        //$bilgi->getKullanici;
          Bilgiler::whereId(6)->update([
            "metin"=>"Bu alan güncellenmiştir",
          ]);
      }

      public function sil()
      {
        Bilgiler::whereId(8)->delete();
      }
}
