<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function templating()
    {
        return view("pages.layouts");
    }
}
