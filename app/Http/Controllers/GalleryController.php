<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Image as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
      $image->part = 'images/uploads/'.$filename;
      $image->user_id = Auth::user()->id;
      $image->type = $file->getClientOriginalExtension();
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
    public function getgallery($id){
      $c_png = 0;
      $c_jpg = 0;
      $sum_png = 0;
      $sum_jpg = 0;
      $images = Image::where('user_id',$id)->get();

      $images_jpg = Image::where('user_id',$id)->where('type','jpg')->get();
      foreach ($images_jpg as $key => $jpg) {
        $sum_jpg=$sum_jpg+$jpg['image_size'];
        $c_jpg++;
      }

      $images_png = Image::where('user_id',$id)->where('type','png')->get();
      foreach ($images_png as $key => $png) {
        $sum_png=$sum_png+$png['image_size'];
        $c_png++;
      }
      $mb_png = round($sum_png/1000000,2);
      $mb_jpg = round($sum_jpg/1000000,2);
      $data['images'] = $images;
      $data['sum_png'] = $mb_png."MB(".number_format($sum_png)."B)";
      $data['sum_jpg'] = $mb_jpg."MB(".number_format($sum_jpg)."B)";
      $data['c_png'] = $c_png;
      $data['c_jpg'] = $c_jpg;
      $data['c_sum'] = $c_png+$c_jpg;
      $data['sum'] = $mb_png+$mb_jpg."MB(".number_format($sum_png+$sum_jpg)."B)";
      return $data;


    	}
}
