@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>This is the guest page!</h1>
    </div>
    <div class="text-center">
        <ul>
            @foreach ($projects as $p)
                <a href="{{ route('logged.show', $p->id) }}">
                    <li>
                        <b>Name Project: </b>{{ $p->name }} <br>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
