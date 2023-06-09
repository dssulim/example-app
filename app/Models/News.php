<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    public function getNews()
    {
        //return DB::select("SELECT id, title, author, description FROM {$this->table}");
       /* dd(
            DB::table($this->table)->
            join('categories', 'news.category_id', '=', 'categories.id')
            ->select('news.*', 'categories.title as categoryTitle')
            //->where('news.id', '>', '6')
            ->where('news.title', 'like', '%'. request()->get('s') .'%')
            //->toSql()
            ->get()
        );*/
        return DB::table($this->table)
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->join('news_sources', 'news.news_source_id', '=', 'news_sources.id')
            ->select('news.*', 'categories.title as CategoryTitle', 'news_sources.title as NewsSourcesTitle')
            ->orderBy('news.id')
        ->get();
    }

    public function getNewsById(int $id)
    {
        return DB::table($this->table)
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->join('news_sources', 'news.news_source_id', '=', 'news_sources.id')
            ->select('news.*', 'categories.title as CategoryTitle', 'news_sources.title as NewsSourceTitle')
            ->where('news.id', '=', $id)
        ->get();
    }
}
