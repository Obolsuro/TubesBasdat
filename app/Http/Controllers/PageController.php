<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userM;
use App\Models\tweets;
use App\Models\follow;

class PageController extends Controller
{
    public function masuk(Request $request)
    {
        $email = $request->get('email');
        $pasword = $request->get('password');
        $user = userM::where('mail', '=', $email)->get();

        if ($user != null) {
            if ($user[0]['pass'] == $pasword) {
                $request->session()->put('id', $user[0]['id']);
                return redirect('profile');
            } else {
                return redirect('/')->with('danger', 'Wrong password or Email');
            }
        } else {
            return redirect('/')->with('danger', 'Wrong password or Email');
        }
    }
    public function isOn()
    {
        if (session('id') != null) {
            return true;
        } else {
            return redirect('logout');
        }
    }
    public function login()
    {
        return view('login');
    }
    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
    public function addTweet()
    {
        return view('user.addTweet');
    }
    public function search()
    {
        $follow = follow::where('PI', '=', session('id'))->get();
        $following = array();
        foreach ($follow as $cek) {
            array_push($following, $cek['following']);
        }


        $user = userM::whereNotIn('_id', $following)->where('_id', '!=', session('id'))->get();
        $data['user'] = $user;
        return view('user.search', $data);
    }
    public function following()
    {
        $follow = follow::where('PI', '=', session('id'))->get();
        $following = array();
        foreach ($follow as $cek) {
            array_push($following, $cek['following']);
        }


        $user = userM::whereIn('_id', $following)->where('_id', '!=', session('id'))->get();
        $data['user'] = $user;
        return view('user.following', $data);
    }
    public function followers()
    {
        $follow = follow::where('following', '=', session('id'))->get();
        $following = array();
        foreach ($follow as $cek) {
            array_push($following, $cek['PI']);
        }


        $user = userM::whereIn('_id', $following)->where('_id', '!=', session('id'))->get();
        $data['user'] = $user;
        return view('user.followers', $data);
    }
    public function register()
    {
        return view('register');
    }
    public function daftar(Request $request)
    {
        $email = $request->get('email');
        $uname = $request->get('username');
        $password = $request->get('password');
        $bd = $request->BD;
        $pengguna = new userM();
        $pengguna->uname = $uname;
        $pengguna->pass = $password;
        $pengguna->mail = $email;
        $pengguna->bd = $bd;
        $pengguna->save();
        return redirect('/');
    }
    public function profile()
    {
        $data['user'] = userM::where('_id', '=', session('id'))->get();
        $data['tweet'] = tweets::where('PI', '=', session('id'))->count();
        $data['following'] = follow::where('PI', '=', session('id'))->count();
        $data['followers'] = follow::where('following', '=', session('id'))->count();
        return view('user.profile', $data);
    }
    public function hapusAkun()
    {

        $user = userM::find(session('id'));
        $user->delete();
        session()->flush();
        return redirect('/');
    }
    public function updateProfile(Request $request)
    {
        $uname = $request->get('uname');
        $user = userM::find(session('id'));
        $user->uname = $uname;
        $user->save();
        return redirect('/profile');
    }
    public function home()
    {
        $data['tweet'] = tweets::whereNull("reply")->get();
        return view('user.home', $data);
    }
    public function tulis()
    {
        $data['tweet'] = tweets::where('PI', '=', session('id'))->get();
        return view('user.mytweet', $data);
    }
    public function add(Request $request)
    {
        $tweet = $request->get('tweet');
        $tweets = new tweets();
        $tweets->PI = session('id');
        $tweets->content = $tweet;
        $tweets->save();
        return redirect('/tulis');
    }
    public function follow(Request $request)
    {
        $follow = new follow();
        $follow->PI = session('id');
        $follow->following = $request->get('id');
        $follow->save();
        return redirect('/profile');
    }
    public function deleteTweet(Request $request)
    {
        $id = $request->get('id');
        $follow = tweets::find($id);
        $follow->delete();
        return redirect('/tulis');
    }
    public function deleteFollower(Request $request)
    {
        $id = $request->get('id');
        $follow = follow::where('PI', '=', session('id'))->where('following', '=', $id)->get();
        $hapus = follow::find($follow[0]['id']);
        $hapus->delete();
        return redirect('/following');
    }
    public function detailTweet(Request $request)
    {


        $tweet = tweets::find($request->get('id'))->get();
        $tweets = tweets::where('reply', '=', $tweet[0]['id'])->get();
        $user = userM::find($tweet[0]['PI'])->get();
        $data['tweet'] = $tweet;
        $data['tweets'] = $tweets;
        $data['user'] = $user;

        return view('user.detailTweet', $data);
    }
    public function reply(Request $request)
    {
        $tweet = tweets::find($request->get('id'))->get();
        $tweets = tweets::where('reply', '=', $tweet[0]['id'])->get();
        $user = userM::find($tweet[0]['PI'])->get();
        $data['tweet'] = $tweet;
        $data['tweets'] = $tweets;
        $data['user'] = $user;
        $reply = new tweets();
        $reply->PI = session('id');
        $reply->content = $request->get('reply');
        $reply->reply = $request->get('id');
        $reply->save();


        return redirect('/home');
    }
}
