<!doctype html>
<html lang="en">

<head>
    <title>Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS AND FONTAWESOME AND ANIMATE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Custom style -->
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
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
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalRegister">S'inscrire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Se connecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header_container">
            <div class="container">
                <form method="post" class="animate__animated animate__fadeInDown">
                    <div class="form-row">
                        <div class="form-group col-5 offset-6">
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4 contact">
                    <h5>Nous contacter</h5>
                    <p>Un bug? Une difficultée insurmontable? Ou une autre question? Envoyez nous un message et nous essayerons de vous répondre au plus vite.</p>
                    <p>
                        <button href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modalContact">Envoyer un message</button>
                    </p>
                </div>
                <div class="col-4 tweets">
                    <h5>Les derniers tweets</h5>
                    <p><a href="#" target="blank">Pour compléter ma vidéo sur Symfony UX, si vous voulez découvrir Turbo https://t.co/oddAHEFNGt</a></p>
                    <p><a href="#" target="blank">Je n'aime pas cette nouvelle mode des bandeaux RGPD sans opt-out. L'absence de cookies ne veut pas nécessairement d… https://t.co/yeieJpBgLo </a></p>
                </div>
                <div class="col-4 text-right social-media">
                    <h5>Nous suivre</h5>
                    <p><a href="#" target="blank"><i class="fab fa-facebook-f"></i></a></p>
                    <p><a href="#" target="blank"><i class="fab fa-twitter"></i></a></p>
                    <p><a href="#" target="blank"><i class="fab fa-instagram"></i></a></p>
                    <p><a href="#" target="blank"><i class="fab fa-linkedin-in"></i></a></p>
                </div>
            </div>
        </div>
    </footer>



    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="login" class="col-form-label">Pseudo ou Email:</label>
                            <input type="text" class="form-control" id="login" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Mot de passe:</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Se souvenir de moi</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success">Connection</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalRegister" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="registerLogin" class="col-form-label">Pseudo:</label>
                            <input type="text" class="form-control" id="registerLogin" required>
                        </div>
                        <div class="form-group">
                            <label for="registerEmail" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="registerEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="registerPassword" class="col-form-label">Mot de passe:</label>
                            <input type="password" class="form-control" id="registerPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="registerPasswordConfirm" class="col-form-label">Confirmation du mot de passe:</label>
                            <input type="password" class="form-control" id="registerPasswordConfirm" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success">Valider</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="modalContact" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contactez-nous</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="contactSubject" class="col-form-label">Sujet:</label>
                            <input type="text" class="form-control" id="contactSubject" required>
                        </div>
                        <div class="form-group">
                            <label for="contactText" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="contactText" placeholder="Décrivez au mieux votre question" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success">Envoyer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>