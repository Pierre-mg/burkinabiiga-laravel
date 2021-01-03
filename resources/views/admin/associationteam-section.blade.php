@extends('layouts.admin')

@section('content')

<section class="adminEgality">

    <div class="container my-4">
        <a href="{{route('adminAssociationteam')}}" class="btn btn-dark float-right">Retour</a>
        <h4>Section n°{{$associationteam->id}}</h4>
                <form action="{{route('adminAssociationteamSectionEdit', ['id' => $associationteam->id])}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$associationteam->name}}">
                    </div>
                     <div class="form-group">
                        <label for="content">Contenu</label>
                        <textarea class="form-control" id="content" name="content" rows="10">{{$associationteam->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="tel">Téléphone</label>
                        <input type="text" class="form-control" id="tel" name="tel" value="{{$associationteam->tel}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$associationteam->email}}">
                    </div>
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                </form>
    </div>

</section>


@endsection
