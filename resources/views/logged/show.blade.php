@extends('layouts.app')

@section('content')
    <div class="container text-center">

        <h1>This is the logged page!</h1>
        <ul>
            <li>
                <b>Languages: </b>{{ $projects->languages }} <br>
                <b>Collaborators: </b>{{ $projects->collaborators }} <br>
                <b>Finish Date: </b>{{ $projects->date_finished }} <br>
            </li>
        </ul>
    </div>
@endsection
