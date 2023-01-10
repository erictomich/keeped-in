<?php

namespace App\Http\Controllers;

use App\Models\TagType;
use App\Http\Requests\StoreTagTypeRequest;
use App\Http\Requests\UpdateTagTypeRequest;

class TagTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreTagTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TagType  $tagType
     * @return \Illuminate\Http\Response
     */
    public function show(TagType $tagType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TagType  $tagType
     * @return \Illuminate\Http\Response
     */
    public function edit(TagType $tagType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagTypeRequest  $request
     * @param  \App\Models\TagType  $tagType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagTypeRequest $request, TagType $tagType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TagType  $tagType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TagType $tagType)
    {
        //
    }
}
