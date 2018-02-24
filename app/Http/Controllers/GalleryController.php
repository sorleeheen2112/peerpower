<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gallery/index');
    }
    public function post_upload(Request $request){
      // if($request->hasFile('file')){
      //   foreach($request->file('file') as $key3 => $file){
      //     echo $file; die();
      //
      //   }
      // }else{
      //   echo "string";
      // }
     print_r($_FILES);
    		// $input = Input::all();
    		// $rules = array(
    		//     'file' => 'image|max:3000',
    		// );
        //
    		// $validation = Validator::make($input, $rules);
        //
    		// if ($validation->fails())
    		// {
    		// 	return Response::make($validation->errors->first(), 400);
    		// }

    	}
}
