<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create | Todo</title>
</head>

<body style="text-align: center">
    <h1>Create Your Todo</h1>
    <x-alert />
    <form action="/create" method="post">
        @csrf
        <input type="text" name='title' id='title' />
        <input type="submit" name='create' value="Create" />
        @error('title')
            <p style="color:red">{{ $message }}</p>
        @enderror
    </form>
    <a href="/index">Back</a>
</body>

</html>
