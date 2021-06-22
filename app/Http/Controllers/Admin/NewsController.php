<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MediaLibrary;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public static function media_library_array($id_content)
    {
        return [
            ['request_name' => 'file', 'id_category' => 2, 'id_content' => $id_content],
            ['request_name' => 'file2', 'id_category' => 3, 'id_content' => $id_content],
            ['request_name' => 'file_gallery', 'id_category' => 6, 'id_content' => $id_content],
            ['request_name' => 'file_cigarette', 'id_category' => 7, 'id_content' => $id_content],
            ['request_name' => 'file_kalyan', 'id_category' => 10, 'id_content' => $id_content],
        ];
    }

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

        MediaLibrary::mmediaLibraryImages($request, $this->media_library_array($prod->id));

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
        $whereArray = array('id_content' => $id, 'id_category' => 6); // 6 gallery restaurant
        $media_library_gallery = MediaLibrary::where($whereArray)->get();

        $whereArray = array('id_content' => $id, 'id_category' => 7); // 7 cigarette restaurant
        $media_library_file_cigarette = MediaLibrary::where($whereArray)->get();

        $whereArray = array('id_content' => $id, 'id_category' => 10); // 10 kalyan restaurant
        $media_library_kalyan = MediaLibrary::where($whereArray)->get();

        return view('admin.news.edit', compact('sl', 'media_library_kalyan', 'media_library_file_cigarette', 'media_library_gallery', 'media_library_menu', 'media_library_map'));
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

        MediaLibrary::mmediaLibraryImages($request, $this->media_library_array($post->id));

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

        $whereArray = array('id_content' => $id, 'id_category' => 6);
        $media_library = MediaLibrary::where($whereArray)->get();

        foreach ($media_library as $file) {
            $file->removeImage();
            $file->delete();
        };

        foreach ($this->media_library_array as $val) {
            $media_library = MediaLibrary::where(
                array(
                    'id_content' => $id,
                    'id_category' => $val['id_category'],
                )
            )->get();
            foreach ($media_library as $file) {
                $file->removeImage();
                $file->delete();
            };
        }

        return redirect()->route('news.index');
    }
}
