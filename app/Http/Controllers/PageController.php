<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userM;

class PageController extends Controller
{
    public function masuk(Request $request)
    {
        $email = $request->get('email');
        $pasword = $request->get('password');
        $user = userM::where('mail', '=', $email)->get();
        if ($user[0]['pass'] == $pasword) {
            return view('user.profile', compact('users'));
        } else {
            redirect('login');
        }
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function daftar(Request $request)
    {
        $email = $request->get('email');
        $uname = $request->username;
        $password = $request->password;
        $bd = $request->BD;
        $pengguna = new userM();
        $pengguna->uname = $uname;
        $pengguna->pass = $password;
        $pengguna->mail = $email;
        $pengguna->bd = $bd;
        $pengguna->save();
        redirect('/');
    }
    public function profile()
    {
        return view('user.profile');
    }
}
