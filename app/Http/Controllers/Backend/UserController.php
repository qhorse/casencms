<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Input;
 
class UserController extends BaseController {

	function __construct(){
		
		$this->user = new User();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = DB::table('users')->get();
		return view('backend.user.index',['data'=>$data]); 
	}
	/**
	 * 用户权限
	 */
	public function power()
	{

		return view('backend.user.power');
	}
	/**
	 * 添加用户
	 */
	public function add()
	{
		
		return view('backend.user.add');
	}

	/**
	 * 保存添加用户信息
	 */
	public function store()
	{
		$this->user->username = Input::get('username');
		$this->user->password = md5(md5(Input::get('password')));
		$this->user->email = Input::get('email');
		$this->user->authority = Input::get('authority');
		//var_dump($this->user);die;
		if( $this->user->save() ){
			return redirect()->route('admin.user');
		}
	}



}