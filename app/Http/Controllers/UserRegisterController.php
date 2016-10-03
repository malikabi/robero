<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ValidateRegistration;
use App\User;
use App\UserProfile;
use Hash;

class UserRegisterController extends Controller
{
    public function register_page()
    {
    	return view('public.register');
    }

    public function register_submit(ValidateRegistration $request)
    {

    	$user = new User();

    	$user->user_name 	= $request->user_name;
    	$user->email 		= $request->email;
    	$user->password 	= Hash::make($request->password);
    	
    	if($request->user_type == 3 || $request->user_type == 4){
    		$user->user_role_idFk 	= $request->user_type;
    	}else{
    		return redirect()->back();
    	}

    	$user->save();

    	$u_profile = new UserProfile();

    	$u_profile->first_name		= $request->first_name;
    	$u_profile->last_name		= $request->last_name;
    	$u_profile->user_idFk		= $user->user_id;

    	$u_profile->save();
    	
    	return redirect('/');

    }

}
