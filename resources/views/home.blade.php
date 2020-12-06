@extends('layouts.app')

@section('content')

<section class="homeFirst">

<div class="title">
    <h1>Bienvenue sur le site de Burkina Biiga</h1>
</div>

<h3>Aller à l'école est le droit de toutes et tous.</h3>


</section>


<section class="homeSecond">

        <div>
            <p>Née d’une rencontre entre Julien Pellet, Léa Robert et l’Abbé de la région de Kaya, Burkina Biiga est une association humanitaire à but non lucratif.</p>
        </div>
        <div class="right">
            <img src="{{ url('assets/images/home1.JPG') }}" alt="Photo">
        </div>
        <div>
        <img src="{{ url('assets/images/home2.JPG') }}" alt="Photo">
        </div>
        <div class="right">
            <p>Elle a deux objectifs principaux :
                <ul>
                    <li>Apporter une aide matérielle à des écoles de la ville de Kaya</li>
                    <li>Garantir et promouvoir l'égalité filles garçons au sein de l'éducation</li>
                </ul>
            </p>
        </div>

        <div>
            <p>La région nord du Burkina Faso a subit ces dernières années de nombreuses attaques terroristes contre des églises, des mosquées et des écoles, donnant lieu à la déscolarisation de milliers d’enfants, une crise sanitaire et des migrations de plus en plus importantes. Une des premières villes touchées par ces phénomènes est Kaya.</p>
        </div>
        <div class="right">
            <img src="{{ url('assets/images/home3.JPG') }}" alt="Photo">
        </div>
        <div>
            <img src="{{ url('assets/images/home4.JPG') }}" alt="Photo">
        </div>
        <div class="right">
            <p>Il est important pour nous de préciser que les filles sont les premières touchées par ces crises et leur éducation en est fortement impactée.</p>
        </div>


        <div>
            <p>Cette association a donc pour but de monter des projets visant à aider l’abbé dans sa nouvelle mission de directeur des écoles de Kaya et ainsi remplir nos deux objectifs.</p>
        </div>

        <div class="right">
            <img src="{{ url('assets/images/home5.jpg') }}" alt="Photo">
        </div>

</section>


<section class="homeThird">


<div>
    <a href="https://www.leetchi.com/c/burkina-biiga-pour-legalite-filles-et-garcons-a-lecole" target="_blank"><h4>Dons</h4></a>
    <p>Chacun de vos dons compte :
        <ul>
            <li>Don fiancier</li>
            <li>Don matériel</li>
        </ul>
    </p>
</div>

<div>
    <a href="<?= route('join-us'); ?>"><h4>Rejoignez-nous</h4></a>
    <p><ul>
        <li>Participation aux collectes de matériel</li>
        <li>Parlez de nous !</li>
        <li>Rejoignez nous sur les réseaux-sociaux </li>
    </ul></p>
</div>

<div class="none">
    <a href="<?= route('actions'); ?>"><h4>Mission</h4></a>
    <p>Récolter du matériel scolaire afin de l'envoyer à Kaya au Burkina Faso</p>
    <p>Promouvoir l'égalité filles garçons à l'école</p>
</div>

</section>

@endsection
