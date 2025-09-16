<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm()
    {

      
        return view('admin.auth.login');
    }

    public function authenticate()
    {
        //
    }

    public function logout()
    {
        
    }
}
