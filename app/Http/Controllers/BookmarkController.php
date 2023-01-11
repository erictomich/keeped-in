<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;

class BookmarkController extends Controller
{
    public function index() {
        $bookmarks = Bookmark::where('user_id', 1)->get();
        return view('bookmarks.my-bookmarks', compact('bookmarks'));
    } 

    public function create(Request $request) {
        $post = $request->post();
        $post = array_diff_key($post, ['_token' => '']);

        $this->store($request);

        return redirect('/my-bookmarks');
    }

    public function store(Request $request) {
        $bookmark = new Bookmark;
        $bookmark->user_id = 1;
        $bookmark->typeBookmark_id = 1;
        $bookmark->description = $request->description;
        $bookmark->title = $request->title;
        $bookmark->url = $request->url;
        $bookmark->codeShare = $request->code;
 
        $bookmark->save();
    }
}
