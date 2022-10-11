<div>
    <h3>@lang("Book") {{ $book->name }}</h3>
    <div>
        <img src="{{ asset($book->cover) }}" alt="cover">
    </div>
    <div>
        @lang("Name")
        {{ $book->name }}
    </div>
    <div>
        @lang("Pages")
        {{ $book->pages }}
    </div>
    <div>
        @lang("ISBN")
        {{ $book->isbn }}
    </div>
    <div>
        @lang("Release Date")
        {{ $book->release_date }}
    </div>
    <div>
        @lang("Genre")
        {{ $book->genre->name }}
    </div>
    <div>
        @lang("Media Type")
        {{ $book->mediatype->name }}
    </div>
    <div>
        @lang("Writer")
        {{ $book->writer->name }}
    </div>
    <div>
        @lang("Publisher")
        {{ $book->publisher->name }}
    </div>
    <div>
        @lang("Created At")
        {{ $book->created_at }}
    </div>
    <div>
        @lang("Updated At")
        {{ $book->updated_at }}
    </div>
    <div>
        @lang("Deleted At")
        {{ $book->deleted_at }}
    </div>
    <div>
        <a href="{{ route("admin.book.edit", strtolower($book->name)) }}">@lang("Edit")</a>
        <form action="{{ route("admin.book.destroy", strtolower($book->name)) }}" method="POST">
            @csrf
            @method("DELETE")

            <button type="submit">@lang("Delete")</button>
        </form>
    </div>
</div>
