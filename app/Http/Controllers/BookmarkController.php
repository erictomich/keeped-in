<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;
use App\Models\Tag;
use App\Http\Controllers\BookmarksTagsController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\DB;

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

        DB::transaction(function () use ($request) {
            $user_id = 1;

            $re = '/src="([^"]*)"/';

            preg_match($re, $request->code, $matches);
            $url = $matches[1];

            $bookmark = new Bookmark;
            $bookmark->user_id = $user_id;
            $bookmark->typeBookmark_id = 1;
            $bookmark->description = $request->description;
            $bookmark->title = $request->title;
            $bookmark->url = $url;
            $bookmark->codeShare = $url;
    
            $bookmark->save();

            $bookmarkID = $bookmark->bookmark_id;
            $tags = explode(",",$request->tags);

            foreach($tags as $tag) {

                $tagBusca = Tag::where('tag', $tag)->first();
                if($tagBusca) { // tag exists
                    
                    $idTag = $tagBusca->tag_id;

                } else { // tag not exists
                    $data = [
                        'user_id' => $user_id,
                        'tag' => trim($tag)
                    ];

                   
                
                    $tag1 = new TagController();
                    $idTag = $tag1->store($data);
                }
                if($idTag === null)
                    die(var_dump($tag));

                $data = [
                    'user_id' => $user_id,
                    'bookmark_id' => $bookmarkID,
                    'tag_id' => $idTag
                ];
    
                //create and save tag
                $bookmarksTags = new BookmarksTagsController();
                $bt = $bookmarksTags->store($data);
            }
        });
    }
}
