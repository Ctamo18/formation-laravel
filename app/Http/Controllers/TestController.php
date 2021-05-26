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
}
