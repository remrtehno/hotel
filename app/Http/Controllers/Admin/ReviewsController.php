<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Reviews::all();
        return view("admin.reviews.index", compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = [];
        return view("admin.reviews.create", compact('cat'));
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

        $prod = Reviews::add($request->all());
        $prod->uploadImage($request->file('img'));
        return redirect()->route('reviews.index');
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
        $sl = Reviews::find($id);
        return view("admin.reviews.edit", compact('sl'));
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

        $hotels = Reviews::find($id);
        $hotels->edit($request->all());
        $hotels->uploadImage($request->file('img'));

        return redirect()->route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotels = Reviews::find($id);

        if ($hotels->img != null) {
            Storage::delete('/uploads/reviews/' . $hotels->img);
        }
        $hotels->delete();
        return redirect()->route('reviews.index');
    }
}
