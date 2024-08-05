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

    public function news()
    {
        $data = $this->getJsonData();
        return view('news', ['data' => $data]);
    }

    public function newsDetail($title)
    {
        $slug = Str::slug($title);
        $data = $this->getJsonData();

        foreach ($data as $item) {
            if (isset($item['title']) && Str::slug($item['title']) == $slug) {
                return view('newsDetails', ['news' => $item], ['data' => $data]);
            }
        }
    }
}
