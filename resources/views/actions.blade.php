@extends('layouts.app')

@section('content')

<section class="association">

<blockquote class="blockquote text-center">
  <p class="mb-0">"Toute personne a droit à l'éducation. L'éducation doit être gratuite, au moins en ce qui concerne l'enseignement élémentaire et fondamental. L'enseignement élémentaire est obligatoire"</p>
  <footer class="blockquote-footer"><cite title="Source Title">Déclaration Universelle des Droits de l'Homme, 1948, Paris </cite></footer>
</blockquote>

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h3>{{ $actions[0]->title }}</h3>

    <p>{!! nl2br($actions[0]->content) !!}</p>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

<div class="imgAssociation">
    <img src="{{ url('assets/images/action1.jpg') }}" alt="Photo">
</div>

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h3>{{ $actions[1]->title }}</h3>

    <p>{!! nl2br($actions[1]->content) !!}</p>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

<div class="imgAssociation">
    <img src="{{ url('assets/images/action2.jpg') }}" alt="Photo">
</div>

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h3>{{ $actions[2]->title }}</h3>

    <p>{!! nl2br($actions[2]->content) !!}</p>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>


</section>

@endsection
