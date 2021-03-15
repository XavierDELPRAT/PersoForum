<!doctype html>
<html lang="en">
  <head>
    <title>Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS  and FONTAWESOME-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <!-- Custom style -->
    <link rel="stylesheet" href="CSS/style.css">               
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto my-2 my-lg-0 pt-1 navbar-nav-scroll navbar-left">
            <li class="nav-item">
                <a class="nav-link" href="#">HTML / CSS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Javascript</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PHP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Base de données</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Divers</a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-nav-scroll navbar-right d-flex fa-ul">
            <li class="nav-item">
                <span class="fa-li mt-2"><i class="far fa-user"></i></span>
                <a class="nav-link" href="#">S'inscrire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Se connecter</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="header_container">
        <div class="container">
            <form method="post">
            <div class="form-row">
                <div class="form-group col-6 offset-5">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un sujet ..." aria-label="Search">
                </div>
                <div class="form-group col">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </header>

    <div class="container">
        <?= $content; ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>            