<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UyelikIslemleri extends Controller
{
    public function uyekayit(Request $request)
    {
        $request->validate([
          "adsoyad"=>"required|min:3|max:50",
          "telefon"=>"required|min:10|max:12",
          "mail"=>"required|email"
        ]);

        echo "Başarılı";
    }
}
