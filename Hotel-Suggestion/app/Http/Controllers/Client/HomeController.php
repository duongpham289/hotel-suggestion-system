<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
    public function about(){
        return view('client.about');
    }

=======

    public function index()
    {
        return view('client.home.index');
    }

    public function about()
    {
        return view('client.home.about');
    }

    public function contact()
    {
        return view('client.home.contact');
    }

    public function blog(){
        return view('client.home.blog');
    }
    public function offer(){
        return view('client.home.offers');
    }
>>>>>>> master
}
