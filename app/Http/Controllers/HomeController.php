<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function contact(Request $request)
    {
        if($request->method() === 'POST')
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);

            Mail::to('siddiqui.ahmedibrahim@gmail.com')->send(new ContactMail($request->all()));
            return redirect()->route('contact')->with('success', true);
        }
        else
        {
            return view('contact');
        }
    }
}
