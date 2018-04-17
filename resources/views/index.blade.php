@extends('layout')

@section('title')
    {{ $title }}
@endsection
@section('menu')
    <a href="{{ action('CompetenceController@create') }}" class="lien">Ajouter Compétence(s)</a>
@endsection
@section('content')
@if (Session::has('success'))
    <div class="alert alert-success">
        <p>{{ Session::get('success') }}</p>
    </div><br />
@endif
<div>
    <h1>Vos Compétences!</h1>
</div>
<div>
    <div class="col-xs-12 col-md-8 table-responsive" style="margin-top:20px;">
        <table class="table table-bordered table-condesed table-body-center text-center">
    <thead>
    <tr>
        <th>N°</th>
        <th>Compétences</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($competences as $competence)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $competence->libelle }}</td>
            <td><a href="{{ action('CompetenceController@edit', $competence->id) }}" class="btn btn-info">Modifier</a></td>
            <td>
                <form action="{{ action('CompetenceController@destroy', $competence->id) }}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
</div>
@endsection
