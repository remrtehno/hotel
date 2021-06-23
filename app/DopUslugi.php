<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DopUslugi extends Model
{
    //
    use Sluggable;
    protected $table = "dop_uslugis";
    protected $fillable = ['title', 'text', 'img', 'slug'];
    /*
    public static function media_library_array($id_content)
    {
    return [
    ['label' => 'Винная карта', 'request_name' => 'file2', 'id_category' => 12, 'id_content' => $id_content],
    ['label' => 'Меню', 'request_name' => 'file_menu', 'id_category' => 13, 'id_content' => $id_content],
    ['label' => 'Сигаретная карта', 'request_name' => 'file_cigarette', 'id_category' => 14, 'id_content' => $id_content],
    ['label' => 'Кальянная карта', 'request_name' => 'file_kalyan', 'id_category' => 15, 'id_content' => $id_content],
    ];
    }

    public static function getFieldsArray($id)
    {
    $array_ids = $this->media_library_array($id);
    $fields = [];
    foreach ($array_ids as $val) {
    $media_library_fields = MediaLibrary::where([
    'id_content' => $id,
    'id_category' => $val['id_category'],
    ])->get();

    $fields[] = array_merge($val, ['media_library' => $media_library_fields]);
    }
    }
     */

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
            Storage::delete('/uploads/dopuslugi/' . $this->img);
        }
    }

    public function getMediaLibrary()
    {
        $whereArray = array('id_content' => $this->id, 'id_category' => 5);
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
        $pat = public_path('/uploads/dopuslugi/');

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
        return '/uploads/dopuslugi/' . $this->img;
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
