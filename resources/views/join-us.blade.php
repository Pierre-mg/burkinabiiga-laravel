@extends('layouts.app')

@section('content')

<section class="joinUs">

<div class="first">
    <h1>Rejoignez-nous</h1>
    <h2>Vous pouvez nous aider ! N'hésitez pas à nous contacter !</h2>
</div>

<div class="block">
    <div class="bottom">
        <h3>Professionnels</h3>
        <p>Vous avez une entreprise et vous voulez faire une action solidaire ?</p>
        <p>Vous pouvez nous aider ! Afin d'envoyer les colis au Burkina Faso nous avons besoin de fonds, bien sûr ces derniers sont récompensés par des contreparties (communication). C'est le principe de crowdfunding, pour participer, rendez-vous <a href="https://www.leetchi.com/c/burkina-biiga-pour-legalite-filles-et-garcons-a-lecole" target="_blank">ICI</a></p>
        <h4>Projet</h4>
        <p>Vous pensez que nos initiatives peuvent intéresser votre établissement ou votre entreprise ? Contactez-nous pour organiser une collecte ou une action flash</p>
    </div>
    <div class="right bottom">
        <h3>Médias</h3>
        <p>Nos initiatives vous intéressent ? </p>
        <p>Parlez de nous ! Publiez-nous ! Contactez-nous ! Nous sommes ouverts à toutes publications.</p>
    </div>
    <div>
        <h3>Établissements scolaires</h3>
        <p>Du matériel scolaire en trop ou à l'abandon ?</p>
        <p>Avec la réforme du baccalaureat et des programmes, des milliers de livres ont été changé, nous vous les récupérons ! Contactez-nous nous pouvons organiser une récolte ou un transfert afin que ces manuels aient une nouvelle vie.</p>
    </div>
    <div class="right">
        <h3>Particuliers</h3>
        <h4>Dons</h4>
        <p>Chaque don compte ! Vous pouvez nous soutenir à hauteur de vos moyens ! Rendez-vous sur notre crowdfunding : <a href="https://www.leetchi.com/c/burkina-biiga-pour-legalite-filles-et-garcons-a-lecole" target="_blank">ICI</a>
        </p>
        <p>Vous pouvez également faire des dons de matériel : on a tous gardé des dizaines de stylos, trousses et cahiers de notre scolarité.</p>
        <h4>Partage</h4>
        <p>Parlez de nous autour de vous, suivez-nous sur les réseaux sociaux, partagez nos pages !</p>
    </div>
</div>
{{--
<div>
    <form action="{{ route('contact')}}" method="POST" novalidate>
        <h3>Contactez-nous</h3>
        {{ csrf_field()}}
    <div class="form-group">
        <label for="lastname">Nom</label>
        <input type="text" class="form-control" id="lastname" placeholder="Nom..." name="lastname" required>
    </div>
    <div class="form-group">
        <label for="firstname">Prénom</label>
        <input type="text" class="form-control" id="firstname" placeholder="Prénom..." name="firstname" required>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="email@exemple.com" name="email" required>
    </div>
    <div class="form-group">
        <label for="content">Message</label>
        <textarea class="form-control" id="content" rows="6" name="content" placeholder="Votre message ici..."></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-dark">Envoyer</button>
    </div>

    </form>
</div> --}}


</section>

@endsection
