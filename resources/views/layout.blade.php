<!DOCTYPE html>
<html>
<head>
    <title>Student CRUD</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('main') }}">Home</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('main') }}">Shipping Result</a>
            <li><a href="{{ route('main') }}">OK</a></li>
            <li><a href="{{ route('main') }}">NG</a></li>
        </ul>
    </nav>

    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                   placeholder="Search PDS Number"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
        </div>
    </form>
    @yield('content')
</div>
</body>
</html>
