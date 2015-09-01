<?php namespace App\Http\Controllers\Fontend;

use App\Http\Requests;
use App\Http\Controllers\Fontend\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Page;
 
class PageController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$data = DB::table('page')->where('category_id','9')->get();
		//var_dump($data);die;
		return view('fontend.page.index',['data'=>$data]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function other()
	{
		$data = DB::table('page')->where('category_id','10')->get();
		return view('fontend.page.other',['data'=>$data]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
