<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function templating()
    {
        return view("pages.layouts");
    }

    public function dashboard()
    {
        try {

            return view("pages.app.dashboard");

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
