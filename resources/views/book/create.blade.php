<form action="{{ route("admin.book.store") }}" enctype="multipart/form-data" method="POST" >
    @csrf

    <label for="cover">@lang("Cover")</label>
    <input type="file" name="cover" id="cover" value="{{ old("cover") }}" autofocus>

    @if ($errors->has("cover"))
        {{ $errors->first("cover") }}
    @endif

    <label for="name">@lang("Name")</label>
    <input name="name" id="name" value="{{ old("name") }}" autofocus>

    @if ($errors->has("name"))
        {{ $errors->first("name") }}
    @endif

    <label for="pages">@lang("Pages")</label>
    <input type="number" name="pages" id="pages" value="{{ old("pages") }}" autofocus>

    @if ($errors->has("pages"))
        {{ $errors->first("pages") }}
    @endif

    <label for="isbn">@lang("ISBN")</label>
    <input type="number" name="isbn" id="isbn" value="{{ old("isbn") }}" autofocus>

    @if ($errors->has("isbn"))
        {{ $errors->first("isbn") }}
    @endif

    <label for="release_date">@lang("Release Date")</label>
    <input type="date" name="release_date" id="release_date" value="{{ old("release_date") }}" autofocus>

    @if ($errors->has("release_date"))
        {{ $errors->first("release_date") }}
    @endif

    <label for="mediatype">@lang("Media Type")</label>
    <select name="mediatype" id="mediatype" autofocus>
        <option selected disabled>@lang("Select")</option>

        @foreach ($mediatypes as $item)
            @if (!is_null(old("mediatype")) && $item->id == old("mediatype"))
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @continue
            @endif
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>

    @if ($errors->has("mediatype"))
        {{ $errors->first("mediatype") }}
    @endif

    <label for="genre">@lang("Genre")</label>
    <select name="genre" id="genre" autofocus>
        <option selected disabled>@lang("Select")</option>

        @foreach ($genres as $item)
            @if (!is_null(old("genre")) && $item->id == old("genre"))
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @continue
            @endif
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>

    @if ($errors->has("genre"))
        {{ $errors->first("genre") }}
    @endif

    <label for="writer">@lang("Writer")</label>
    <select name="writer" id="writer" autofocus>
        <option selected disabled>@lang("Select")</option>

        @foreach ($writers as $item)
            @if (!is_null(old("writer")) && $item->id == old("writer"))
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @continue
            @endif
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>

    @if ($errors->has("writer"))
        {{ $errors->first("writer") }}
    @endif

    <label for="publisher">@lang("Publisher")</label>
    <select name="publisher" id="publisher" autofocus>
        <option selected disabled>@lang("Select")</option>

        @foreach ($publishers as $item)
            @if (!is_null(old("publisher")) && $item->id == old("publisher"))
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @continue
            @elseif (is_null(old("publisher")) && isset($book) && $item->id == $book->publisher_id)
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @continue
            @endif
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>

    @if ($errors->has("publisher"))
        {{ $errors->first("publisher") }}
    @endif

    <button type="submit">@lang("Save")</button>
</form>
