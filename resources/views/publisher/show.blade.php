<div>
    <h3>@lang("Publisher") {{ $publisher->name }}</h3>
    <div>
        @lang("Name")
        {{ $publisher->name }}
    </div>
    <div>
        @lang("Created at")
        {{ $publisher->created_at }}
    </div>
    <div>
        @lang("Updated at")
        {{ $publisher->updated_at }}
    </div>
    <div>
        @lang("Deleted at")
        {{ $publisher->deleted_at }}
    </div>
    <div>
        <a href="{{ route("admin.publisher.edit", strtolower($publisher->name)) }}">@lang("Edit")</a>
        <form action="{{ route("admin.publisher.destroy", strtolower($publisher->name)) }}" method="POST">
            @csrf
            @method("DELETE")

            <button type="submit">@lang("Delete")</button>
        </form>
    </div>
</div>
