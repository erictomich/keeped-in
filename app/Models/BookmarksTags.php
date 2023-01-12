<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookmarksTags extends Model
{
    use HasFactory;

    protected $table = 'bookmarks_tags';

    public function bookmarks()
    {
        return $this->belongsToMany(Bookmark::class, 'bookmark_id');
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_id');
    }

}
