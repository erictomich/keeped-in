<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $table = 'bookmarks';
    protected $primaryKey = 'bookmark_id';


    public function tags() {
        
        return $this->morphToMany(Tag::class, 'bookmarks_tags');
    }
}

//https://www.nicesnippets.com/blog/laravel-9-factory-example-tutorial