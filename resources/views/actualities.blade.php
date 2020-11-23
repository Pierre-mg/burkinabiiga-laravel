@extends('layouts.app')

@section('content')

<section class="actualities">

<div class="imgAssociation">
    <img src="{{ url('assets/images/actu1.jpg') }}" alt="Photo">
</div>

<div class="div">

@foreach ($actualities as $actuality)
<div class="cross">
    <div class="first right"></div>
    <div class="first"></div>
    <div class="right"></div>
    <div></div>
</div>

<p>{{ date("m/Y", strtotime($actuality->date)) }}</p>
<p>{{ $actuality->place }}</p>
<p>{!! nl2br($actuality->content) !!}</p>

@endforeach
</div>

<div class="imgAssociation">
    <img src="{{ url('assets/images/actu2.jpg') }}" alt="Photo">
</div>

</section>

@endsection
