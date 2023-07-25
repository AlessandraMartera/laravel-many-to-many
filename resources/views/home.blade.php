@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        Questi sono i miei bellissimi progetti
    </div>

    <div class="container">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, earum esse! Placeat ea ipsum distinctio totam
            ullam, magni dolor voluptatem ipsa aspernatur quos eos expedita esse illum, non eum maxime!Asperiores
            repudiandae quis sequi cum labore illum, et vel blanditiis laudantium dolorem earum dolorum eligendi,
            praesentium architecto magni optio voluptatibus laboriosam ipsam veniam? Minus fuga eligendi assumenda fugit?
            Aspernatur, unde!
        </p>

        <div>


            <p>
                clicca sul nome del progetto per vederne in dettagli
            </p>

            <p>
                <a href="">
                    clicca qui per aggiungere un nuovo progetto
                </a>
            </p>

            @foreach ($projects as $project)
                <div class="card m-2 p-3">
                    <h2>
                        <a href="{{ route('show', $project->id) }}">{{ $project['name'] }}</a>
                    </h2>
                    <br>
                    <div>

                        {{ $project->decription }}

                    </div>

                </div>
            @endforeach

        </div>


    </div>
@endsection
