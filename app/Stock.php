<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stocks";
    protected $fillable = ['id', 'img'];

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $pat = public_path().'/uploads/stocks/'.$filename;

        ini_set('memory_limit', '256M');
        $img = Image::make($image);
        $img->backup();
        $img->resize(171, 123)->save($pat, 100);

        $this->img = $filename;
        $this->save();
    }


    public function getImage($size = 'small')
    {
        if ($this->img == null) {
            return '/uploads/no-image.png';
        }

        return "/uploads/stocks/$size/" . $this->img;
    }
}
