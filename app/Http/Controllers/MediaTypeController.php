<?php

namespace App\Http\Controllers;

use App\Models\MediaType;
use App\Http\Requests\StoreMediaTypeRequest;
use App\Http\Requests\UpdateMediaTypeRequest;

class MediatypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediatypes = MediaType::orderBy("name")->get();

        return view("mediatype.index", compact("mediatypes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("mediatype.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMediaTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaTypeRequest $request)
    {
        MediaType::create($request->all());

        return redirect()->route("admin.mediatype.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaType  $mediatype
     * @return \Illuminate\Http\Response
     */
    public function show(MediaType $mediatype)
    {
        return view("mediatype.show", compact("mediatype"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaType  $mediatype
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaType $mediatype)
    {
        return view("mediatype.edit", compact("mediatype"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaTypeRequest  $request
     * @param  \App\Models\MediaType  $mediatype
     * @return \Illuminate\Http\Response
     */
    public function update(
        UpdateMediaTypeRequest $request,
        MediaType $mediatype
    ) {
        $mediatype->update($request->all());

        return redirect()->route(
            "admin.mediatype.edit",
            strtolower($mediatype->name)
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaType  $mediatype
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaType $mediatype)
    {
        $mediatype->delete();

        return redirect()->route("admin.mediatype.index");
    }
}
