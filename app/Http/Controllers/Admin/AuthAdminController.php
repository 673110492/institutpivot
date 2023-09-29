<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function loginPage()
    {
        if (auth('admin')->check())
            return back();
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {

        if (Auth::guard('admin')->user())
            return to_route('home.index');
        $this->validator($request);
        $data = $request->only('email', 'password');
        $remember = $request->get('remember', false);
        if (!$remember) {
            $remember = true;
        }
        if (Auth::guard('admin')->attempt($data, $remember)) {
            return to_route('home.index');
        }
        return $this->loginFailed();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return to_route('auth.loginPage');
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];

        //validate the request.
        $request->validate($rules, $messages);
    }

    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error_message', 'Utilisateur, Impossible de vous identifier! Verifier votre email et votre mot de passe!');
    }
}
