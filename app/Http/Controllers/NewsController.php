<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class NewsController extends Controller
{
    public function index(){
        //вывод всех новостей
        $news = new News();
        return view('news.index', [
            'newsList' => $news->getNews()
        ]);
    }


    public function show(int $id){
        $news = new News();
        if (!isset($news->getNewsById($id)[0])){
            abort(404);
        }
        return view('news.show', [
            'news' => $news->getNewsById($id)[0]
        ]);
    }

    public function FromCategory(int $categoryID){
        $category = new Category();
        if (!isset($category->getCategoryById($categoryID)[0])){
            abort(404);
        }
        return view('news.FromCategory', [
            'newsList' => $category->getCategoryById($categoryID),
            'categoryTitle' => $category->getCategoryById($categoryID)[0]->title
        ]);
    }

    public function categoriesList(){
        $categories = new Category();
//        dd($categories->getCategories());
        return view('news.CategoriesList', [
            'categoriesList' => $categories->getCategories()
        ]);
    }

    public function addNews(){
        return view('news.addNews');
    }

    public function authorization(){
        return view('news.authorizationPage');
    }
}
