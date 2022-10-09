<table>
    <thead>
        <tr>
            <th>@lang("Full Name")</th>
            <th>@lang("Username")</th>
            <th>@lang("Email")</th>
            <th>@lang("Role")</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
        <tr>
            <td>{{ $item->full_name }}</td>
            <td>{{ $item->username }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->role->name }}</td>
            <td><a href="{{ Route("admin.user.show", strtolower($item->username)) }}">@lang("Show")</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
