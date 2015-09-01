<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use Input;
 
class PublicController extends BaseController {

	function __construct(){	

		$this->user = new User();
	}
	/**
	 * 用户登陆
	 */
	public function login()
	{
		return view('backend.public.login');
	}
	/**
	 * 检测登陆
	 */
	public function checklogin()
	{
		if ($_POST['username']) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			//$data = DB::table('users')->get();
			$data = DB::table('users')->where('username', $username)->first();
			//var_dump(123);
			if($data != null){
				//var_dump($data->password);die;
				if ($data->password == md5(md5($password))) {
					//var_dump(123);die;
					session_start();
					$_SESSION['username'] = $username;
					return view('backend.index');
				} else {
					echo "<script>alert('密码错误');history.go(-1);</script>";
				}
			}	
		}
		
	}

	/**
	 * 锁屏
	 */
	public function lock()
	{
	
		return view('backend.public.lock');
	}
	/**
	 * 解锁
	 */
	public function unlock()
	{
		if ($_POST['username']) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			//$data = DB::table('users')->get();
			$data = DB::table('users')->where('username', $username)->first();
			//var_dump(123);
			if($data != null){
				//var_dump($data->password);die;
				if ($data->password == md5(md5($password))) {
					//var_dump(123);die;
					session_start();
					$_SESSION['username'] = $username;
					return view('backend.index');
				} else {
					echo "<script>alert('密码错误');history.go(-1);</script>";
				}
			}	
		}
	}

	/**
	 * 用户退出
	 */
	public function logout()
	{
		
		if (isset($_SESSION['username'])) {
			session('username', null);
			echo "<script>alert('成功退出')</script>";
			return view('backend.public.login');
		} else {
			return view('backend.public.login');
		}
		
	} 



}


