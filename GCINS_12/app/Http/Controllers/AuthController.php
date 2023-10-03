<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class AuthController extends Controller
{

    public function register()
{
    return view('Register');
}

    public function welcome(Request $request)
{
    $firstName = $request->input('first_name');
    $lastName = $request->input('last_name');
    
    return view('Welcome', compact('firstName', 'lastName'));
}




};
