<?php

namespace App\Http\Controllers\Admin;

use App\ProdCat;
use App\ProdCatSkill;
use App\ProdCatSpec;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Product::all();
        return view("admin.post.index", compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = ProdCat::getCategory();
        $skill = ProdCatSkill::getCategory();
        $spec = ProdCatSpec::getCategory();
        return view("admin.post.create", compact('cat', 'skill', 'spec'));
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
            'anonce' =>'required',
            'text' =>'required',

            'img' =>  'nullable|image'
        ]);


        $prod = Product::add($request->all());
        $prod->uploadImage($request->file('img'));
        $prod->setCategory($request->get('category_id'));
        $prod->setSkill($request->get('skill'));
        $prod->setSpec($request->get('spec'));
        return redirect()->route('post.index');
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
        $sl = Product::find($id);
        return view("admin.post.edit", compact('cat', 'sl', 'skill', 'spec'));
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

            'text' =>'required',

            'img' =>  'nullable|image'
        ]);

        $post = Product::find($id);
        $post->edit($request->all());
        $post->setCategory($request->get('category_id'));
        $post->setSkill($request->get('skill'));
        $post->setSpec($request->get('spec'));
        $post->uploadImage($request->file('img'));

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        


        if ($product->img !=null) {
            Storage::delete('/uploads/products/small/' . $product->img);
        }
        $product->delete();
        return redirect()->route('post.index');
    }
}
