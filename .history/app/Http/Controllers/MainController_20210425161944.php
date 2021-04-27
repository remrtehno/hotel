<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Gallery;
use App\Services;
use App\Logo;
use App\News;
use App\ProdCat;
use App\Product;
use App\Slider;
use App\Userwrap;
use App\Video;
use App\Stock;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $title = "OOO alan-tailor";
    public $meta_desc = "Купить одежду онлайн";
    public $meta_key = "Желетка куртка ...";
 
    public function index()
    {
        $slider = Slider::getSlider();
        $userwrap = ProdCat::all();
        $about = About::getAbout();
        $gallery = Gallery::limit(8)->get();
        $news = News::limit(3)->get();
        $order = Product::limit(4)->get();
        $video = Video::limit(8)->get();
        $cats = category


        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;


        return view("index.index", compact(
            'slider',
            'userwrap',
            'about',
            'gallery',
            'news',
            'order',
            'video',
            'title',
            'meta_key',
            'meta_desc'
        ));
    }


    public function products()
    {
        $products = Product::getProducts();
        $cat = ProdCat::getCategory();


        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;

        return view("products.index", compact('products', 'cat', 'title', 'meta_key', 'meta_desc'));
    }
    public function catalog()
    {
        $products = Product::all();


        $cat = ProdCat::getCategory();
        $title = "Все товары";
        $meta_desc = $this->meta_desc = "Каталог";
        $meta_key = $this->meta_key = "Каталог";

        return view("products.category", compact('products', 'cat', 'title', 'meta_key', 'meta_desc'));
    }
    public function category($slug)
    {
        $id = ProdCat::where('slug', $slug)->firstOrFail();

        $products = Product::where('cat_id', $id->id)->get();

        $cat = ProdCat::getCategory();
        $title = "$id->title";
        $meta_desc = "$id->meta_desc";
        $meta_key = "$id->meta_key";

        return view("products.category", compact('products', 'cat', 'title', 'meta_key', 'meta_desc'));
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $cat = ProdCat::getCategory();
        $title = "$product->title";
        $meta_desc = "$product->meta_desc";
        $meta_key = "$product->meta_key";

        return view("products.detail", compact('product', 'cat', 'title', 'meta_key', 'meta_desc'));
    }



    public function newsdetail($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();

        $order = News::orderBy('created_at', 'desc')->take(3)->get();
        $gallery = Gallery::limit(9)->get();

        $title = "$news->title";
        $meta_desc = "$news->meta_desc";
        $meta_key = "$news->meta_key";



        return view("news.detail", compact('news', 'order', 'gallery', 'title', 'meta_key', 'meta_desc'));
    }

    public function gallery()
    {
        $gall = Gallery::all();
        $cat = ProdCat::getCategory();


        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;
        return view("gallery.index", compact('gall', 'cat', 'title', 'meta_key', 'meta_desc'));
    }

    public function services()
    {
        $services = Services::all();
        $cat = ProdCat::getCategory();

        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;
        return view("services.index", compact('services', 'cat', 'title', 'meta_key', 'meta_desc'));
    }

    public function servicesdetail($id)
    {
        $product = Services::where('id', $id)->firstOrFail();


        return view("products.detail", compact('product'));
    }

    public function news()
    {
        $news = News::all();
        $order = News::orderBy('created_at', 'desc')->take(3)->get();
        $gallery = Gallery::limit(9)->get();
        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;
        return view("news.index", compact('news', 'order', 'gallery', 'title', 'meta_key', 'meta_desc'));
    }

    public function about()
    {
        $about = About::getAbout();
        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;
        return view("about.index", compact('about', 'title', 'meta_key', 'meta_desc'));
    }

    public function video()
    {
        $video = Video::all();
        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;
        return view("video.index", compact('video', 'title', 'meta_key', 'meta_desc'));
    }

    public function contact()
    {
        $contact = Contact::all();
        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;
        return view("contact.index", compact('contact', 'title', 'meta_key', 'meta_desc'));
    }

    public function stocks()
    {
        $items = Stock::all();
        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;
        return view("pages/stocks", compact('items', 'title', 'meta_key', 'meta_desc'));
    }
}
