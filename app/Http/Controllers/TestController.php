<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view ('home', [
            "name"=> "TAMO N ",
            "last_name"=> " Chantal Calvine"
        ]);
    }

    public function main ()
    {
        return view ('main');
    }

    public function article ()
    {
        return view ('article');
    }

    public function about()
    {
        return view('pages.about');
    }
}
