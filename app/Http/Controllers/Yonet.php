<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site()
    {
        $data["yazi1"]="PHP Laravel";
        $data["yazi2"]="Web Sitemize Hoşgeldiniz";
        $data["yazi3"]="Hizmetler";
        $data["yazi4"]="Web Tasarım ve Yazılım";
        $data["yazi5"]="Bize Ulaşın";
        return view('web',$data);
    }
}
