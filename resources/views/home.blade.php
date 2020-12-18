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
            <p>{!! nl2br($home[0]->content) !!}</p>
        </div>
        <div class="right">
            <img src="{{ url('assets/images/home1.JPG') }}" alt="Photo">
        </div>
        <div>
        <img src="{{ url('assets/images/home2.JPG') }}" alt="Photo">
        </div>
        <div class="right">
            <p>{!! nl2br($home[1]->content) !!}</p>
        </div>

        <div>
            <p>{!! nl2br($home[2]->content) !!}</p>
        </div>
        <div class="right">
            <img src="{{ url('assets/images/home3.JPG') }}" alt="Photo">
        </div>
        <div>
            <img src="{{ url('assets/images/home4.JPG') }}" alt="Photo">
        </div>
        <div class="right">
            <p>{!! nl2br($home[3]->content) !!}</p>
        </div>


        <div>
            <p>{!! nl2br($home[4]->content) !!}</p>
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
