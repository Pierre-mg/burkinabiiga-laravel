<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="{{ url('assets/images/logo.png') }}" />

    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <title>Burkina Biiga</title>
</head>
<body>

<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}"><img class="logo" src="{{ url('assets/images/logo.png') }}" alt="Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}"><h5>Accueil</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('association')}}"><h5>Association</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('egality')}}"><h5>Égalité fille / garçon</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('actions')}}"><h5>Nos actions</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('actualities')}}"><h5>Actualités</h5></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Plus
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('join-us')}}"><h5>Nous rejoindre</h5></a>
          <a class="dropdown-item" href="{{route('donation')}}"><h5>Faire un don</h5></a>
        </div>
    </ul>
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
    <p><a href="https://www.facebook.com/BurkinaBiiga2/" target="_blank"><img src="{{ url('assets/images/fb.svg') }}" alt="Icone Facebook"></a><a href="https://www.instagram.com/burkina_biiga/" target="_blank"><img src="{{ url('assets/images/inst.svg') }}" alt="Icone Instagram"></a></p>
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
