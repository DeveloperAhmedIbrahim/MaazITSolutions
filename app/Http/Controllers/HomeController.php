<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('home');
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function service($slug = null)
    {
        if($slug === 'it-infrastructure')
        {
            return view('services.it-infrastructure');
        }
        elseif($slug === 'cyber-security')
        {
            return view('services.cyber-security');
        }
        elseif($slug === 'development')
        {
            return view('services.development');
        }
        elseif($slug === 'designing')
        {
            return view('services.designing');
        }
        elseif($slug === 'wordpress-and-shopify')
        {
            return view('services.wordpress-and-shopify');
        }
        else
        {
            return view('service');
        }
    }

    public function contact()
    {
        return view('contact');
    }
}
