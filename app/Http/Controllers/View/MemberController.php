<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function toLogin($value='')
    {
        return view('Login');
    }

    public function toRegister($value='')
    {
        return view('Register');
    }

}
