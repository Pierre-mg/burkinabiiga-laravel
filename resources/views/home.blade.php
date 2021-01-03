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
        <div class="mobile-off">
            <img src="{{ url('assets/images/home2.JPG') }}" alt="Photo">
        </div>
        <div class="right">
            <p>{!! nl2br($home[1]->content) !!}</p>
        </div>

        <div class="desktop-off">
            <img src="{{ url('assets/images/home2.JPG') }}" alt="Photo">
        </div>

        <div>
            <p>{!! nl2br($home[2]->content) !!}</p>
        </div>
        <div class="right">
            <img src="{{ url('assets/images/home3.JPG') }}" alt="Photo">
        </div>
        <div class="mobile-off">
            <img src="{{ url('assets/images/home4.JPG') }}" alt="Photo">
        </div>
        <div class="right">
            <p>{!! nl2br($home[3]->content) !!}</p>
        </div>

        <div class="desktop-off">
            <img src="{{ url('assets/images/home4.JPG') }}" alt="Photo">
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
    <a href="https://www.leetchi.com/c/burkina-biiga-pour-legalite-filles-et-garcons-a-lecole" target="_blank"><h4>{{ ($homefooter[0]->title) }}</h4></a>
    <p>{!! nl2br($homefooter[0]->content) !!}</p>
</div>

<div>
    <a href="<?= route('join-us'); ?>"><h4>{{ ($homefooter[1]->title) }}</h4></a>
    <p>{!! nl2br($homefooter[1]->content) !!}</p>
</div>

<div class="none">
    <a href="<?= route('actions'); ?>"><h4>{{ ($homefooter[2]->title) }}</h4></a>
    <p>{!! nl2br($homefooter[2]->content) !!}</p>
</div>

</section>

@endsection
