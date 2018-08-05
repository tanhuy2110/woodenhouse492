<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'password' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $name = $request->input('name');
            $password = $request->input('password');

            if( Auth::attempt(['name' => $name, 'password' =>$password])) {
                return redirect()->intended('/admin/dashboard');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
