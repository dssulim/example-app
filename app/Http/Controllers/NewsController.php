<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        //вывод всех новостей
//        dd($this->getCategoriesNews());
        return view('news.index', [
            'categoriesNews' => $this->getCategoriesNews()
        ]);
    }

    public function showOld_1(int $id){
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

    public function show(int $id){
        $news=[];
        foreach ($this->getCategoriesNews() as $item){
            foreach ($item['newsList'] as $key=>$value){
                if ($value['id'] == $id) {
                    $news = $value;
                }
            }//dump($news);
        }
        if (!$news) {
            abort(404);
        }
        return view('news.show', [
            'news' => $news,
            'id' => $id
        ]);
    }

    public function FromCategory(int $categoryID){
        $news=null;
        foreach ($this->getCategoriesNews() as $item){
            if ($item['id'] == $categoryID) {
                $news = $item;
            }
        }
        if (!$news) {
            abort(404);
        }
        //dump($news, $news['newsList']);
        return view('news.FromCategory', [
            'newsList' => $news['newsList'],
            'categoryName' => $news['name'],
            'categoryID' => $news['id']
        ]);
    }

    public function categoriesList(){
        $categoriesList = [];
        foreach ($this->getCategoriesNews() as $category){
            $categoriesList[] = [
                'name' => $category['name'],
                'id' => $category['id']
            ];
        }
        return view('news.CategoriesList', [
            'categoriesList' => $categoriesList
        ]);
    }

    public function addNews(){
        return view('news.addNews');
    }

    public function authorization(){
        return view('news.authorizationPage');
    }
}
