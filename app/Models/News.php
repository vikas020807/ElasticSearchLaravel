<?php

namespace App\Models;

use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;

class News extends Model
{
    use HasFactory, Searchable;
    // protected $searchable = ['title', 'content', 'author'];

    public function toSearchableArray()
    {
        return [
            'title'=>(string)$this->title,
            'content'=>(string)$this->content,
            'author'=>(string)$this->author,
            'created_at'=>$this->created_at
        ];
    }
    public function searchableAs()
    {
        return 'news_index';
    }
    
}
