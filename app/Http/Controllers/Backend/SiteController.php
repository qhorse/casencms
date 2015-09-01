<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Site;
use Input;
 
class SiteController extends BaseController {

	function __construct(){	

		$this->site = new Site();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$data = DB::table('site')->get();
		if (!empty($data)) {
			return view('backend.site.index',['data'=>$data]);
		} else {
			return view('backend.site.index');
		}
			
	}

	public function save()
	{
		$data = DB::table('site')->get();
		if (!empty($data)) {
			echo "<script>alert('更新信息还没实现');
			location.href='http://laravel.cc/admin/site';
			document.onmousedown=click</script>";
			echo "更新信息还没实现";
			//$this->site->id = 1;
			/*$this->site->domain = Input::get('domain');
			$this->site->hottel = Input::get('hottel');
			$this->site->address = Input::get('address');
			$this->site->seo_title = Input::get('title');
			$this->site->seo_keyword = Input::get('keyword');
			$this->site->seo_description = Input::get('description');
			//var_dump($this->site);die;
			if( $this->site->where('id',1)->update())
			{
				return redirect()->route('admin.site');
			}*/
		} else {
			$this->site->id = 1;
			$this->site->domain = Input::get('domain');
			$this->site->hottel = Input::get('hottel');
			$this->site->address = Input::get('address');
			$this->site->seo_title = Input::get('title');
			$this->site->seo_keyword = Input::get('keyword');
			$this->site->seo_description = Input::get('description');
			//var_dump($this->site);die;
			if( $this->site->save())
			{
				return redirect()->route('admin.site');
			}
		}
		
			
	}
}