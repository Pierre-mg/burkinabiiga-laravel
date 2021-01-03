@extends('layouts.app')

@section('content')

<section class="association">

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h1>{{ $association[0]->title }}</h1>
    <p>{!! nl2br($association[0]->content) !!}</p>

    <h3>{{ $association[1]->title }}</h3>
    <p>{!! nl2br($association[1]->content) !!}</p>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

<div class="imgAssociation">
    <img src="{{ url('assets/images/assoc1.jpg') }}" alt="Photo">
</div>

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>


<div>
    <?php for($i = 2; $i <= 5; $i++) :  ?>
    <h3>{{ $association[$i]->title }}</h3>
    <p>{!! nl2br($association[$i]->content) !!}</p>
    <?php endfor;  ?>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

<div class="imgAssociation">
    <img src="{{ url('assets/images/asso2.jpg') }}" alt="Photo">
</div>

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>

<div>
    <h3>{{ $association[6]->title }}</h3>
    <p>{!! nl2br($association[6]->content) !!}</p>
</div>

<div class="line">
    <div></div>
    <div class="none"></div>
</div>

<div class="imgAssociation">
    <img src="{{ url('assets/images/assoc3.JPG') }}" alt="Photo">
</div>

<div class="line-top">
    <div></div>
    <div class="none"></div>
</div>


<div>
  <h2>Notre équipe</h2>
<div  class="team">
    <div>
        <h3>{{ $associationteam[0]->name }}</h3>
        <p>{!! nl2br($associationteam[0]->content) !!}</p>
        <p>{{ $associationteam[0]->tel }}</p>
        <p>{{ $associationteam[0]->email }}</p>
    </div>

    <div>
        <h3>{{ $associationteam[1]->name }}</h3>
        <p>{!! nl2br($associationteam[1]->content) !!}</p>
        <p>{{ $associationteam[1]->tel }}</p>
        <p>{{ $associationteam[1]->email }}</p>
    </div>

    <div class="none">
        <h3>{{ $associationteam[2]->name }}</h3>
        <p>{!! nl2br($associationteam[2]->content) !!}</p>
        <p>{{ $associationteam[2]->tel }}</p>
        <p>{{ $associationteam[2]->email }}</p>
    </div>
</div>
    <h3 class="center">Et une armée de bénévoles super motivé.e.s</h3>
</div>

</section>

@endsection
