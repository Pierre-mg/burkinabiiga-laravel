@extends('layouts.admin')

@section('content')

<section class="adminConnect">

<div>

        @if (isset($error))
        <li>{{ $error }}</li>
        @endif


    <form action="{{ route('adminLogInForm')}}" method="post" class="section">
        {{ csrf_field() }}

        <div class="form-group">
           <label for="label">Adresse e-mail</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
            @if($errors->has('email'))
            <small id="emailHelp" class="form-text text-muted">{{ $errors->first('email') }}</small>
             @endif
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
             @if($errors->has('password'))
            <small id="emailHelp" class="form-text text-muted">{{ $errors->first('password') }}</small>
             @endif
        </div>

        <button type="submit" class="btn btn-dark">Se connecter</button>
    </form>
</div>
</section>


@endsection
