<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;
use Illuminate\Http\Request;
use App\Category;
use Input;

 
class CategoryController extends BaseController {

	function __construct(){
		
		$this->category = new Category();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
				
		$data = $this->allcate(0);
		//var_dump($data);die;
		return view('backend.category.index',['data'=>$data]);
	}
	/**
	 * 添加栏目
	 */
	public function add()
	{
				
		$data = $this->allcate(0);
		//var_dump($data);die;
		return view('backend.category.add',['data'=>$data]);
	}

	/**
	 * 保存栏目
	 */
	public function store()
	{
				
		$this->category->pid = Input::get('pid');
		$this->category->token = Input::get('_token');
		$this->category->name = Input::get('name');
		$this->category->mark = Input::get('mark');
		$this->category->description = Input::get('description');
		//var_dump($this->category);die;
		if( $this->category->save() ){
			return redirect()->route('admin.category.index');
		}
	}

	/**
	 * 编辑栏目
	 */
	public function edit($id)
	{
				
		$id = $_GET['id'];
		var_dump($id);die;
		$data = $this->allcate(0);
		//var_dump($data);die;
		return view('backend.category.edit',['data'=>$data]);
	}

	/**
	 * 删除栏目
	 */
	public function delete()
	{
		die;
		$id = $_GET['id'];
		var_dump($id);die;
		$data = $this->allcate(0);
		//var_dump($data);die;
		return view('backend.category.edit',['data'=>$data]);
	}

}


