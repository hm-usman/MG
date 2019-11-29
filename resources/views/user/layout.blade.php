<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/">
            <!--<img src="#" width="30" height="30" class="d-inline-block align-top" alt="">-->
            <span class="bg-warning">MEME-Generator</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item {{Request::path() === '/' ? 'active' : '' }} ">
                <a class="nav-link" href="/"><img src="images/trend.png" width="20" height="20" class="d-inline-block align-left " alt=""> Trending </a>
              </li>
              <li class="nav-item {{Request::path() === '/create' ? 'active' : '' }} ">
                <a class="nav-link" href="/create">Create</a>
              </li>
              <li class="nav-item {{Request::path() === '/contact' ? 'active' : '' }}">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
            </ul>
              <button class="btn-sm btn-warning ml-auto mr-1">Login</button>
          </div>
        </div>
    </nav>

    @yield('content')

</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/fabric.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>