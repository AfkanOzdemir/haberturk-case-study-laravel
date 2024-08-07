<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DataController extends Controller
{
    private function getJsonData()
    {
        $json = file_get_contents(base_path('resources/json/news.json'));
        $data = json_decode($json, true);
        return $data;
    }

    public function index()
    {
        $data = $this->getJsonData();
        return view('app', ['data' => $data]);
    }

    public function news($url)
    {
        $url = Str::slug($url);
        $allUrls = ['current', 'economy', 'sport', 'magazine', 'world', 'technology', 'health'];
        if (!in_array($url, $allUrls)) {
            return response()->json(['error' => 'Veri bulunamadı'], 404);
        } else {
            $data = $this->getJsonData();
            $news = $data[$url];
            return view('news', ['data' => $news], ['url' => $url]);
        }
    }

    public function newsDetail($title, $url)
    {
        $data = $this->getJsonData();
        if (!$data[$title]) {
            return response()->json(['error' => 'Veri bulunamadı'], 404);
        }

        $news = collect($data[$title])->first(function ($item) use ($url) {
            return isset($item['title']) && Str::slug($item['title']) == $url;
        });
        if ($news) {
            return view('newsDetails', ['data' => $data[$title]], ['news' => $news]);
        } else {
            return "Haber bulunamadı";
        }
    }
}
