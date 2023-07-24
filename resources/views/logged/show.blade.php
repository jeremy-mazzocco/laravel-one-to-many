@extends('layouts.app')

@section('content')
    <div class="container text-center">

        <h1>SHOW PAGE</h1>
        <ul>
            <li>
                <b>Tilte: </b>{{ $projects->title }} <br>
                <b>Collaborators: </b>{{ $projects->collaborators }} <br>
                <b>Finish Date: </b>{{ $projects->date_finished }} <br>
            </li>
        </ul>
    </div>
@endsection
