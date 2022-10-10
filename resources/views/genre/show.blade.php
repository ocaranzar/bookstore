<div>
    <h3>@lang("Genre") {{ $genre->name }}</h3>
    <div>
        @lang("Name")
        {{ $genre->name }}
    </div>
    <div>
        @lang("Created at")
        {{ $genre->created_at }}
    </div>
    <div>
        @lang("Updated at")
        {{ $genre->updated_at }}
    </div>
    <div>
        @lang("Deleted at")
        {{ $genre->deleted_at }}
    </div>
    <div>
        <a href="{{ route("admin.genre.edit", strtolower($genre->name)) }}">@lang("Edit")</a>
        <form action="{{ route("admin.genre.destroy", strtolower($genre->name)) }}" method="POST">
            @csrf
            @method("DELETE")

            <button type="submit">@lang("Delete")</button>
        </form>
    </div>
</div>
