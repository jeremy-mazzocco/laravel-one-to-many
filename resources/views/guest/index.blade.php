@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>HOME PAGE</h1>
    </div>
    <div class="text-center">
        <ul>
            @foreach ($projects as $project)
                <a href="{{ route('logged.show', $project->id) }}">
                    <li>
                        <b>Name Project: </b>{{ $project->title }} <br>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
