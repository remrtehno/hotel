<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class MediaLibrary extends Model
{
    use Sluggable;
    protected $table = "media_libraries";
    protected $fillable = ['title', 'img', 'id_content', 'id_category', 'slug'];

    public $base_path;
    public $path1;
    public $path2;
    public $path3;
    public $path4;
    public $upload_path;

    public function __construct()
    {
        $this->base_path = public_path();
        $this->upload_path = "/uploads/media";
        $this->path1 = $this->base_path . $this->upload_path . "/big/";
        $this->path2 = $this->base_path . $this->upload_path . "/medium/";
        $this->path3 = $this->base_path . $this->upload_path . "/small/";
        $this->path4 = $this->base_path . $this->upload_path . "/origina-size/";
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
            File::delete($this->path1 . $this->img);
            File::delete($this->path2 . $this->img);
            File::delete($this->path3 . $this->img);
            File::delete($this->path4 . $this->img);
        }
    }

    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();

        ini_set('memory_limit', '256M');
        $img = Image::make($image);
        $img->backup();

        File::exists($this->path1) or File::makeDirectory($this->path1, 0777, true);
        $width = 1920; // your max width
        $height = 1480; // your max height

        $img->height() > $img->width() ? $width = null : $height = null;
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($this->path1 . $filename, 100);
        $img->reset();
        $img->backup();

        File::exists($this->path2) or File::makeDirectory($this->path2, 0777, true);
        $img->resize(605, 419)->save($this->path2 . $filename, 100);
        $img->reset();
        $img->backup();

        File::exists($this->path3) or File::makeDirectory($this->path3, 0777, true);
        $img->resize(649, 533)->save($this->path3 . $filename, 100);
        $img->reset();

        File::exists($this->path4) or File::makeDirectory($this->path4, 0777, true);
        $img->save($this->path4 . $filename, 100);
        $img->reset();

        $this->img = $filename;
        $this->save();
    }

    public function getImage($size = 'small')
    {
        if ($this->img == null) {
            return '/uploads/no-image.png';
        }

        if (!File::exists(
            $this->base_path . $this->upload_path . "/$size/" . $this->img
        ) && File::exists(
            $this->base_path . $this->upload_path . "/big/" . $this->img
        )) {
            return "/uploads/media/big/" . $this->img;
        }

        if (!File::exists(
            $this->base_path . $this->upload_path . "/$size/" . $this->img
        )) {
            return '/uploads/no-image.png';
        }
        return "/uploads/media/$size/" . $this->img;
    }

    public static function mmediaLibraryImages($request, $media_library_array)
    {
        foreach ($media_library_array as $val) {
            if ($request->file($val['request_name']) !== null) {
                foreach ($request->file($val['request_name']) as $file) {
                    $instance = new MediaLibrary;
                    $instance->uploadImage($file);
                    $instance->id_content = $val['id_content'];
                    $instance->id_category = $val['id_category'];
                    $instance->save();
                };
            }
        }
    }

    public static function mediaLibraryFilterArray($media_library_array)
    {
        return array_map(
            function (array $elem) {
                unset($elem['request_name']); // modify $elem
                return $elem; // and return it to be put into the result
            },
            $media_library_array
        );
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
