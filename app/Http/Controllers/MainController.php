<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\DopUslugi;
use App\DownloadedFiles;
use App\Gallery;
use App\Hotels;
use App\MediaLibrary;
use App\News;
use App\ProdCat;
use App\ProdCatSkill;
use App\ProdCatSpec;
use App\Product;
use App\Reviews;
use App\Services;
use App\Slider;
use App\SpecSuggestions;
use App\Stock;
use App\Video;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $title = "";
    public $meta_desc = "";
    public $meta_key = "";

    public function index()
    {
        $slider = Slider::getSlider();
        $userwrap = ProdCat::all();
        $about = About::getAbout();
        $gallery = Gallery::limit(8)->get();
        $news = News::all();
        $order = Product::limit(4)->get();
        $video = Video::limit(8)->get();
        $cats = ProdCat::limit(9)->get();
        $hotels = Hotels::all();
        $contact = Contact::all();

        $spec = ProdCatSpec::all();
        $skill = ProdCatSkill::all();

        $services = Services::all();
        $reviews = Reviews::all();

        $suggestions = SpecSuggestions::all();

        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;

        return view("index.index", compact(
            'suggestions',
            'reviews',
            'contact',
            'services',
            'cats',
            'slider',
            'userwrap',
            'about',
            'hotels',
            'gallery',
            'news',
            'order',
            'video',
            'title',
            'skill',
            'spec',
            'meta_key',
            'meta_desc'
        ));
    }

    public function thanks()
    {
        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;
        return view("thanks.index", compact('meta_key', 'meta_desc'));
    }

    public function send_email(Request $request)
    {
        $name = $request->get('name');
        $tel = $request->get('tel');
        $message = $request->get('msg');

        $msg = "Имя: $name; Телефон: $tel";
        if ($message) {
            $msg .= " Сообщение: $message";
        }

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg, 70);

        // send email
        mail("someone@example.com", "Звонок с сайта", $msg);

        // return back()->with(['message' => 'Сообщение успешно отправлено.']);
        return $this->thanks();
    }

    public function downloadFiles()
    {
        $sl = DownloadedFiles::all();
        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;

        return view("downloaded-files.index", compact('sl', 'meta_key', 'meta_desc'));
    }

    public function extra_services()
    {
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;

        return view("extra-services.index", compact('meta_key', 'meta_desc'));
    }

    public function products()
    {
        $products = Product::all();

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

    public function dopuslugi()
    {
        $items = DopUslugi::all();

        $title = "";
        $meta_desc = "";
        $meta_key = "";

        $ROUTE = 'dopuslugi_detail';

        return view("dopuslugi.index", compact('items', 'title', 'meta_key', 'meta_desc', 'ROUTE'));
    }

    public function dopuslugi_detail($id)
    {
        $items = DopUslugi::where('slug', $id)->firstOrFail();

        $title = "$items->title";
        $meta_desc = "$items->meta_desc";
        $meta_key = "$items->meta_key";

        return view("dopuslugi.detail", compact('items', 'title', 'meta_key', 'meta_desc'));
    }

    public function suggestions()
    {
        $items = SpecSuggestions::all();

        $title = "";
        $meta_desc = "";
        $meta_key = "";

        $ROUTE = 'suggestions_detail';

        return view("extra-services-views.index", compact('items', 'title', 'meta_key', 'meta_desc', 'ROUTE'));
    }

    public function suggestions_detail($id)
    {
        $items = SpecSuggestions::where('slug', $id)->firstOrFail();

        $title = "$items->title";
        $meta_desc = "$items->meta_desc";
        $meta_key = "$items->meta_key";

        return view("extra-services-views.detail", compact('items', 'title', 'meta_key', 'meta_desc'));
    }

    public function skill($slug)
    {
        $id = ProdCatSkill::where('slug', $slug)->firstOrFail();

        $products = Product::where('skill_id', $id->id)->get();

        $cat = ProdCat::getCategory();
        $spec = ProdCatSpec::getCategory();
        $skill = ProdCatSkill::getCategory();

        $title = "$id->title";
        $meta_desc = "$id->meta_desc";
        $meta_key = "$id->meta_key";

        return view("products.category", compact('products', 'cat', 'skill', 'spec', 'title', 'meta_key', 'meta_desc'));
    }

    public function spec($slug)
    {
        $id = ProdCatSpec::where('slug', $slug)->firstOrFail();

        $products = Product::where('spec_id', $id->id)->get();

        $cat = ProdCat::getCategory();
        $spec = ProdCatSpec::getCategory();
        $skill = ProdCatSkill::getCategory();
        $title = "$id->title";
        $meta_desc = "$id->meta_desc";
        $meta_key = "$id->meta_key";

        return view("products.category", compact('products', 'cat', 'skill', 'spec', 'title', 'meta_key', 'meta_desc'));
    }

    public function category($slug)
    {
        $id = ProdCat::where('slug', $slug)->firstOrFail();

        $products = Product::where('cat_id', $id->id)->get();

        $cat = ProdCat::getCategory();
        $spec = ProdCatSpec::getCategory();
        $skill = ProdCatSkill::getCategory();

        $title = "$id->title";
        $meta_desc = "$id->meta_desc";
        $meta_key = "$id->meta_key";

        return view("products.category", compact('products', 'cat', 'skill', 'spec', 'title', 'meta_key', 'meta_desc'));
    }

    public function ProductByName($slug)
    {
        $product = Product::where('title', $slug)->firstOrFail();

        $cat = ProdCat::getCategory();
        $title = "$product->title";
        $meta_desc = "$product->meta_desc";
        $meta_key = "$product->meta_key";

        return view("products.detail", compact('product', 'cat', 'title', 'meta_key', 'meta_desc'));
    }

    public function bars_detail($slug)
    {
        $product = News::where('slug', $slug)->firstOrFail();

        $title = "$product->title";
        $meta_desc = "$product->meta_desc";
        $meta_key = "$product->meta_key";

        return view("news.detail", compact('product', 'title', 'meta_key', 'meta_desc'));
    }

    public function events()
    {
        $items = Services::all();

        $title = "Все мероприятия";
        $meta_desc = "$this->meta_desc";
        $meta_key = "$this->meta_key";

        return view("events.index", compact('items', 'title', 'meta_key', 'meta_desc'));
    }

    public function hotels()
    {
        $items = Hotels::all();

        $title = "Все отели";
        $meta_desc = "$this->meta_desc";
        $meta_key = "$this->meta_key";

        return view("hotels.index", compact('items', 'title', 'meta_key', 'meta_desc'));
    }
    public function hotel_detail($slug)
    {
        $product = Hotels::where('slug', $slug)->firstOrFail();

        $title = "$product->title";
        $meta_desc = "$product->meta_desc";
        $meta_key = "$product->meta_key";

        $whereArray = array('id_content' => $product->id, 'id_category' => 2); // 2 hotel
        $media_library_menu = MediaLibrary::where($whereArray)->get();

        return view("hotels.detail", compact('product', 'title', 'meta_key', 'meta_desc', 'media_library_menu'));
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

        $whereArray = array('id_content' => $news->id, 'id_category' => 2); // 2 menu restaurant
        $media_library_menu = MediaLibrary::where($whereArray)->get();
        $whereArray = array('id_content' => $news->id, 'id_category' => 3); // 3 map restaurant
        $media_library_map = MediaLibrary::where($whereArray)->get();

        $title = "$news->title";
        $meta_desc = "$news->meta_desc";
        $meta_key = "$news->meta_key";

        return view("news.detail", compact('news', 'media_library_map', 'media_library_menu', 'title', 'meta_key', 'meta_desc'));
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

    public function servicesdetail($slug)
    {
        $product = Services::where('slug', $slug)->firstOrFail();
        $title = $this->title;
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;
        return view("products.detail", compact('product', 'title', 'meta_key', 'meta_desc'));
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
