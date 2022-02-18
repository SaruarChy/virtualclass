<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authentication extends Controller
{
    //
    public function teasignupform()
    {
        return view('auth.teaSignupForm');
    }
}
