<x-app-layout>
    <form action="/todo"method="post">
        @csrf
        <input type="text" name=todo>
        <input type="submit"value="登録">
    </form>
</x-app-layout>