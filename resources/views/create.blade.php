@extends('layout')

@section('title')
    {{ $title }}
@endsection
@section('menu')
    <a href="{{ action('CompetenceController@index') }}" class="lien">Voir Compétences</a>
@endsection
@section('content')
    <div class="container-fluid">
        <section>
            <div class="logo">
                <h1 class="text-center">De Quoi Etes Vous Capable?</h1><br/>
                <form action="{{url('competences')}}" method="post" id="framework_form">
                    @csrf
                    <div class="form-group text-center">
                        <select id="framework" name="framework[]" multiple class="form-control" >
                            <option value="HTML5">HTML5</option>
                            <option value="CSS3">CSS3</option>
                            <option value="SASS">SASS</option>
                            <option value="Bootstrap">Bootstrap</option>
                            <option value="PHP">PHP</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Java">Java</option>
                            <option value="Java EE">Java EE</option>
                            <option value="Laravel">Laravel</option>
                            <option value="Symfony">Symfony</option>
                            <option value="Angular">Angular</option>
                            <option value="Ionic">Ionic</option>
                            <option value="Electron">Electron</option>
                            <option value="Node.js">Node.js</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success center-block">Ajouter</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
