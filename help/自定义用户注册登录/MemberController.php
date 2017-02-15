<?php

namespace App\Http\Controllers\Member;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Member;
use DB;
 
use Illuminate\Support\Facades\HASH;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
     //注册api
    public function register(Request $request)
	{
	 $username =$request->get('username'); 
     $password = $request->get('password'); 
	 if(!($username && $password))
	 return['staus'=>0,'msg'=>'null'];
	 //检查用户名是否存在
	 $user_exists =DB::table('members')
        ->where('username', '=', "$username")
         ->exists();
	 
	    
	  if($user_exists)
	 
		return['staus'=>3,'msg'=>'exists'];
		//加密
		$hashed_password =bcrypt($password);
		$members = new Member;
		$members->username=$username;
		$members->password=$hashed_password;
		$members->phone='null';
		$members->intro='null';
		//dd($hashed_password);
		if($members->save())
		{return['staus'=>1,'msg'=>'2注册成功'];}
	}
	
	//登录api
	 public function login(Request $request)
	 { 
	 $username =$request->get('username'); 
     $password = $request->get('password'); 
	 
		 if(!($username && $password))
	 return['staus'=>0,'msg'=>'null'];
	 
	 $user_exists=DB::table('members')->where('username', '=', $username)->first();
		// dd($usere);
		 if(!$user_exists)
		 dd("用户不存在");
		 //$hashed_password =DB::table('members')->where('username',  $username)->value('password');
		 $hashed_password =$user_exists->password;
		 if(!Hash::check($password,$hashed_password))
		  dd("密码有误");
		 // dd($hashed_password);
		 session()->put('username',$user_exists->username);
		 session()->put('password',$user_exists->password);
		  dd(session()->all());
		   dd("2");
		 }
		 
		 //登录api
	 public function logout()
	 {
		session()->forget('username'); 
		session()->forget('password'); 
		
		 dd(session()->all());
		 }
		
		public function is_login()
	 {
		 return session('id') ?:false;}
}
