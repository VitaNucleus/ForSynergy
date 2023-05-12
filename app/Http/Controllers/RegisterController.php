<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function save(Request $request){
        if (Auth::check()) {
            return redirect(route('user.private'));
        }

        $validateFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ((User::whereEmail($validateFields['email']))->exists()) {
            return redirect(route('user.registration'))->withErrors([
                'formError' => 'This email exists'
            ]);
        }

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'Error in save user'
        ]);
    }
}
