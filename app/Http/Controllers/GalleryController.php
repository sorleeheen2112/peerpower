<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Image as Image;
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
      $file = $request->file('file');
      $path = 'images/uploads';
      $filename = $file->getClientOriginalName();
      $getsize = $file->getClientSize();
      $file->move('images/uploads',$file->getClientOriginalName());
      $image = new Image;
      $image->image_name = $filename;
      $image->image_size = $getsize;
      $image->part = 'images/uploads'.$filename;
      $image->user_id = Auth::user()->id;
      // print_r($getsize); die();
      ($getsize<1000000)?$image->save():die();

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
