<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $users;

    public function __construct()
    {
        $this->users = new User();
    }

    public function login()
    {
        try {
            return view("pages.authorization.login");
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function proses_login(Request $request)
    {
        try {

            return redirect(route("app.dashboard"));

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
