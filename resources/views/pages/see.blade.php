@extends('layout')

@section('content')

        <?php
            $url = $_SERVER['REQUEST_URI'];

        ?>

        @if (preg_match('#^(/movies/see/)[0-9]+$#', $url))

            <a href="{{route('list_movies')}}" class="seemore">Back to list movies</a>





            {{--C'est cool GIT --}}
            @if(!empty($result))
                <div class="see">
                    <div>TEST</div>
                    <h1> {{$result->title}} </h1>
                    <div class="image">
                        <img src="{{$result->image}}" />
                    </div>
                    <p> {!! $result->synopsis !!} </p>
                    <p> {!! $result->trailer !!} </p>
                </div>
            @else
                <p>THE FILM YOU ARE SEARCHING FOR DOESN'T EXIST</p>
            @endif

        @elseif($url == '/actors/see')
            <p>YOU ARE SEEING THE ACTOR: {{$id}}</p>

        @elseif($url == '/directors/see')
            <p>YOU ARE SEEING THE DIRECTOR: {{$id}}</p>

        @elseif($url == '/categories/see')
            <p>YOU ARE SEEING THE CATEGORY: {{$id}}</p>

        @endif

@endsection