<?php

namespace App\Http\Controllers;

use App\Helpers\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItunesController extends Controller
{
    public function index()
    {
        $response = Http::get('https://rss.applemarketingtools.com/api/v2/be/music/most-played/12/songs.json');
        $feed = $response['feed'];
        $feed = collect($feed);
        $result = compact('feed');
        \Json::dump($result);
        return view("shop.itunes", $result);
    }
}
