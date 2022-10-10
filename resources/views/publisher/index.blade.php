<table>
    <thead>
        <tr>
            <th>@lang("Name")</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($publishers as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td><a href="{{ route("admin.publisher.show", strtolower($item->name)) }}">@lang("Show")</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="3">
                    @lang("There're not records.")
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
