<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;

class DashBoard extends Controller
{
    public function dashHome(){
        $title = "Dashboard - NiceAdmin Bootstrap Template";
        return view('dashHome', compact('title'));
       }
       public function dashLogin(){
        $title = 'Pages / Login - NiceAdmin Bootstrap Template';
        return view('dashLogin', compact('title'));
       }
       public function receiveData(Request $request)
       {
        $personInfo = $request->only('username', 'password');

        if (Auth::attempt($personInfo)) {
            $user = Auth::user();
            $request->session()->put('username', $user->username);
            $request->session()->put('name', $user->name);
            return redirect()->route('dashHome');
        }
    
        return redirect()->route('dashLogin')->with('error', 'Invalid username or password.');
       // $request->validate([
            //'username' => 'required|string',
            //'password' => 'required|string',
       // ]);

        //$username = $request->input('"username');
       // $password = $request->input('password');

        //return redirect()->route('dashHome')->with('username', $username);
       }

       public function dashRegister(){
        $title = 'Pages / Register - NiceAdmin Bootstrap Template';
        return view('dashRegister', compact('title'));
       }

       public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->save();

    
        return redirect()->route('dashHome')->with('success', 'Account created successfully');
    }
}
