<?php

namespace App;

use App\MediaLibrary;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class News extends Model
{
    use Sluggable;
    protected $table = "news";
    protected $fillable = ['title', 'floor', 'time', 'anonce', 'text', 'slug', 'meta_info', 'meta_desc', 'meta_key'];

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
            Storage::delete('/uploads/news/small/' . $this->img);
            Storage::delete('/uploads/news/big/' . $this->img);
        }
    }
    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $pat = public_path() . '/uploads/news/small/' . $filename;
        $pat2 = public_path() . '/uploads/news/big/' . $filename;
        $img = Image::make($image);
        $img->backup();

        // mkdir(public_path() . '/uploads/news/small/');
        File::exists(public_path() . '/uploads/news/small/') or File::makeDirectory(public_path() . '/uploads/news/small/', 0777, true);
        $img->fit(281, 390)->save($pat, 100);

        $img->reset();
        $img->backup();

        File::exists(public_path() . '/uploads/news/big/') or File::makeDirectory(public_path() . '/uploads/news/big/', 0777, true);
        $img->fit(517, 469)->save($pat2, 100);
        $img->reset();
        //$image->storeAs('/uploads', $filename);
        $this->img = $filename;
        $this->save();
    }

    public function getImage()
    {
        if ($this->img == null) {
            return '/uploads/no-image.png';
        }

        return '/uploads/news/small/' . $this->img;
    }
    public function getImageBig()
    {
        if ($this->img == null) {
            return '/uploads/no-image.png';
        }

        return '/uploads/news/big/' . $this->img;
    }

    public static function getNews()
    {
        $news = self::orderBy('created_at', 'desc')->take(4)->get();
        return $news;
    }

    public function getMediaLibrary()
    {
        $whereArray = array('id_content' => $this->id, 'id_category' => 6);
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
