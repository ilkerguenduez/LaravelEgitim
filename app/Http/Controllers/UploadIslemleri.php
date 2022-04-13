<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadIslemleri extends Controller
{
    public function resimYukleme(Request $request)
    {
      $resimadi=rand(0,1000).".".$request->resim->getClientOriginalName();
      $yukle=$request->resim->move(public_path('images'),$resimadi);
    }
}
