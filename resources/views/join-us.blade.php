@extends('layouts.app')

@section('content')

<section class="joinUs">

<div class="first">
    <h1>Rejoignez-nous</h1>
    <h2>Vous pouvez nous aider ! N'hésitez pas à nous contacter !</h2>
</div>

<div class="block">
    <div class="bottom">
        <h3>{{ $join[0]->title }}</h3>
        <p>{!! nl2br($join[0]->content) !!}</p>
    </div>
    <div class="right bottom">
        <h3>{{ $join[1]->title }}</h3>
        <p>{!! nl2br($join[1]->content) !!}</p>
    </div>
    <div>
        <h3>{{ $join[2]->title }}</h3>
        <p>{!! nl2br($join[2]->content) !!}</p>
    </div>
    <div class="right">
        <h3>{{ $join[3]->title }}</h3>
        <p>{!! nl2br($join[03]->content) !!}</p>
    </div>
</div>

</section>

@endsection
