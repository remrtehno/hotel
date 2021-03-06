<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Slider extends Model
{
    protected $table = "slider";
    protected $fillable = ['title','anonce'];



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

    public function removeImage()
    {
        if ($this->img != "") {
            Storage::delete('/uploads/slider/' . $this->img);
        }
    }


    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }




        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $pat = public_path('/uploads/slider/'.$filename);
        $img = Image::make($image);
        $img->backup();
        $img->fit(1534, 451)->save($pat, 100);
        $img->reset();
        $img->backup();
        $this->img = $filename;
        $this->save();
    }

    public function getImage()
    {
        if ($this->img == null) {
            return '/uploads/slider/no-image.jpg';
        }
        return '/uploads/slider/' . $this->img;
    }


    public static function getSlider()
    {
        $sliders =  self::all();
        return $sliders;
    }
}
