<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        //вывод всех новостей
        return view('news.index', [
            'newsList' => $this->getNews()
        ]);
    }

    public function show(int $id){
        //вывод конкретной новости
        $news = $this->getNews()[$id-1] ?? null; //Добавила -1 в getNews()[$id]. Потому что последняя новость отдельно не открывалась
        if (!$news) {
            abort(404);
        }
        return view('news.show', [
            'news' => $news,
            'id' => $id
        ]);

    }
}
