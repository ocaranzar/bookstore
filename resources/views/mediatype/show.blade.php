<div>
    <h3>@lang("Media type") {{ $mediatype->name }}</h3>
    <div>
        @lang("Name")
        {{ $mediatype->name }}
    </div>
    <div>
        @lang("Created at")
        {{ $mediatype->created_at }}
    </div>
    <div>
        @lang("Updated at")
        {{ $mediatype->updated_at }}
    </div>
    <div>
        @lang("Deleted at")
        {{ $mediatype->deleted_at }}
    </div>
    <div>
        <a href="{{ route("admin.mediatype.edit", strtolower($mediatype->name)) }}">@lang("Edit")</a>
        <form action="{{ route("admin.mediatype.destroy", strtolower($mediatype->name)) }}" method="POST">
            @csrf
            @method("DELETE")

            <button type="submit">@lang("Delete")</button>
        </form>
    </div>
</div>
