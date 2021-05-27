<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view("admin.index.index");
    }

    public function extra_services()
    {
        return view("admin.extra-services.index");
    }
    public function save_file(Request $request)
    {
        $url = 'http://example.com/backend/editor.php';
        $file = $request->get('file-to-save');
        //resource_path('views') . '/extra-services/content.blade.php';

        // check if form has been submitted

        // save the text contents
        file_put_contents($file, $request->get('text'));

        // redirect to form again
        // header(sprintf('Location: %s', $url));
        // printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
        // exit();

        // read the textfile
        $text = file_get_contents($file);

        // dd($request->get('text'));
        return back();
    }
}
