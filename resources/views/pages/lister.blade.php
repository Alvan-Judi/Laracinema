@extends('layout')

@section('content')

        <?php $url = $_SERVER['REQUEST_URI'] ; ?>

        @if($url == '/movies/lister' || preg_match('#^\/movies\/lister\?page=[0-9]+#', $url))


            <p class="paginate">
              <?= $paginate->apply($prepare['current'], $prepare['nbPages'])?>
            </p>

            @foreach($prepare['results'] as $result)
                <div class="fiche">
                    <div class="image">
                        <img src="{{$result->image}}" />
                    </div>
                    <div class="fiche_text">
                        <h1> {{$result->title}} </h1>


                        <p> {!! substr($result->synopsis, 0, 180) !!} [...] </p>
                        <p><a href="{{route('see_movies', ["id" => $result->id])}}" class="seemore">See more ...</a></p>
                        <p class="align-right">
                            <a href="{{route('edit_movies_id',["id" => $result->id])}}" class="orange">Editer</a>
                            <a href="{{route('remove_movies',["id" => $result->id])}}" class="red">Supprimer</a>
                        </p>
                    </div>
                </div>
            @endforeach

            <p class="paginate">
                <?= $paginate->apply($prepare['current'], $prepare['nbPages']);?>
            </p>

        @elseif($url == '/actors/lister')
            LIST ACTORS

        @elseif($url == '/directors/lister')
            LIST DIRECTORS

        @elseif($url == '/categories/lister')
            LIST CATEGORIES
        @endif

@endsection


