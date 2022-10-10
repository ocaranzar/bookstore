<div>
    <h3>@lang("Writer") {{ $writer->name }}</h3>
    <div>
        @lang("Name")
        {{ $writer->name }}
    </div>
    <div>
        @lang("Nationality")
        {{ $writer->nationality->name }}
    </div>
    <div>
        @lang("Created at")
        {{ $writer->created_at }}
    </div>
    <div>
        @lang("Updated at")
        {{ $writer->updated_at }}
    </div>
    <div>
        @lang("Deleted at")
        {{ $writer->deleted_at }}
    </div>
    <div>
        <a href="{{ route("admin.writer.edit", strtolower($writer->name)) }}">@lang("Edit")</a>
        <form action="{{ route("admin.writer.destroy", strtolower($writer->name)) }}" method="POST">
            @csrf
            @method("DELETE")

            <button type="submit">@lang("Delete")</button>
        </form>
    </div>
</div>
