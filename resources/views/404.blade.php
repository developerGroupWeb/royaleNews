@extends('templates.template')

@section('content')
    @include('templates.nav')

    <h2><strong>Error 404</strong></h2>
    <div class="alert-danger alert">Page non trouvée</div>
    <em>L'adresse a été saisie de manière erronée ou la page recherchée a été déplacée, mise à jour ou effacée.</em>

@stop