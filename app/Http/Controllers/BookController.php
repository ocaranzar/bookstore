<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\MediaType;
use App\Models\Genre;
use App\Models\Publisher;
use App\Models\Writer;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy("name")->get();

        return view("book.index", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mediatypes = MediaType::orderBy("name")->get();
        $genres = Genre::orderBy("name")->get();
        $writers = Writer::orderBy("name")->get();
        $publishers = Publisher::orderBy("name")->get();

        return view(
            "book.create",
            compact("mediatypes", "genres", "writers", "publishers")
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        $path = $request->file("cover")->store("covers");

        Book::create([
            "cover" => $path,
            "name" => $request->name,
            "pages" => $request->pages,
            "isbn" => $request->isbn,
            "release_date" => $request->release_date,
            "mediatype_id" => $request->mediatype,
            "genre_id" => $request->genre,
            "writer_id" => $request->writer,
            "publisher_id" => $request->publisher,
        ]);

        return redirect()->route("admin.book.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view("book.show", compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $mediatypes = MediaType::orderBy("name")->get();
        $genres = Genre::orderBy("name")->get();
        $writers = Writer::orderBy("name")->get();
        $publishers = Publisher::orderBy("name")->get();

        return view(
            "book.edit",
            compact("book", "mediatypes", "genres", "writers", "publishers")
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $path = $book->cover;
        if (!is_null($request->file("cover"))) {
            Storage::delete($book->cover);
            $path = $request->file("cover")->store("covers");
        }

        $book->update([
            "cover" => $path,
            "name" => $request->name,
            "pages" => $request->pages,
            "isbn" => $request->isbn,
            "release_date" => $request->release_date,
            "mediatype_id" => $request->mediatype,
            "genre_id" => $request->genre,
            "writer_id" => $request->writer,
            "publisher_id" => $request->publisher,
        ]);

        return redirect()->route("admin.book.edit", strtolower($book->name));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Storage::delete($book->cover);
        $book->delete();

        return redirect()->route("admin.book.index");
    }
}
