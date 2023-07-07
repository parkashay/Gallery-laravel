<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Image;

class MainController extends Controller
{
    public function getPageData() {
        $images = Image::all();
        $about = About::all();
        return view('welcome');
    }
    public function addImage(){
        
    }
}
