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
                        {{-- {{ Auth::user()->name }} sta guardando --}}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="badge text-bg-info">
                            <a href="{{ route('home') }}">torna alla home</a>
                        </div>

                        <h1>
                            {{ $technology->name }}
                        </h1>
                        <p>
                            {{ $technology->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
