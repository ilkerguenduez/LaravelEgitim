<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Veritabaniislemleri extends Controller
{
      public function ekle()
      {
          DB::table("bilgiler")->insert(["metin"=>"Sakla samanı gelir zamanı."]);
      }
      public function guncelle()
      {
          DB::table("bilgiler")->where("id",1)->update(["metin"=>"Bu metin alanı güncellenmiştir."]);
      }
      public function sil()
      {
          DB::table("bilgiler")->where("id",1)->delete();
      }
      public function bilgioku()
      {
        /*$veriler=DB::table("bilgiler")->get();
        foreach ($veriler as $key => $bilgi) {
          echo $bilgi->id." ".$bilgi->metin;
          echo "<br>";
        }*/

        $veri=DB::table("bilgiler")->where("id",3)->first();
        echo $veri->metin;
      }
}
