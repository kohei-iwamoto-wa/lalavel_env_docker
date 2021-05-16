<x-app-layout>
<table>
    <th>id</th>
    <th>Todo</th>
    <th>作成日</th>
    <th>ユーザー名</th>
    @foreach ($todos ?? '' as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->todo }}</td>
            <td>{{ $todo->created_at }}</td>
            <td>{{ $todo->user->name }}</td>
        </tr>
    @endforeach
</table>
</x-app-layout>