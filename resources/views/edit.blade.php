@extends('../layout')

@section('title')
    {{ $title }}
@endsection
@section('menu')
    <a href="{{ action('CompetenceController@create') }}" class="lien">Ajouter Compétence(s)</a>
@endsection
@section('content')
    <div class="container-fluid">
        <section>
            <div class="logo">
                <h1 class="text-center">Voulez-vous<br/>Modifier Une Compétence?</h1><br/>
                <form action="{{ action('CompetenceController@update', $id) }}" method="POST" id="framework_form">
                    @csrf
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="form-group text-center">
                        <select id="framework" name="framework" class="form-control" >
                            <option value="{{ $competence->libelle }}">{{ $competence->libelle }}</option>
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
                        <input type="submit" class="btn btn-success center-block" name="submit" value="Modifier" />
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
