@extends('layouts.app')

@section('content')

<section class="association">

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h2>Dons financiers</h2>

    <p>Afin de financer les nombreux envois de matériel, nous avons décidé de réaliser une collecte de fonds sur internet "crowdfunding". En effet l'envoi d'un colis d'une centaine de kilos au Burkina Faso coûte plus de 600 euros, sachant que nous optons pour un transport maritime qui est bien plus long que le transport aérien mais la solution la moins chère.</p>

    <p>Ayant déjà reçu plus de 300 kilogrammes de manuels scolaires en moins de deux mois et espérant continuer sur cette voie,  nous avons calculé que pour faire une dizaine d'envois il nous faudrait un budget de 10 000 euros.</p>

    <div class="a"><a href="https://www.leetchi.com/c/burkina-biiga-pour-legalite-filles-et-garcons-a-lecole" target="_blank">Dons</a></div>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

<div class="imgAssociation">
    <img src="{{ url('assets/images/donation1.JPG') }}" alt="Photo">
</div>

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>


<div>
    <h2>Dons de matériel</h2>

    <p>Afin d'accompagner M. Sawadogo dans sa mission nous lui envoyons des fournitures scolaires afin qu'il puisse améliorer les conditions d'éducation des enfants vivants à Kaya. Mais pour réaliser ces envois nous avons besoin de ces fournitures. Et c'est vous qui les avez ! Nous avons tous au fond de nos placards gardé des stylos, des cahiers à peine entamés, des livres que l'on a oublié de rapporter. Vous avez l'opportunité de leur donner une seconde vie en nous les donnant.</p>

    <h4>Contactez-nous !</h4>

    <div class="a"><a href="{{ route('join-us') }}">Rejoignez-nous</a></div>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

</section>

@endsection
