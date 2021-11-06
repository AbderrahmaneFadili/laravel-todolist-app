<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>

<body>
    <h1>Todos list...</h1>
    <div>
        <x-alert />
    </div>
    <ul style="list-style:circle">
        @foreach ($todos as $todo)
            <li>
                @if ($todo->completed)
                    <span style="text-decoration:line-through">{{ $todo->title }}</span>
                @else
                    {{ $todo->title }}
                @endif
                <a href="{{ asset('/' . $todo->id . '/edit') }}">Edit</a>
                <a href="{{ asset('/' . $todo->id . '/completed') }}">Completed</a>
                <a href="{{ asset('/' . $todo->id . '/delete') }}">Delete</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
