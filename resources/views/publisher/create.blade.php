<form action="{{ route("admin.publisher.store") }}" method="POST">
    @csrf

    <label for="name">@lang("Name")</label>
    <input name="name" id="name" value="{{ old("name") }}" autofocus>

    @if ($errors->has("name"))
        {{ $errors->first("name") }}
    @endif

    <button type="submit">@lang("Save")</button>
</form>
