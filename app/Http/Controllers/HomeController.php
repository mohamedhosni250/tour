<?php

namespace App\Http\Controllers;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomePage()
    {
        $packages = Package::all();
        return view('home',compact('packages'));

    }
}
