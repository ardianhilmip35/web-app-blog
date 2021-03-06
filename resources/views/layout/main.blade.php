<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/main.css">

    <title>
        @yield('title')
    </title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <nav class="navbar logres shadow">
        <div class="container ms-4">
          <a class="navbar-brand txlogo" href="#">
            <img src="/img/LOGO TOK.png" alt="" width="34" height="34" class="d-inline-block align-text-top me-1">
            <label style="margin-left: 10px">Go Job</label>
          </a>
        </div>
      </nav>

    <div class="container mt-2 logreg mb-3">
        @yield('content')
    </div>

  </body>
</html>