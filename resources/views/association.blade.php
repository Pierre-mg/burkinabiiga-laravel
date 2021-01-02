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
        <h3>Léa Robert</h3>
        <p>Présidente de l'association, elle est également en charge de la communication et de la gestion des projets.</p>
        <p><a href="tel:+33685849213">Tél : 06 85 84 92 13</a>
        <a href="mailto:burkinabiiga1@gmail.com">burkinabiiga1@gmail.com</a></p>
    </div>

    <div>
        <h3>Julien Pellet</h3>
        <p>Vice-président de l'association, il s'occupe également du pôle trésorerie et des partenariats.</p>
        <p><a href="tel:+33640739860">Tél : 06 40 73 98 60</a></p>
    </div>

    <div class="none">
        <h3>Lambert Sawadogo</h3>
        <p>Lambert est notre intermédiaire sur place et nous aide également dans la gestion des projets.</p>
    </div>
</div>
    <h3 class="center">Et une armée de bénévoles super motivé.e.s</h3>
</div>

</section>

@endsection
