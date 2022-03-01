<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{  route('comics.index') }}">List of Comics</a>
                {{-- <a class="nav-item nav-link active" href="{{  route('comics.create') }}">Create new comic</a> --}}
              </div>
            </div>
          </nav>
    </header>

    <main>
        @yield('main_content')
    </main>

</body>
</html>