<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit | Todo</title>
</head>

<body style="text-align: center">
    <h1>Edit Your Todo</h1>
    <x-alert />
    <form action="/update" method="post">
        @csrf
        <input type="text" name='title' id='title' value="{{ $todo->title }}" />
        <input type="hidden" hidden name='id' id='id' value="{{ $todo->id }}" />
        <input type="submit" name='edit' value="Edit" />
        @error('title')
            <p style="color:red">{{ $message }}</p>
        @enderror
    </form>
    <a href="/index">Back</a>
</body>

</html>
