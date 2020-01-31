<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutherController extends Controller
{
    public function profile()
    {
        return view('qawalb.profile');
    }
}
