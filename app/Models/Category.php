<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";

    public function getCategories(){
        return DB::table($this->table)->get();
    }

    public function getCategoryById(int $id){
        return DB::table($this->table)
            ->leftJoin('news', 'categories.id', '=', 'news.category_id')
            ->select('categories.*', 'news.id as NewsId', 'news.title as NewsTitle', 'news.description as NewsDescription', 'news.author as NewsAuthor')
            ->where('categories.id', '=', $id)
            ->get();
    }
}
