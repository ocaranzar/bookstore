<form action="{{ route("admin.user.update", strtolower($user->username)) }}" method="POST">
    @csrf
    @method("PUT")

    <label for="first_name">@lang("First Name")</label>
    <input name="first_name" id="first_name" value="{{ old("first_name", $user->first_name) }}" required autofocus>

    @if ($errors->has("first_name"))
        {{ $errors->first("first_name") }}
    @endif

    <label for="last_name">@lang("Last Name")</label>
    <input name="last_name" id="last_name" value="{{ old("last_name", $user->last_name) }}" required autofocus>

    @if ($errors->has("last_name"))
        {{ $errors->first("last_name") }}
    @endif

    <label for="username">@lang("Username")</label>
    <input name="username" id="username" value="{{ old("username", $user->username) }}" required autofocus>

    @if ($errors->has("username"))
        {{ $errors->first("username") }}
    @endif

    <label for="email">@lang("Email")</label>
    <input name="email" id="email" value="{{ old("email", $user->email) }}" required autofocus>

    @if ($errors->has("email"))
        {{ $errors->first("email") }}
    @endif

    <label for="role">@lang("Role")</label>
    <select name="role" id="role" autofocus>
        <option selected disabled>@lang("select")</option>

        @foreach ($roles as $item)
            @if (!is_null(old("role")) && $item->id == old("role"))
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @continue
            @elseif (is_null(old("role")) && isset($user) && $item->id == $user->role_id)
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @continue
            @endif
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>

    @if ($errors->has("role"))
        {{ $errors->first("role") }}
    @endif

    <button type="submit">@lang("Save")</button>
</form>
