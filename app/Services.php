<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class Services extends Model
{
    use Sluggable;
    protected $table = "services";
    protected $fillable = ['title', 'anonce', 'text', 'slug'];

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
        $pat3 = public_path().'/uploads/services/smaller/'.$filename;
        $pat = public_path().'/uploads/services/small/'.$filename;
        $pat2 = public_path().'/uploads/services/big/'.$filename;
        
        ini_set('memory_limit', '256M');
        $img = Image::make($image);
        $img->backup();
        File::exists(public_path() . '/uploads/services/big/') or File::makeDirectory(public_path() . '/uploads/services/big/', 0777, true);
        $img->fit(1199, 586)->save($pat2, 100);
        $img->reset();
        $img->backup();
        File::exists(public_path() . '/uploads/services/small/') or File::makeDirectory(public_path() . '/uploads/services/small/', 0777, true);
        $img->fit(587, 642)->save($pat, 100);
        $img->reset();
        $img->backup();
        File::exists(public_path() . '/uploads/services/smaller/') or File::makeDirectory(public_path() . '/uploads/services/smaller/', 0777, true);
        $img->fit(649, 533)->save($pat3, 100);
        $img->reset();
        //$image->storeAs('/uploads', $filename);
        $this->img = $filename;
        $this->save();
    }

    public function getImage($size = 'small')
    {
        if ($this->img == null) {
            return '/img/no-image.png';
        }

        return "/uploads/services/$size/" . $this->img;
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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
}
