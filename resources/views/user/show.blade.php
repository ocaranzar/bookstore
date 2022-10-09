<div>
    <h3>@lang("user"): {{ $user->full_name }}</h3>
    <div>
        <strong>@lang("First Name"):</strong>
        {{ $user->first_name }}
    </div>
    <div>
        <strong>@lang("Last Name"):</strong>
        {{ $user->last_name }}
    </div>
    <div>
        <strong>@lang("Username"):</strong>
        {{ $user->username }}
    </div>
    <div>
        <strong>@lang("Email"):</strong>
        {{ $user->email }}
    </div>
    <div>
        <strong>@lang("Role"):</strong>
        {{ $user->role->name }}
    </div>
    <div>
        <strong>@lang("Created At"):</strong>
        {{ $user->created_at }}
    </div>
    <div>
        <strong>@lang("Updated At"):</strong>
        {{ $user->updated_at }}
    </div>
    <div>
        <strong>@lang("Deleted At"):</strong>
        {{ $user->deleted_at }}
    </div>
    <div>
        <a href="{{ route("admin.user.edit", strtolower($user->username)) }}">@lang("Edit")</a>
        <form action="{{ route("admin.user.destroy", strtolower($user->username)) }}" method="POST">
            @csrf
            @method("DELETE")

            <button type="submit">@lang("Delete")</button>
        </form>
    </div>
</div>
