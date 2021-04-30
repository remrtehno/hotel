<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Services extends Model
{
    protected $table = "services";
    protected $fillable = ['title', 'anonce'];



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
        if ($this->img != null) {
            Storage::delete('/uploads/services/small/' . $this->img);
        }
        if ($this->img != "") {
            Storage::delete('/uploads/services/big/' . $this->img);
        }
    }

    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $pat = public_path().'/uploads/services/small/'.$filename;
        $pat2 = public_path().'/uploads/services/big/'.$filename;
        ini_set('memory_limit', '256M');
        $img = Image::make($image);
        $img->backup();
        $img->save($pat2, 100);
        $img->reset();
        $img->backup();
        $img->save($pat, 100);
        $img->reset();
        //$image->storeAs('/uploads', $filename);
        $this->img = $filename;
        $this->save();
    }

    public function getImage()
    {
        if ($this->img == null) {
            return '/img/no-image.png';
        }

        return '/uploads/services/small/' . $this->img;
    }

    public function getImageBig()
    {
        if ($this->img == null) {
            return '/uploads/services/prev/no-image.jpg';
        }

        return '/uploads/services/big/' . $this->img;
    }


    public static function getServices()
    {
        $gallery =  self::all();
        return $gallery;
    }
}
