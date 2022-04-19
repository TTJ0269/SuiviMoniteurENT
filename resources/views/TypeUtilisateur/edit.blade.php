@extends('layouts.app')

@section('content')

<h1>Modifier le profil: {{ $type_utilisateur->libelletype }}</h1>
<form action="{{ route('type_utilisateurs.update', ['type_utilisateur' => $type_utilisateur->id]) }}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @include('TypeUtilisateur.form')
    <button type="submit" class="btn btn-primary my-3">Sauvegarder les informations</button>
</form>

@endsection