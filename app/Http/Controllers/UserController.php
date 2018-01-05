<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function login(Request $request){
        $validation = Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if($validation->fails()){
            return response()->json(['error'=>$validation->errors()]);
        }

        if(!Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
           return response()->json(['error'=>'This User Do Not Exist!']);
        }

        return response()->json(['success'=>'/admin']);
    }

    public function logout(){
        Auth::logout();
        return redirect(route('main'));
    }

}
