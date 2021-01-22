<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

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
        return view('profile');
    }

    public function update_profile(Request $request){
        $this->validate($request, [
            'first_name' => ['string', 'max:255', 'alpha'],
            'last_name'    => ['string', 'max:255', 'alpha'],
            'avatar'  => ['image', 'max:2048'],
        ]);

        
        if($request->hasFile('avatar')){
            $user = Auth::user();
            $prev_avatar = $user->avatar;
            $avatar = $request->file('avatar');
            $filename = $user->username.time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
            $user->avatar = $filename;
            $user->save();
            if($prev_avatar != ""){
                $prev_path = public_path("/uploads/avatars/$prev_avatar");
                if(FILE::exists($prev_path)){
                    FILE::delete($prev_path);
                }
            }
            
        }
        
        if($request->first_name != ''){
            $user = Auth::user();
            $user->first_name = $request->first_name;
            $user->save();
        }

        if($request->last_name != ''){
            $user = Auth::user();
            $user->last_name = $request->last_name;
            $user->save();
        }
        return back()->withMessage('Your profile has been updated successfully!');
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
