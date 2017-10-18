<?php 

use Illuminate\Routing\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use User as UserModel;
class AuthController extends \BaseController {

	public function login() {
		if (Session::has('user_id')) {
			return Redirect::route('user.home');
		}

		if($alert = Session::get('alert')){
			$param['alert']=$alert;
		} else {
			$param['temp']=0;
		}
		return View::make('user.auth.login')->with($param);
	}
	public function doLogin() {
		$name = Input::get('name');
		$password= Input::get('pass');
		$user = UserModel::whereRaw('name = ? and password = md5(?)' ,array($name,$password) )->get();
		
		if(count($user) != 0)
		{
			Session::set('user_id',$user[0]->id);
			return Redirect::route('user.home');
		}else{
			$alert['msg']='Name & Password is incorrect';
			$alert['type']='danger';
			return Redirect::route('user.auth.login')->with('alert',$alert);
		}
	 
		return Redirect::route('user.home');
		
	}
	public function signup()
	{
		if($alert=Session::get('alert')){
			$param['alert'] = $alert;
		}else{
			$param['temp']=0;
		}
		return View::make('user.auth.signup');
	}
	public function doSignup()
	{
	  $rules = ['name'      	    => 'required',
				'pass'   			=> 'required|confirmed',
				'pass_confirmation' => 'required',
	  			'email'      		=> 'required|email|unique:user',
				'birthday'      	=> 'required'
				];
				$validator = Validator::make(Input::all(), $rules);
				
				if ($validator->fails()) {
					return Redirect::back()
					->withErrors($validator)
					->withInput();
				}else{
			$user = new UserModel;
			$user->name = Input::get('name');
			$user->password = md5(Input::get('pass'));
			$user->email = Input::get('email');
			$user->birthday = Input::get('birthday');
			
			$user->save();
		
			$alert['msg']='User has been signed up successfully';
			$alert['type']='success';
			return Redirect::route('user.auth.signup');
			}
	}
	public function logOut()
	{
		Session::forget('user_id');
		return View::make('user.auth.login');
		
	}
}