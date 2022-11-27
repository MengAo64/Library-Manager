<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    // buat register
    public function register()
    {
        return view('Login.sign-up');
    }
    
    public function registerStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->to("/login");
    }


//  buat login

    public function login()
    {
        return view('Login.sign-in');
    }
    
    public function loginStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            
            return redirect()->to("/home");
        }

        return back()->with('error','Wrong Username or Password');
    }

    // buat logout

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect()->to("/login");
    }
}
