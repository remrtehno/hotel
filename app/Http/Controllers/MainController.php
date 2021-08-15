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
    public $title = "Royal Plaza - гостиница в Нефтеюганске и ресторанный комплекс | Заказать номер в гостинице можно по телефону +7 (3463) 25-00-00";
    public $meta_desc = "Сайт гостиницы &quot;Royal Plaza&quot; г.Нефтеюганск приглашает приятно провести время! Информация по телефону: +7 (3463) 25-00-00.";
    public $meta_key = "Сайт гостиницы &quot;Royal Plaza&quot; г.Нефтеюганск приглашает приятно провести время! Информация по телефону: +7 (3463) 25-00-00.";

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
        return view("thanks.index", compact('title','meta_key', 'meta_desc'));
    }

    public function send_email(Request $request)
    {
        $name = $request->get('name');
        $tel = $request->get('tel');
        $message = $request->get('msg');
        $time = $request->get('time');

        $msg = "Имя: $name; Телефон: $tel";
        if ($message) {
            $msg .= " Сообщение: $message";
        }
        if ($time) {
            $hotel = $request->get('hotel');
            $msg .= " Время для бронирования: $time в $hotel ";
        }

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg, 70);

        // send email
        mail("reservation@royal-plaza.ru", "Сообщение с сайта royal-plaza.ru", $msg);

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

        $whereArray = array('id_content' => $items->id, 'id_category' => 13); // 2 menu restaurant
        $media_library_menu = MediaLibrary::where($whereArray)->get();
        $whereArray = array('id_content' => $items->id, 'id_category' => 12); // 3 map restaurant
        $media_library_map = MediaLibrary::where($whereArray)->get();

        $whereArray = array('id_content' => $items->id, 'id_category' => 5); // 6 gallery restaurant
        $media_library_gallery = MediaLibrary::where($whereArray)->get();

        $whereArray = array('id_content' => $items->id, 'id_category' => 14); // 7 cigarette restaurant
        $media_library_file_cigarette = MediaLibrary::where($whereArray)->get();

        $whereArray = array('id_content' => $items->id, 'id_category' => 15); // 10 kalyan restaurant
        $media_library_kalyan = MediaLibrary::where($whereArray)->get();

        return view("dopuslugi.detail", compact('media_library_map', 'media_library_kalyan', 'media_library_file_cigarette', 'media_library_menu', 'media_library_gallery', 'items', 'title', 'meta_key', 'meta_desc'));
    }

    public function suggestions()
    {
        $items = SpecSuggestions::all();

        $title = "Специальные предложения $this->title";
        $meta_desc = "";
        $meta_key = "";

        $ROUTE = 'suggestions_detail';

        return view("extra-services-views.index", compact('items', 'title', 'meta_key', 'meta_desc', 'ROUTE'));
    }

    public function suggestions_detail($id)
    {
        $items = SpecSuggestions::where('slug', $id)->firstOrFail();

        $title = "$items->title в отеле \"Роял Плаза\" | Royal Plaza - гостиница в Нефтеюганске и ресторанный комплекс";
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

        $title = "$this->title мероприятия";
        $meta_desc = "$this->meta_desc";
        $meta_key = "$this->meta_key";

        return view("events.index", compact('items', 'title', 'meta_key', 'meta_desc'));
    }

    public function hotels()
    {
        $items = Hotels::all();

        $title = "Номера в $this->title";
        $meta_desc = "$this->meta_desc";
        $meta_key = "$this->meta_key";

        return view("hotels.index", compact('items', 'title', 'meta_key', 'meta_desc'));
    }
    public function hotel_detail($slug)
    {
        $product = Hotels::where('slug', $slug)->firstOrFail();

        $title = "$product->title в отеле \"Royal Plaza\" | Royal Plaza - гостиница в Нефтеюганске и ресторанный комплекс";
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

        $whereArray = array('id_content' => $news->id, 'id_category' => 6); // 6 gallery restaurant
        $media_library_gallery = MediaLibrary::where($whereArray)->get();

        $whereArray = array('id_content' => $news->id, 'id_category' => 7); // 7 cigarette restaurant
        $media_library_file_cigarette = MediaLibrary::where($whereArray)->get();

        $whereArray = array('id_content' => $news->id, 'id_category' => 10); // 10 kalyan restaurant
        $media_library_kalyan = MediaLibrary::where($whereArray)->get();

        $title = "$news->title в отеле \"Royal Plaza\" | Royal Plaza - гостиница в Нефтеюганске и ресторанный комплекс";
        $meta_desc = "$news->meta_desc";
        $meta_key = "$news->meta_key";

        return view("news.detail", compact('news', 'media_library_kalyan', 'media_library_file_cigarette', 'media_library_gallery', 'media_library_map', 'media_library_menu', 'title', 'meta_key', 'meta_desc'));
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
        $title = "$product->title в отеле \"Роял Плаза\" | Royal Plaza - гостиница в Нефтеюганске и ресторанный комплекс";
        $meta_desc = $this->meta_desc;
        $meta_key = $this->meta_key;
        return view("products.detail", compact('product', 'title', 'meta_key', 'meta_desc'));
    }

    public function news()
    {
        $news = News::all();
        $order = News::orderBy('created_at', 'desc')->take(3)->get();
        $gallery = Gallery::limit(9)->get();
        $title = "Лучшие бары, рестораны и кафе Нефтеюганска | Royal Plaza - гостиница в Нефтеюганске и ресторанный комплекс";
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
