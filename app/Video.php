<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    protected $table = "videos";
    protected $fillable = ['title','file'];


 public function removeVideo()
    {


        if($this->file != null) Storage::delete('/uploads/video/' . $this->file);


    }
	
    
    public function uploadVideo($file)
    {
        if($file == null) { return; }
      // $this->removeVideo();
        $filename = str_random(10) . '.' .$file->extension();
       // $pat = public_path().'/uploads/article/'.$filename;
    //   $file->move($pat,$filename);
       
       
      $file->storeAs('/uploads/video/', $filename);
       
       
        $this->save();
    }

    public static function add($fields)
    {
        $post = new static;
        $post->fill($fields);
        $post->save();
        return $post;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
}
