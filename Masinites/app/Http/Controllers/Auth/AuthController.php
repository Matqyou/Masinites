<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showAuthForm()
    {
        return view('auth.auth'); // Return the combined view for login and registration
    }
}
