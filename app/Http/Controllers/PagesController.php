<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function aboutUs()
    {
        return view('layouts.pages.about');
    }
    public function services()
    {
        return view('layouts.pages.services');
    }
    public function careers()
    {
        return view('layouts.pages.careers');
    }
    public function jobDetails()
    {
        return view('layouts.pages.job-details');
    }
    public function contact()
    {
        return view('layouts.pages.contact');
    }
}