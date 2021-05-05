<?php
namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProdCatSpec extends Model
{
    use Sluggable;
    protected $table = "prod_cats_spec";
    protected $fillable = ['title', 'img', 'description'];

    public function products()
    {
        return $this->hasMany("App\Product");
    }

    public static function add($fields)
    {
        $cat = new static;
        $cat->fill($fields);
        $cat->save();
        return $cat;
    }

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
        $pat = public_path('/uploads/categoriesSpec/' . $filename);
        ini_set('memory_limit', '256M');
        $img = Image::make($image);
        $img->backup();
        $img->save($pat, 90);
        $img->reset();
        $img->backup();
        $this->img = $filename;
        $this->save();
    }

    public function getImage()
    {
        if ($this->img == null) {
            return '/uploads/no-image.png';
        }
        return '/uploads/categoriesSpec/' . $this->img;
    }

    public function removeImage()
    {
        if ($this->img != "") {
            Storage::delete('/uploads/categoriesSpec/' . $this->img);
        }
    }

    public static function getCategory()
    {
        $cat = self::all();
        return $cat;
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
