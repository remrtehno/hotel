<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadedFiles extends Model
{
    protected $table = "downloaded_files";
    protected $fillable = ['title', 'file', 'img'];

    public function getFile()
    {
        if ($this->img == null) {
            return '/uploads/no-image.png';
        }

        return "/uploads/pdf/" . $this->file;
    }

    public function getImage($size = 'img')
    {
        if ($this->img == null) {
            return '/uploads/no-image.png';
        }

        return "/uploads/pdf/$size/" . $this->img;
    }

    public function removeFile()
    {
        if ($this->file != null) {
            Storage::delete('/uploads/pdf/' . $this->file);
        }
    }

    public function uploadFile($file)
    {
        if ($file == null) {
            return;
        }

        $filename = str_random(10) . '.' . $file->extension();
        $file->storeAs('/uploads/pdf/', $filename);
        $this->save();
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
}
