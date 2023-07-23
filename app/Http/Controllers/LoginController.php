<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }
    public function create()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $user = new User(); 
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $request->session()->put('user', $user->name);
        return redirect()->route('home');
    }
}
class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        //
    }
}


