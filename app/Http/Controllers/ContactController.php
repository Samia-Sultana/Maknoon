<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $catagories = Catagory::all();
        $logo = Logo::get()->last();
        $navigation = Navbar::all();
        return view('contact', compact('catagories', 'logo', 'navigation'));
    }
}

