<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\Category;
use App\Page;
use App\Message;
use Input;
 
class OtherController extends BaseController {

	function __construct(){	
		$this->article = new Article();
		$this->category = new Category();
		$this->page = new Page();
	

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}
	
	/**
	 * 留言信息列表
	 */
	public function message()
	{
		$data = Message::paginate(20);
		/*var_dump($data);
		die;*/
		/*$data = DB::table('message')->get();
		var_dump($data);die;*/
		return view('backend.other.index',['data'=>$data]);

	}

}


