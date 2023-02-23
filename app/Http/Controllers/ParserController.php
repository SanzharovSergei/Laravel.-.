<?php

namespace App\Http\Controllers;

use App\Models\News;
//use Illuminate\Http\Request;
//use Orchestra\Parser\Xml\Facade as XmlParser;
//use App\Services\XMLParserService;
use App\Jobs\NewsParsing;

class ParserController extends Controller
{
    public function index()
    {
        $start = date('c');
        $rssLinks = [
            'https://news.yandex.ru/auto.rss',
            'https://news.yandex.ru/auto_racing.rss',
            'https://news.yandex.ru/army.rss',
            'https://news.yandex.ru/gadgets.rss',
            'https://news.yandex.ru/martial_arts.rss',
            'https://news.yandex.ru/communal.rss',
            'https://news.yandex.ru/health.rss',
            'https://news.yandex.ru/games.rss',
            'https://news.yandex.ru/internet.rss',
            'https://news.yandex.ru/cyber_sport.rss',
            'https://news.yandex.ru/movies.rss',
            'https://news.yandex.ru/cosmos.rss',
            'https://news.yandex.ru/culture.rss',
            'https://news.yandex.ru/championsleague.rss',
            'https://news.yandex.ru/music.rss',
            'https://news.yandex.ru/nhl.rss',
        ];

        foreach ($rssLinks as $link) {
//            $parserService->saveNews($link);
              NewsParsing::dispatch($link);
        }

//        return view('news.index', ['news' => $data['news']]);
//        return $start . ' ' . date('c');

        return redirect(route('news.index'));
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

        return redirect(route('news.index'));
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
