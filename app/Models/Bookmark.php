<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $table = 'bookmarks';
    protected $primaryKey = 'bookmark_id';


    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'bookmarks_tags', 'bookmark_id', 'tag_id');
    }
}

