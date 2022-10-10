<div>
    <h3>@lang("Nationality") {{ $nationality->name }}</h3>
    <div>
        @lang("Name")
        {{ $nationality->name }}
    </div>
    <div>
        @lang("Created at")
        {{ $nationality->created_at }}
    </div>
    <div>
        @lang("Updated at")
        {{ $nationality->updated_at }}
    </div>
    <div>
        @lang("Deleted at")
        {{ $nationality->deleted_at }}
    </div>
    <div>
        <a href="{{ route("admin.nationality.edit", strtolower($nationality->name)) }}">@lang("Edit")</a>
        <form action="{{ route("admin.nationality.destroy", strtolower($nationality->name)) }}" method="POST">
            @csrf
            @method("DELETE")

            <button type="submit">@lang("Delete")</button>
        </form>
    </div>
</div>
