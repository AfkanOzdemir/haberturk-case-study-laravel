<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function newsDetail($id)
    {

        $data = $this->getJsonData();
        if (!array_key_exists($id, $data)) {
            return redirect('/news');
        } else {
            $news = $data[$id];
            if ($news['type'] == 'ads') {
                return redirect('/news');
            }
            return view('newsDetails', ['news' => $news], ['data' => $data]);
        }
    }
}
