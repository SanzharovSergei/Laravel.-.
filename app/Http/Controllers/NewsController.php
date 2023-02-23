<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::latest()->get();

        return view('news.index', ['news' => $newsList]);
    }

    public function show(News $item)
    {
        return view('news.show', ['item' => $item]);
    }

    public function edit(News $item)
    {
        return view('news.edit', ['item' => $item]);
    }

    public function update(Request $request, News $item)
    {
        $item->update($this->validateNews());
        return redirect($item->path());
//
//
//        $item->title = request('title');
//        $item->link = request('link');
//        $item->description = request('description');
//        return redirect($item->path());
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

    protected function validateNews()
    {
        return request()->validate([
            'title' => 'required',
            'link' => 'required',
            'description' => 'required',
        ]);
    }
}
