<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function processRegistration(Request $request)
    {
        return redirect()->route('welcome', [
        'firstName' => $request->input('firstName'),
        'lastName' => $request->input('lastName'),
    ]);
    }

    public function welcome(Request $request)
    {
        $firstName = $request['firstName'];
        $lastName = $request['lastName'];

        return view('welcome', compact('firstName', 'lastName'));
    }
}
