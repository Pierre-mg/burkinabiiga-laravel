@extends('layouts.app')

@section('content')

<section class="association">

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h2>{{ $donation[0]->title }}</h2>
    <p>{!! nl2br($donation[0]->content) !!}</p>

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
    <h2>{{ $donation[1]->title }}</h2>
    <p>{!! nl2br($donation[1]->content) !!}</p>

    <div class="a"><a href="{{ route('join-us') }}">Rejoignez-nous</a></div>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

</section>

@endsection
