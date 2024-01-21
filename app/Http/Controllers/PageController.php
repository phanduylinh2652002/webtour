<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Tour;
class PageController extends Controller
{
    //
    public function getInfo(){
        $categories = Category::get();
        $tours = Tour::get();
        return view('home.homePage', compact('categories', 'tours'));
    }

    public function getDetail($id){
        $categories = Category::get();
        return view('home.detailTour', compact('categories'));
    }
}
