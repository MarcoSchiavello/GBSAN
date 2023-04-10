<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    function changeDataForm() {
        return view('settings.change', [ 'user' => Auth::user() ]);
    }

    function addUserForm() {
        return view('settings.addAdmin');
    }

    function changeData(Request $request) {
        $user = User::find(Auth::user()->id);
        $user->username = $request->username;
        $user->password = !empty($request->password) ? \Hash::make($request->password) : Auth::user()->password;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->birth_date = $request->birthDate;
        $user->sex = $request->sex;
        $user->save();

        return redirect('/settings/change');
    }

    function addUser(Request $request) {

        $user = User::find(Auth::user()->id);
        $user->username = $request->username;
        $user->password = \Hash::make($request->password);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->birth_date = $request->birthDate;
        $user->sex = $request->sex;
        $user->save();
        return redirect('/patients');
    }
}
