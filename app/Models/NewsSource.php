<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsSource extends Model
{
    use HasFactory;

    protected $table = 'newsSource';

    public function getNewsSources()
    {
        return DB::table($this->table)->get();
    }

    public function getNewsSourceById(int $id)
    {
        return DB::table($this->table)->find($id);
    }
}
