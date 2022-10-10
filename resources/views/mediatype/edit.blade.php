<form action="{{ route("admin.mediatype.update", strtolower($mediatype->name)) }}" method="POST">
    @csrf
    @method("PATCH")

    <label for="name">@lang("Name")</label>
    <input name="name" id="name" value="{{ old("name", $mediatype->name) }}" autofocus>

    @if ($errors->has("name"))
        {{ $errors->first("name") }}
    @endif

    <button type="submit">@lang("Save")</button>
</form>
