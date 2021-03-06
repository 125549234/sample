<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{
    //

    public function create(){
        return view('sessions.create');
    }


    public function store(Request $request){

        $this->validate($request,['email'=>'required|email|max:255','password'=>'required']);



        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials,has('remember'))){

            session()->flash('success','欢迎回来');
            return redirect()->route('users.show',[Auth::user()]);
        }else{
            session()->flash('daner','很抱歉，您的邮箱和密码不匹配');
            return redirect()->back();
        }



    }


    public function delete(){
        Auth::logout();
        session()->flash('success','您已成功退出！');
        return redirect('login');
    }
}
