<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    protected $administrator;

    public function __construct()
    {
        $this->administrator = new User();
    }

    public function index()
    {
        try {

            return view("pages.accounts.administrator.index");

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
