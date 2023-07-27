@extends('layouts.app')
@section('content')
    <div class="container my-5">
        {{-- <form method="POST" action="{{ route('store-projects'), $project->id }}"> --}}
        @csrf
        @method('PUT')

        <label for="name">name</label>
        <input type="text" name="name" id="name" value="{{ $project->name }}">
        <br>
        <br>
        <label for="agency">agency</label>
        <input type="text" name="agency" id="agency" value="{{ $project->agency }}">
        <br>
        <br>
        <label for="decription">decription</label>
        <input type="text" name="decription" id="decription" value="{{ $project->decription }}">
        <br>
        <br>
        <label for="publish_date">publish_date</label>
        <input type="date" name="publish_date" id="publish_date" value="{{ $project->publish_date }}">
        <br>
        <br>

        {{-- SELECTED TYPE --}}
        <label for="type_id">linguaggio utilizzato</label>
        <select name="type_id" id="type_id">
            @foreach ($types as $type)
                <option value="{{ $type->id }}" @selected($type->id === $project->type_id)> {{ $type->language }}</option>
            @endforeach
        </select>

        <br>
        <br>

        {{-- TECHNOLOGY CHECKBOX --}}
        <div>
            <h6>tecnologie utilizzate: </h6>
            @foreach ($technologies as $technology)
                <input type="checkbox" name="technology_id[]" value={{ $technology->id }}
                    @foreach ($project->technologies as $tecproject)
                        @if ($tecproject->id === $technology->id)
                            checked
                        @endif @endforeach>
                <label for="technology_id">{{ $technology->name }}</label>
                <br>
            @endforeach

        </div>


        <br>
        <br>

        <span>completato: </span>
        <label for="completed-true">completed</label>
        <input type="radio" name="completed" id="completed-true" value="1">
        <label for="completed-false">in progress</label>
        <input type="radio" name="completed" id="completed-fale" value="0">
        <br>
        <br>
        <input type="submit" value="CREA">

        </form>
    </div>
@endsection
