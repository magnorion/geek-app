<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geek APP</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <ul id="menuTop" class="navbar-nav list-inline">
          <li class="nav-item">
            <a class="nav-link" href="/"> Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/marvel"> Marvel </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/star-wars"> Starwars </a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="container-site" class="container">
      @yield('conteudo')
    </div>
  </body>
</html>