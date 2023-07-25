@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        {{ Auth::user()->name }} sta guardando
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>
                            questo è il mio progetto:
                        </h1>
                        <div class="badge text-bg-info">
                            <a href="{{ route('home') }}">torna alla home</a>
                        </div>


                        <div>
                            <div>
                                <h2>{{ $project['name'] }}</h2>
                                @if ($project['completed'])
                                    <div class="badge text-bg-success">
                                        completato
                                    </div>
                                @else
                                    <div class="badge text-bg-warning">
                                        in corso...
                                    </div>
                                @endif
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    proettato per: <h4>{{ $project['agency'] }}</h4>
                                </div>

                                <div class="card-body">
                                    <h3>questo progetto di occupa di:</h3>
                                    <p>{{ $project['decription'] }}</p>
                                </div>

                            </div>

                            <br>
                            <br>
                            publicato in data *americana* {{ $project['publish_date'] }}


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
