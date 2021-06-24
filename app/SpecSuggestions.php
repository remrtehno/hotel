<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SpecSuggestions extends Model
{
    //
    use Sluggable;
    protected $table = "spec_suggestions";
    protected $fillable = ['title', 'anonce', 'text', 'img', 'slug'];

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
            Storage::delete('/uploads/suggestions/' . $this->img);
        }
    }

    public function getMediaLibrary()
    {
        $whereArray = array('id_content' => $this->id, 'id_category' => 4);
        $media_library = MediaLibrary::where($whereArray)->get();
        return $media_library;
    }

    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $pat = public_path('/uploads/suggestions/');

        File::exists($pat) or
        File::makeDirectory($pat, 0777, true);

        $img = Image::make($image);
        $img->backup();
        $img->fit(647, 533)->save($pat . $filename, 100);
        $img->reset();
        $img->backup();
        $this->img = $filename;
        $this->save();
    }

    public function getImage()
    {
        if ($this->img == null) {
            return '/uploads/no-image.jpg';
        }
        if (!File::exists(
            public_path() . '/uploads/suggestions/' . $this->img
        )) {
            return '/uploads/no-image.png';
        }

        return '/uploads/suggestions/' . $this->img;
    }

    public static function getSuggestions()
    {
        $sliders = self::all();
        return $sliders;
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
