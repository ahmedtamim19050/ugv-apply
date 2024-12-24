<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function apply()
    {
        return view('pages.apply');
    }
    public function FeesStucture()
    {
        return view('pages.fees-stucture');
    }
    public function AdmissionRules()
    {
        return view('pages.admission-rules');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    
}
