<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookmarkList extends Model 
{
    protected $table = 'lists';
    protected $primaryKey = 'list_id';
}