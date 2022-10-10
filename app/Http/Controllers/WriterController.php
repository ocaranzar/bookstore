<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use App\Http\Requests\StoreWriterRequest;
use App\Http\Requests\UpdateWriterRequest;
use App\Models\Nationality;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = Writer::orderBy("name")->get();

        return view("writer.index", compact("writers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nationalities = Nationality::orderBy("name")->get();

        return view("writer.create", compact("nationalities"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWriterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWriterRequest $request)
    {
        writer::create([
            "name" => $request->name,
            "nationality_id" => $request->nationality,
        ]);

        return redirect()->route("admin.writer.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function show(Writer $writer)
    {
        return view("writer.show", compact("writer"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function edit(Writer $writer)
    {
        $nationalities = Nationality::orderBy("name")->get();

        return view("writer.edit", compact("writer", "nationalities"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWriterRequest  $request
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWriterRequest $request, Writer $writer)
    {
        $writer->update([
            "name" => $request->name,
            "nationality_id" => $request->nationality,
        ]);

        return redirect()->route(
            "admin.writer.edit",
            strtolower($writer->name)
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Writer $writer)
    {
        $writer->delete();

        return redirect()->route("admin.writer.index");
    }
}
