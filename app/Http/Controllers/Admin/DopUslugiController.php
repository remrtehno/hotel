<?php

namespace App\Http\Controllers\Admin;

use App\DopUslugi;
use App\Http\Controllers\Controller;
use App\MediaLibrary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DopUslugiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DopUslugi::all();
        return view('admin.dopuslugi.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dopuslugi.create');
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
        ]);

        $prod = DopUslugi::add($request->all());
        $prod->uploadImage($request->file('img'));

        if ($request->file('file') !== null) {
            foreach ($request->file('file') as $file) {
                $instance = new MediaLibrary;
                $instance->uploadImage($file);
                $instance->id_content = $prod->id;
                $instance->id_category = 5;
                $instance->save();
            };
        }

        return redirect()->route('dopuslugi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SpecSuggestions  $specSuggestions
     * @return \Illuminate\Http\Response
     */
    public function show(SpecSuggestions $specSuggestions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SpecSuggestions  $specSuggestions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $whereArray = array('id_content' => $id, 'id_category' => 5);
        $media_library = MediaLibrary::where($whereArray)->get();
        $sl = DopUslugi::find($id);
        return view('admin.dopuslugi.edit', compact('sl', 'media_library'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpecSuggestions  $specSuggestions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',

            'img' => 'nullable|image',
        ]);

        $post = DopUslugi::find($id);
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
                $instance->id_category = 5;
                $instance->save();
            };
        }

        return redirect()->route('dopuslugi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SpecSuggestions  $specSuggestions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = DopUslugi::find($id);

        $whereArray = array('id_content' => $id, 'id_category' => 5);
        $media_library = MediaLibrary::where($whereArray)->get();

        foreach ($media_library as $file) {
            $file->removeImage();
            $file->delete();
        };

        if ($gallery->img != null) {
            Storage::delete('/uploads/dopuslugi/' . $gallery->img);
        }
        $gallery->delete();
        return redirect()->route('dopuslugi.index');
    }
}
