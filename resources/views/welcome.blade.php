@extends('layout')

@section('title')
    Accueil
@endsection
@section('menu')
    <a href="{{ action('CompetenceController@create') }}" class="lien">Ajouter Compétence(s)</a><br/>
    <a href="{{ action('CompetenceController@index') }}" class="lien">Voir Compétences</a>
@endsection
@section('content')
    <div class="logo">
        <section>
            <img src="images/logo.jpg" class="center-block"/><br/>
            <a href="{{ action('CompetenceController@create') }}" class="btn btn-primary center-block btn-logo"><span class="text-btn">Cliquez Ici</span></a>
        </section>
    </div>
@endsection