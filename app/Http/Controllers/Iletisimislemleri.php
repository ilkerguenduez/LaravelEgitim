<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iletisim;

class Iletisimislemleri extends Controller
{
    public function index()
    {
        return view("iletisim");
    }

    public function ekleme(Request $request)
    {
        $adsoyad=$request->adsoyad;
        $telefon=$request->telefon;
        $mail=$request->mail;
        $mesaj=$request->mesaj;
        /*echo $adsoyad."<br>";
        echo $telefon."<br>";
        echo $mail."<br>";
        echo $mesaj."<br>";*/
        Iletisim::create([
          "adsoyad"=>$adsoyad,
          "telefon"=>$telefon,
          "mail"=>$mail,
          "mesaj"=>$mesaj,
        ]);
        echo "başarıyla gönderildi";
    }
}
