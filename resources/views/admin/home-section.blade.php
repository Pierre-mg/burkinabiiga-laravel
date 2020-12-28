@extends('layouts.admin')

@section('content')

<section class="adminActualities">

    <div class="container my-4">
        <a href="{{route('adminHomeModify')}}" class="btn btn-dark float-right">Retour</a>
        <h4>Section sélectionnée</h4>
                <form action="{{route('adminHomeSectionEdit', ['id' => $home->id])}}" method="POST">
                {{ csrf_field() }}
                     <div class="form-group">
                        <label for="content">Contenu</label>
                        <textarea class="form-control" id="content" name="content" rows="10">{{$home->content}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                </form>
    </div>

</section>


@endsection
