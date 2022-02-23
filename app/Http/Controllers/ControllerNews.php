<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerNews extends Controller
{
    public function news1(){
        return redirect("https://www.educastudio.com/news");
    }
    public function news2($title){
        return redirect("https://www.educastudio.com/news/' . $title");
    }
    }
