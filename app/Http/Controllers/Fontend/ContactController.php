<?php namespace App\Http\Controllers\Fontend;

use App\Http\Requests;
use App\Http\Controllers\Fontend\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message;
use Input;
 
class ContactController extends BaseController {

	function __construct(){
		
		$this->message = new Message();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		return view('fontend.contact.index');
	}

	public function form()
	{
		
		$this->message->name = Input::get('name');
		$this->message->email = Input::get('email');
		$this->message->content = Input::get('content');
		//var_dump($this->message);die;
		if( $this->message->save() ){
			return redirect()->route('fontend_contact');
		}
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
