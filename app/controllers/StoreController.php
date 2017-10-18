<?php 
use User as UserModel;
class StoreController extends BaseController{

	public function home() {
		$param['stores'] = UserModel::get();
		return View::make('user.store.home')->with($param);
	} 
	
	public function del($id)
	{
		 UserModel::where('id', $id)->delete();
		 
		 return Redirect::route('user.home');
	}
	public function edit($id)
	{
		$result=UserModel::find($id);
		$param['user'] = $result;
		
		return View::make('user.store.edit')->with($param);
	}
	public function doUpdate()
	{
		$id = Input::get('id');
		$user = UserModel::find($id);
		$user->name = Input::get('name');
		$user->email= Input::get('email');
		$user->birthday= Input::get('birthday');
		$user->save();
		
		return Redirect::route('user.store.edit', $id);
	}
}
