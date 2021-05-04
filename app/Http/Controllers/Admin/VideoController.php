<?php

namespace App\Http\Controllers\Admin;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Video::all();
        return view('admin.video.index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [


            'title' =>'required',
           
           
        ]);
        
        
        
        
//$file = $request->file('file')->getClientOriginalName();
$ext = $request->file('file')->extension();
      
        

 $filename = str_random(10) . '.' .$ext;
       // $pat = public_path().'/uploads/article/'.$filename;
    //   $file->move($pat,$filename);
       

$path = $request->file('file')->storeAs('/uploads/video/',$filename);


       
   


  $prod = Video::create([
   'title'=>$request->get("title"),
   'file'=>$filename,


		]); 
$prod->save();
      
         // $prod->uploadVideo($request->file('file'));
       
        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sl = Video::find($id);
        return view('admin.video.edit', compact('sl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>'required',
                    ]);

        $post = Video::find($id);
$ext = $request->file('file')->extension();

         $filename = str_random(10) . '.' .$ext;


        if($request->file('file') != null){ unlink(public_path().'/uploads/video/' . $post->file);}


        $path = $request->file('file')->storeAs('/uploads/video/',$filename);

$post->title = $request->get("title");
 $post->file = $filename;     
$post->save(); 
   

        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Video::find($id);
unlink(public_path()."/uploads/video/".$gallery->file);



        $gallery->delete();
        return redirect()->route('video.index');
    }
}
