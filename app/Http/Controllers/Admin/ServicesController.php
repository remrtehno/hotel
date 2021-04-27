<?php

namespace App\Http\Controllers\Admin;

use App\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Services::all();
        return view('admin.services.index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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


            'title' =>'required',
            'img' =>  'nullable|image'
        ]);


        $prod = Services::add($request->all());
        $prod->uploadImage($request->file('img'));
        return redirect()->route('services.index');
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
        $sl = Services::find($id);
        return view('admin.services.edit', compact('sl'));
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
            'title' =>'required',
            'img' =>  'nullable|image'
        ]);

        $post = Services::find($id);
        $post->edit($request->all());
        $post->uploadImage($request->file('img'));
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Services::find($id);


        if ($services->img !=null) {
            Storage::delete('/uploads/services/small/' . $services->img);
            Storage::delete('/uploads/services/big/' . $services->img);
        }
        $services->delete();
        return redirect()->route('services.index');
    }
}
