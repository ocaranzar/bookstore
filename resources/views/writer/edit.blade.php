<form action="{{ route("admin.writer.update", strtolower($writer->name)) }}" method="POST">
    @csrf
    @method("PATCH")

    <label for="name">@lang("Name")</label>
    <input name="name" id="name" value="{{ old("name", $writer->name) }}" autofocus>

    @if ($errors->has("name"))
        {{ $errors->first("name") }}
    @endif

    <label for="nationality">@lang("Nationality")</label>
    <select name="nationality" id="nationality" autofocus>
        <option selected disabled>@lang("Select")</option>

        @foreach ($nationalities as $item)
            @if (!is_null(old("nationality")) && $item->id == old("nationality"))
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @continue
            @elseif (is_null(old("nationality")) && $item->id == $writer->nationality_id)
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @continue
            @endif
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>

    @if ($errors->has("nationality"))
        {{ $errors->first("nationality") }}
    @endif

    <button type="submit">@lang("Save")</button>
</form>
