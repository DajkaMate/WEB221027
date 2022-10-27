<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP menü</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body class="bg-light">
    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark container">
            
              <a class="navbar-brand" href="./">Főoldal</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="?p=oldal1">Oldal 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?p=oldal2">Oldal 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?p=oldal3">Oldal 3</a>
                  </li>  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Almenű</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="?p=oldal4">Oldal 4</a></li>
                      <li><a class="dropdown-item" href="?p=oldal5">Oldal 5</a></li>
                      <li><a class="dropdown-item" href="?p=oldal6">Oldal 6</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
          </nav>
    </div>

