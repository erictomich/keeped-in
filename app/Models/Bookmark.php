<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bookmark extends Model
{
    use HasFactory;

    protected $table = 'bookmarks';
    protected $primaryKey = 'bookmark_id';

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'bookmarks_tags', 'bookmark_id', 'tag_id');
    }

    public function allBookmarks() {
        return DB::table('ve_bookmarks')->where('user_id', 1)->get();
    }

    public function bookmarksByTag($tag) { 
        return DB::table('ve_bookmarks')->where('tags', 'like', '%'.$tag.'%')->get();
    }
}

