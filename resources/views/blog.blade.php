<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Resource Search</title>
</head>
<body>
    <div class="container">
        <form action="submit">
            <input type="text" class="col-12">
        </form>
        @foreach ($resources as $resource)
        <div class="card">
            <div class="card-header">
                <h1>{{ $resource->title }}</h1>
                <p>{{ $resource->name }}</p>
            </div>
            <div class="card-body">
                
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>