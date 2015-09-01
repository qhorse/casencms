<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;
use Illuminate\Http\Request;
use View;

class IndexController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		session_start();
		if (isset($_SESSION['username'])) {
			return view('backend.index');
		} else {
			return view('backend.public.login');
		}	
	}
}