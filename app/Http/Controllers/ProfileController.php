<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;

class ProfileController extends Controller
{
    function __construct()
    {
        return $this->middleware('auth');
    }
    //
    public function show_change_password()
    {
        return view('auth/passwords/change_password');
    }

    public function show_profile(){
        return view('auth/passwords/change_password');
    }

    public function change_password(Request $request){
        $this->validate($request, [
            'old_password' => 'required',
            'new_password'    => 'required|min:8',
            'confirm_password'  => 'required|same:new_password'
        ]);
        
        $old_password = Auth::User()->password;           
        if(Hash::check($request->old_password, $old_password)){           
            $user_id = Auth::User()->id;                       
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request->new_password);
            $obj_user->save(); 
            return back()->withMessage('Your password has been changed successfully');
        }else{
            return back()->withErrors(['Incorrect password' => true]);
        }
    }
}
