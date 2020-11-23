@extends('layouts.admin')

@section('content')

<section class="adminActualities">

    <div class="container my-4">
        <a href="{{route('adminActualities')}}" class="btn btn-dark float-right">Retour</a>
        <h4>Actualité sélectionnée</h4>
                <form action="{{route('adminActualitiesSectionEdit', ['id' => $actualities->id])}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ $actualities->date }}">
                    </div>
                    <div class="form-group">
                        <label for="place">Lieu</label>
                        <input type="place" class="form-control" id="place" name="place" value="{{ $actualities->place }}">
                    </div>
                     <div class="form-group">
                        <label for="content">Contenu</label>
                        <textarea class="form-control" id="content" name="content" rows="20">{{$actualities->content}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                </form>
    </div>

</section>


@endsection
