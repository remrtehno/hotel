<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MediaLibrary;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'img' => 'nullable|image',
            'text' => 'required',
        ]);

        $prod = News::add($request->all());
        $prod->uploadImage($request->file('img'));

        if ($request->file('file') !== null) {
            foreach ($request->file('file') as $file) {
                $instance = new MediaLibrary;
                $instance->uploadImage($file);
                $instance->id_content = $prod->id;
                $instance->id_category = 2;
                $instance->save();
            };
        }

        if ($request->file('file2') !== null) {
            foreach ($request->file('file2') as $file) {
                $instance = new MediaLibrary;
                $instance->uploadImage($file);
                $instance->id_content = $prod->id;
                $instance->id_category = 3;
                $instance->save();
            };
        }

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sl = News::find($id);
        $whereArray = array('id_content' => $id, 'id_category' => 2); // 2 menu restaurant
        $media_library_menu = MediaLibrary::where($whereArray)->get();
        $whereArray = array('id_content' => $id, 'id_category' => 3); // 3 map restaurant
        $media_library_map = MediaLibrary::where($whereArray)->get();

        return view('admin.news.edit', compact('sl', 'media_library_menu', 'media_library_map'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'img' => 'nullable|image',
        ]);

        $post = News::find($id);

        $post->edit($request->all());
        $post->uploadImage($request->file('img'));

        if ($request->get('file_del') !== null) {
            foreach ($request->get('file_del') as $file_del_id) {
                $item = MediaLibrary::find($file_del_id);
                $item->removeImage();
                $item->delete();
            };
        }

        if ($request->file('file') !== null) {
            foreach ($request->file('file') as $file) {
                $instance = new MediaLibrary;
                $instance->uploadImage($file);
                $instance->id_content = $post->id;
                $instance->id_category = 2; // menu
                $instance->save();
            };
        }

        if ($request->file('file2') !== null) {
            foreach ($request->file('file2') as $file) {
                $instance = new MediaLibrary;
                $instance->uploadImage($file);
                $instance->id_content = $post->id;
                $instance->id_category = 3; // map
                $instance->save();
            };
        }

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        if ($news->img != '') {
            Storage::delete('/uploads/news/small/' . $news->img);
            Storage::delete('/uploads/news/big/' . $news->img);
        }
        $news->delete();

        $whereArray = array('id_content' => $id, 'id_category' => 3);
        $media_library = MediaLibrary::where($whereArray)->get();

        foreach ($media_library as $file) {
            $file->removeImage();
            $file->delete();
        };

        $whereArray = array('id_content' => $id, 'id_category' => 2);
        $media_library = MediaLibrary::where($whereArray)->get();

        foreach ($media_library as $file) {
            $file->removeImage();
            $file->delete();
        };

        return redirect()->route('news.index');
    }
}
