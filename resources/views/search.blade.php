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
        <form action="/filter" method="POST" role="search">
        {{ csrf_field() }}
            <input type="search" class="col-12 form-control" name="q"
                  placeholder="Search Posts">          
        </form>
    </div>
</body>
</html>