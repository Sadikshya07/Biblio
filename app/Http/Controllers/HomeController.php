<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\PostAd;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Categories::all();
        $ads = PostAd::where('approval', true)
            ->select('Image', 'BookName', 'SellerName', 'ContactNo', 'Price', 'Condition')
            ->get();

        return view('index', compact('categories', 'ads'));

    }
}