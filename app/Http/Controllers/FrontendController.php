<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Software;
use App\Models\Slide;

class FrontendController extends Controller
{
    /**
     * Show homepage with dynamic hero slides.
     */
    public function index()
    {
        $softwares = Software::all();
        $slides = Slide::all();
        // $slides = Slide::latest()->get();
        return view('index', compact('slides' , 'softwares'));
    }

    /**
     * Show the product site.
     */
    public function productSite()
    {
        return view('product-site');
    }
}
