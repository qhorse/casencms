<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\Category;
use App\Page;
use Input;
 
class ArticleController extends BaseController {

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
		$data = Article::paginate(15);
		//$data = DB::table('article')->get();
		return view('backend.article.index',['data'=>$data]);
	}
	/**
	 * 添加内容
	 */
	public function add()
	{
		$data = $this->allcate(0);
		return view('backend.article.add',['data'=>$data]);
	}

	private function imgaeUpload($file){
		if($file->isValid()){
			$imagename = sha1(str_random()).'.'.$file->getClientOriginalExtension();
			if($file->move('Upload/images/'.date('Ymd'),$imagename)){
				return 'Upload/images/'.date('Ymd').'/'.$imagename;
			}
		}
	}

	/**
	 * 保存内容
	 */
	public function store(Request $request)
	{
		//$file = Request::file('thumb');
		$file = Input::file('thumb');
		//网站跟目录
		$PHP_SELF=$_SERVER['PHP_SELF'];
		$url='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF,'/')+1);
		//保存数据
		$this->article->title = Input::get('title');
		$this->article->category_id = Input::get('category_id');
		$this->article->thumb = $url.$this->imgaeUpload($file);
		$this->article->description = Input::get('description');
		$this->article->content = Input::get('content');
		//die;
		if( $this->article->save() ){
			return redirect()->route('admin.article');
		}
	}

	/**
	 * 单页内容列表
	 */

	public function page()
	{
		$data = Page::paginate(15);
		return view('backend.article.page',['data'=>$data]);
	}

	/**
	 * 添加单页内容
	 */
	public function pageadd()
	{
		$data = $this->allcate(0);
		return view('backend.article.pageadd',['data'=>$data]);
	}

	/**
	 * 保存单页内容
	 */
	public function pagestore()
	{
		$file = Input::file('thumb');
		//网站跟目录
		$PHP_SELF=$_SERVER['PHP_SELF'];
		$url='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF,'/')+1);
		//保存数据
		$this->page->title = Input::get('title');
		$this->page->category_id = Input::get('category_id');
		$this->page->thumb = $url.$this->imgaeUpload($file);
		$this->page->description = Input::get('description');
		$this->page->content = Input::get('content');
		//var_dump($this->page());die;
		if( $this->page->save() ){
			return redirect()->route('admin.article.page');
		}
	}



}


