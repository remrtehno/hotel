<?php

namespace App\Http\Controllers\Admin;

use App\Hotels;
use App\Http\Controllers\Controller;
use App\ProdCat;
use App\ProdCatSkill;
use App\ProdCatSpec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Hotels::all();
        return view("admin.hotels.index", compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = ProdCat::getCategory();
        return view("admin.hotels.create", compact('cat'));
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

        $prod = Hotels::add($request->all());
        $prod->uploadImage($request->file('img'));
        return redirect()->route('hotels.index');
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
        $cat = ProdCat::all();
        $skill = ProdCatSkill::getCategory();
        $spec = ProdCatSpec::getCategory();
        $sl = Hotels::find($id);
        return view("admin.hotels.edit", compact('cat', 'sl', 'skill', 'spec'));
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
            'img' => 'nullable|image',
        ]);

        $hotels = Hotels::find($id);
        $hotels->edit($request->all());
        $hotels->uploadImage($request->file('img'));

        return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotels = Hotels::find($id);

        if ($hotels->img != null) {
            Storage::delete('/uploads/hotels/' . $hotels->img);
        }
        $hotels->delete();
        return redirect()->route('hotels.index');
    }
}
