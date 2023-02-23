<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index()
    {
        $xml = XmlParser::load('https://news.yandex.ru/computers.rss');

        $data = $xml->parse([
            'title' => [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'uses' => 'channel.image.url'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description,pubDate]'
            ],
        ]);

        // dump($data['news']);

        return view('news.index', ['news' => $data['news']]);
    }

    public function store()
    {
        $this->validateRequestNews();
        $item = new News();

        $item->title = request('title');
        $item->link = request('link');
        $item->guid = request('guid');
        $item->description = request('description');
        $item->pubDate = request('pubDate');

        $item->save();

        return redirect('/');
    }

    protected function validateRequestNews()
    {
        return request()->validate([
            'title' => 'required',
            'link' => 'required',
            'guid' => 'required',
            'description' => 'required',
            'pubDate' => 'required'
        ]);
    }
}
