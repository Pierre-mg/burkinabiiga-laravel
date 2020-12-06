@extends('layouts.app')

@section('content')

<section class="association">

<div class="imgAssociation">
    <img src="{{ url('assets/images/egality1.jpg') }}" alt="Photo">
</div>


<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h1>Cap vers l'égalité</h1>

    <h3>{{$egality[0]->title}}</h3>

    <p>{!! nl2br($egality[0]->content) !!}</p>
    <p><a href="https://www.plan-international.fr/info/actualites/news/2016-09-23-causes-et-consequences-des-inegalites-des-filles-face-leducation?fbclid=IwAR2_UVYD9n9fFSF0AMizl87j5zoeWfv9DyrWo7efp2bbwhuuPT6ixi8iDPA" target="_blank">Article de plan-international</a></p>

</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

<div class="imgAssociation">
    <img src="{{ url('assets/images/egality2.jpg') }}" alt="Photo">
</div>

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h3>{{$egality[1]->title}}</h3>

    <p>{!! nl2br($egality[1]->content) !!}</p>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

<div class="imgAssociation">
    <img src="{{ url('assets/images/egality3.JPG') }}" alt="Photo">
</div>

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h3>{{$egality[2]->title}}</h3>

    <p>{!! nl2br($egality[2]->content) !!}</p>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

<div class="imgAssociation">
    <img src="{{ url('assets/images/egality4.JPG') }}" alt="Photo">
</div>

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h3>{{$egality[3]->title}}</h3>

    <p>{!! nl2br($egality[3]->content) !!}</p>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

</section>

@endsection
