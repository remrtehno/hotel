<?php

namespace App\Http\Controllers\Admin;

use App\DownloadedFiles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadedFilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = DownloadedFiles::all();
        return view('admin.downloaded-files.index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.downloaded-files.create');
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
        ]);

        $ext = $request->file('file')->extension();
        $extImg = $request->file('img')->extension();

        $filename = str_random(10) . '.' . $ext;
        $img = str_random(10) . '.' . $extImg;

        $path = $request->file('file')->storeAs('/uploads/pdf/', $filename);
        $path = $request->file('img')->storeAs('/uploads/pdf/img/', $img);

        $prod = DownloadedFiles::create([
            'title' => $request->get("title"),
            'file' => $filename,
            'img' => $img,
        ]);

        $prod->save();

        return redirect()->route('download-files.index');
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
        $sl = DownloadedFiles::find($id);
        return view('admin.downloaded-files.edit', compact('sl'));
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
            'file' => 'required',
            'img' => 'required',
        ]);

        $post = DownloadedFiles::find($id);

        $filename = str_random(10) . '.' . $request->file('file')->extension();
        if ($request->file('file') != null) {
            unlink(public_path() . '/uploads/pdf/' . $post->file);
        }
        $path = $request->file('file')->storeAs('/uploads/pdf/', $filename);

        $filenameImg = str_random(10) . '.' . $request->file('img')->extension();
        if ($request->file('img') != null) {
            unlink(public_path() . '/uploads/pdf/img/' . $post->img);
        }
        $img = $request->file('img')->storeAs('/uploads/pdf/img/', $filenameImg);

        $post->title = $request->get("title");
        $post->file = $filename;
        $post->img = $filenameImg;
        $post->save();

        return redirect()->route('download-files.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = DownloadedFiles::find($id);
        unlink(public_path() . "/uploads/pdf/" . $gallery->file);

        $gallery->delete();
        return redirect()->route('download-files.index');
    }
}
