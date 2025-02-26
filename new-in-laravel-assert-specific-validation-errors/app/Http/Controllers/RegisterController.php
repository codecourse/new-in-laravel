<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
    }
}
