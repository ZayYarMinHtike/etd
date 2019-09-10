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
        <form  role="search">
        {{ csrf_field() }}
            <input type="search" class="col-12 form-control" name="q"
                  placeholder="Search Posts" value="{{ $q }}">        
                  <h4>Filter With:</h4>
            <h5>Author::</h5><input name="author" type="text" class="col-6">
            <h5>Topic::</h5><input name="topic" type="text" class="col-6">
            <h5>Tags::</h5>
            <select id="thedropdown" name="supervisor">
                <option value="">None</option>
                <option value="Dr. Aye Thu Htun">Dr. Aye Thu Htun</option>
                <option value="Dr. Moe Moe Khaing">Dr. Moe Moe Khaing</option>
                <option value="Daw Hla Hla Mon">Daw Hla Hla Mon</option>
            </select>
            <input name="company" type="checkbox" value="Ruby True Hotel" class="col-6">Ruby True Hotel<br>
            <input name="company" type="checkbox" value="Myanmar Oriental Bank" class="col-6">Myanmar Oriental Bank<br>
            <button method="POST" action="/filter" type="submit"> filter </button>        
        </form>
        @foreach ($resources as $resource)
        <div class="card">
            <div class="card-header">
                <h1>{{ $resource->title }}</h1>
                <p>{{ $resource->name }}||{{ $resource->year }}||{{ $resource->topic }}||{{ $resource->company }}||{{ $resource->supervisor }}</p>
            </div>
            <div class="card-body">
                
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>