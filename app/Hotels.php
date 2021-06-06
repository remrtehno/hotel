<?php

namespace App;

use App\MediaLibrary;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Hotels extends Model
{
    use Sluggable;
    protected $table = "hotels";
    protected $fillable = [
        'title',
        'description',
        'comfort',
        'cost',
        'img',
        'created_at',
        'meta_desc',
        'meta_key',
    ];

    public function category()
    {
        return $this->belongsTo("App\ProdCat", 'cat_id', 'id');
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

    public function removeImage()
    {
        if ($this->img != null) {
            Storage::delete('/uploads/hotels/small/' . $this->img);
        }
        if ($this->img != "") {
            Storage::delete('/uploads/hotels/prev/' . $this->img);
        }
        if ($this->img != "") {
            Storage::delete('/uploads/hotels/home/' . $this->img);
        }
    }

    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $pat = public_path() . '/uploads/hotels/' . $filename;
        ini_set('memory_limit', '256M');
        $img = Image::make($image);
        $img->backup();
        $img->resize(528, 459)->save($pat, 100);

        $this->img = $filename;
        $this->save();
    }

    public function getImage($size = '')
    {
        if ($this->img == null) {
            return '/uploads/no-image.png';
        }

        return "/uploads/hotels/$size" . $this->img;
    }

    public static function gethotels()
    {
        $hotels = self::all();
        return $hotels;
    }

    public function getMediaLibrary()
    {
        $whereArray = array('id_content' => $this->id, 'id_category' => 0);
        $media_library = MediaLibrary::where($whereArray)->get();
        return $media_library;
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
