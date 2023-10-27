<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import model User jika belum diimpor

class UserController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('user', compact('users'));
    }
}
