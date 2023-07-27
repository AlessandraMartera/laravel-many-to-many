@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        Questi sono i progetti più popolari della nostra azienda
    </div>

    <div class="container">

        <div>


            <p>
                clicca sul nome del progetto per vederne in dettagli
            </p>

            <p>
                <a href="{{ route('create-project') }}">
                    clicca qui per aggiungere un nuovo progetto
                </a>
            </p>

            @foreach ($projects as $project)
                <div class="card m-2 p-3">
                    <div>
                        <h2>
                            <a href="{{ route('show', $project->id) }}">{{ $project['name'] }}</a>
                        </h2>
                        <br>
                        <div>

                            {{ $project->decription }}

                        </div>
                    </div>
                    <div>
                        <form method="post" action="{{ route('delete-project', $project->id) }}">
                            @csrf
                            @method('DELETE')

                            <input type="submit" value="X">
                        </form>

                    </div>


                </div>
            @endforeach

        </div>


    </div>
@endsection
