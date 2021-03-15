<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleIndex.css">

    <title>@yield('judul')</title>
  </head>
  <body class="bodi">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="/">CINEMy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href=" {{ url('/') }} ">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/menu">Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/soon">Coming Soon</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/top">Top Movies</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>

      <div class="container mt-3 mb-5">

        <div class="card alert-secondary">
          <div class="card-header">
            @yield('sub')
          </div>
          <div class="card-body">
            <p class="card-text"> @yield('isi')</p>
          </div>
        </div>

      </div>



      <div class="footer bg-dark text-light pb-1 pt-3">
        <div class="footer-content">
          <div class="container">
            <p align="center">Copyright &copy; 2021 <a href="https://www.instagram.com/zarazaaf/">Siti Fatimah Azzahra.</a> All Rights Reserved</p>
          </div>
        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>