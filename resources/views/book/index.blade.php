<table>
    <thead>
        <tr>
            <th>@lang("Name")</th>
            <th>@lang("Pages")</th>
            <th>@lang("ISBN")</th>
            <th>@lang("Release Date")</th>
            <th>@lang("Genre")</th>
            <th>@lang("Media Type")</th>
            <th>@lang("Writer")</th>
            <th>@lang("Publisher")</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($books as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->pages }}</td>
                <td>{{ $item->isbn }}</td>
                <td>{{ $item->release_date }}</td>
                <td>{{ $item->genre->name }}</td>
                <td>{{ $item->mediatype->name }}</td>
                <td>{{ $item->writer->name }}</td>
                <td>{{ $item->publisher->name }}</td>
                <td><a href="{{ route("admin.book.show", strtolower($item->name)) }}">@lang("Show")</a></td>
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
