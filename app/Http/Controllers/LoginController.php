<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function Login(Request $request){
        $uname = $request->input('username');
        $pword = $request->input('password');

        $user = UserModel::where('username',$uname)->first();
        if(!$user){
            return "User Not Found";
        };
        if (password_verify($pword, $user->password)){
            session(['username', $user->idnumber]);
            session(['userlevel', $user->ulevel]);

            if ($user->userlevel === "Administrator") {
                return redirect()->route('admin.index');
            } else if ($user->userlevel === "Student"){
                return redirect()->route("stud.index");
            }
        } else {
            return "Incorrect Password";
        }
    }
}
