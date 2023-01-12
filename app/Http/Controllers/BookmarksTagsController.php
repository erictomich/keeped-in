<?php

namespace App\Http\Controllers;

use App\Models\BookmarksTags;
use App\Http\Requests\StoreBookmarksTagsRequest;
use App\Http\Requests\UpdateBookmarksTagsRequest;

class BookmarksTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookmarksTagsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store($data = array())
    {
        $bookmark_tag = new BookmarksTags;
        $bookmark_tag->user_id = $data["user_id"];
        $bookmark_tag->bookmark_id = $data["bookmark_id"];
        $bookmark_tag->tag_id = $data["tag_id"];
        $bookmark_tag->save();

        return $bookmark_tag;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookmarksTags  $bookmarksTags
     * @return \Illuminate\Http\Response
     */
    public function show(BookmarksTags $bookmarksTags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookmarksTags  $bookmarksTags
     * @return \Illuminate\Http\Response
     */
    public function edit(BookmarksTags $bookmarksTags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookmarksTagsRequest  $request
     * @param  \App\Models\BookmarksTags  $bookmarksTags
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookmarksTagsRequest $request, BookmarksTags $bookmarksTags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookmarksTags  $bookmarksTags
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookmarksTags $bookmarksTags)
    {
        //
    }
}
