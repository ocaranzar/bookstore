<form action="{{ route("admin.genre.update", strtolower($genre->name)) }}" method="POST">
    @csrf
    @method("PATCH")

    <label for="name">@lang("Name")</label>
    <input name="name" id="name" value="{{ old("name", $genre->name) }}" autofocus>

    @if ($errors->has("name"))
        {{ $errors->first("name") }}
    @endif

    <button type="submit">@lang("Save")</button>
</form>
