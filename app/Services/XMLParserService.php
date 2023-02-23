<?php


namespace App\Services;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Illuminate\Contracts\Auth\Authenticatable;


class XMLParserService
{
    public function saveNews($link)
    {
        $xml = XmlParser::load($link);

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

        $counter=0;

        foreach ($data['news'] as $item) {

            $news = News::query()->firstOrNew(['title' => $item['title']]);

            if ($news->id) {
                continue;
            } else {
                $news = new News();
                $news->title = $item['title'];
                $news->link = $item['link'];
                $news->guid = $item['guid'];
                $news->description = $item['description'];
                $news->pubDate = $item['pubDate'];
                $news->user_id = 1;

                $news->save();
                $counter++;
            }
        }

        //$fileName = sprintf('Logs%s.txt',time() . rand(0, 10000));
        //Storage::disk('publicLogs')->put($fileName, $link);
        Storage::disk('publicLogs')->append('log.txt', date('c') . ' ' . $link);
    }
}
