@extends('layouts.admin')

@section('content')

<section class="adminEgality">

    <div class="container my-4">
        <a href="{{route('adminJoinUs')}}" class="btn btn-dark float-right">Retour</a>
        <h4>Section n°{{$joinUs->id}}</h4>
                <form action="{{route('adminJoinUsSectionEdit', ['id' => $joinUs->id])}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$joinUs->title}}">
                    </div>
                     <div class="form-group">
                        <label for="content">Contenu</label>
                        <textarea class="form-control" id="content" name="content" rows="20">{{$joinUs->content}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                </form>
    </div>

</section>


@endsection
