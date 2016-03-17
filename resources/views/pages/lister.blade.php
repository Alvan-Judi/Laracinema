@extends('layout')

@section('content')

        <?php $url = $_SERVER['REQUEST_URI'] ; ?>

        @if($url == '/movies/lister' || preg_match('#^\/movies\/lister\?page=[0-9]+#', $url))
            <section id="content" class="table-layout">
        <div id="content-fiche">




            <p class="paginate text-center">
              <?= $paginate->apply($prepare['current'], $prepare['nbPages'])?>
            </p>

            <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                <thead>
                <tr class="bg-light">
                    <th class="text-center">Id</th>
                    <th class="">Favorite</th>
                    <th class="">Title</th>
                    <th class="">Jacket</th>
                    <th class="">Synopsis</th>
                    <th class="">Distrib</th>
                    <th class="">Note</th>
                    <th class="text-right">Action</th>

                </tr>
                </thead>
                <tbody>

            @foreach($prepare['results'] as $result)


                    <tr>
                        <td class="text-center">{{$result->id}}</td>
                        <td class="text-center"><a href="{{route('movies_cart', ['id' => $result->id])}}" class="favorite @if(array_key_exists($result->id, session('movies_id', [])))text-danger @else text-muted @endif" data-id="{{$result->id}}"><span class="fa fa-heart"></span></a></td>
                        <td class=""><a href="{{route('see_movies',['id' => $result->id])}}">{{$result->title}}</a></td>
                        <td class="w100">
                            <img class="img-responsive mw40 ib mr10" title="img" src="{{$result->image}}">
                        </td>
                        <td class="">{{ substr($result->synopsis, 0, 150)}}</td>
                        <td class="">{{$result->distributeur}}</td>
                        <td class="">{{$result->note_presse}}</td>
                        <td class="text-right">
                            <div class="btn-group text-right">
                                <a style="width: 100%" class="btn btn-warning br2 btn-xs fs12 " href="{{route('edit_movies',['id' => $result->id])}}">Edit</a>
                                <a style="width: 100%" class="btn btn-danger br2 btn-xs fs12 " href="{{route('remove_movies',['id' => $result->id])}}">Delete</a>

                            </div>
                        </td>
                    </tr>

            @endforeach

                </tbody>
            </table>


            <p class="paginate text-center">
                <?= $paginate->apply($prepare['current'], $prepare['nbPages']);?>
            </p>
        </div>
            </section>
        @elseif($url == '/actors/lister')
            LIST ACTORS

        @elseif($url == '/directors/lister')
            LIST DIRECTORS

        @elseif($url == '/categories/lister')
            LIST CATEGORIES
        @endif

@endsection


