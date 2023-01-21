<?php

namespace App\Http\Controllers;

use App\Models\BookmarkList;

class ListController extends Controller {

    public function index() {
        $list = new BookmarkList();

        $lists = $list->all();

        return view('lists.index', compact('lists'));
    }


   
}