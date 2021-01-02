<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" /> --}}

    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-reboot.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <title>Burkina Biiga</title>
</head>
<body>

<header>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('adminHome')}}"><h3>Admin</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminHomeModify')}}"><h5>Page d'accueil</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminEgality')}}"><h5>Égalité fille / garçon</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminActions')}}"><h5>Nos actions</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminActualities')}}"><h5>Actualités</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminJoinUs')}}"><h5>Nous rejoindre</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminDonation')}}"><h5>Faire un don</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminLogOut')}}"><h5>Déconnexion</h5></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</header>


<main>

@yield('content')

</main>

<footer>

<div>
    <h5>Contact</h5>
    <p><a href="tel:+33685849213">06 85 84 92 13</a></p>
    <p><a href="mailto:burkinabiiga1@gmail.com">burkinabiiga1@gmail.com</a></p>
</div>

<div>
    <h5>Siège</h5>
    <p>87 Allée du Hameau des dames</p>
    <p>30650 Rochefort du Gard</p>
</div>

<div class="icons">
    <p><a href="https://www.facebook.com/BurkinaBiiga2/"><img src="{{ url('assets/images/fb.svg') }}" alt="Icone Facebook"></a><a href="https://www.instagram.com/burkina_biiga/"><img src="{{ url('assets/images/inst.svg') }}" alt="Icone Instagram"></a></p>
</div>

<div class="none">
    <p>&#x000A9; <?= date('Y'); ?></p>
    <p>Développé par <a href="mailto:pierrem.garcia@gmail.com">Pierre Garcia</a></p>
</div>

</footer>

<script src="{{ url('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('assets/js/popper.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
