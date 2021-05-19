<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Reviews extends Model
{
    protected $table = "reviews";
    protected $fillable = [
        'title',
        'description',
        'img',
        'stars',
        'created_at',
        'meta_desc',
        'meta_key',
    ];

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
            Storage::delete('/uploads/reviews/small/' . $this->img);
        }
        if ($this->img != "") {
            Storage::delete('/uploads/reviews/prev/' . $this->img);
        }
        if ($this->img != "") {
            Storage::delete('/uploads/reviews/home/' . $this->img);
        }
    }

    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $pat = public_path() . '/uploads/reviews/small/' . $filename;
        ini_set('memory_limit', '256M');
        $img = Image::make($image);
        $img->backup();
        File::exists(public_path() . '/uploads/reviews/small/') or File::makeDirectory(public_path() . '/uploads/reviews/small/', 0777, true);
        $img->save($pat, 100);

        $this->img = $filename;
        $this->save();
    }

    public function getImage($size = 'small')
    {
        if ($this->img == null) {
            return '/uploads/no-image.png';
        }

        return "/uploads/reviews/$size/" . $this->img;
    }

    public static function getReviews()
    {
        $reviews = self::all();
        return $reviews;
    }
}
