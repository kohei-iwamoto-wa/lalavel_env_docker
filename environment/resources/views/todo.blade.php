<x-app-layout>
<table>
    @foreach ($todos ?? '' as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->todo }}</td>
            <td>{{ $todo->created_at }}</td>
        </tr>
    @endforeach
</table>
</x-app-layout>