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
        <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
            <input type="text" class="col-12 form-control" name="q"
                  placeholder="Search Posts">
        </form>
        <form action="submit">
            <h4>Filter</h4>
            <br>
            <h5>Author::<input type="text" class="col-6"></h5>
            <h5>Year::<input type="text" class="col-6"></h5>
            <h5>Topic::<input type="text" class="col-6"></h5>
        </form>
        @foreach ($resources as $resource)
        <div class="card">
            <div class="card-header">
                <h1>{{ $resource->title }}</h1>
                <p>{{ $resource->name }}||{{ $resource->year }}||{{ $resource->topic }}</p>
            </div>
            <div class="card-body">
                
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>