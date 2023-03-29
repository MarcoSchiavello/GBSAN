<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

use function Termwind\render;

class AuthController extends Controller
{
    function view() {
        return view('login');
    }

    function login(Request $request) {
        /*$user = new User;
        $user->username = 'marco';
        $user->password = Hash::make('cane');
        $user->name = 'Marco';
        $user->surname = 'Schiavello';
        $user->email = 'marco.schiavello4@gmail.com';
        $user->birth_date = '2004-03-27';
        $user->sex = 'M';
        $user->save();*/
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        return redirect(Auth::attempt($credentials) ? '/patients' : '/login');
    }

    function logout() {
        Auth::logout();

        return redirect('/login');
    }
}
