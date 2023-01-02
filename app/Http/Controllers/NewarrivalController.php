<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Product;
use Illuminate\Http\Request;

class NewarrivalController extends Controller
{
    public function index(){
        $catagoryProducts = Product::where('latest_product', 0)->get();
        $catagories = Catagory::all();
        $logo = Logo::get()->last();
        $navigation = Navbar::all();
        return view('new_arrivals', compact('catagoryProducts','catagories', 'logo', 'navigation'));
    }
}

