@extends('layout')

@section('content')
        <?php $url = $_SERVER['REQUEST_URI'] ; ?>


        @if($url == '/movies/edit')
            <h1>WHICH MOVIE DO YOU WANNA EDIT ?</h1>
            <table>
                @foreach($results as $result)
                    <tr>
                        <td>{{$result->title}}</td>
                        <td><a href="edit/{{$result->id}}">Edit</a></td>
                        <td><a href="edit/remove/{{$result->id}}" class="remove">X</a></td>
                    </tr>
                @endforeach
            </table>

        @elseif(preg_match('#^\/movies\/edit\/[0-9]+#', $url))
            <a href="{{route('edit_movies')}}" class="seemore">Back to list of editable movies</a>
            <?php
            //Previous, next
            $url = explode('/', $url, 4);
            $currentFilmId = $url[3];
            ?>


                  <h1>{{$result->title}}</h1>
                    <form action="{{ route('update', ['id' => $result->id]) }}" method="post">
                        {{ csrf_field() }}
                        <?php $input = array_keys(\App\Movies::first()->toArray()); ?>

                        @for($i=0; $i < count($input); $i++)
                            @if($input[$i] != 'id'&& $input[$i] != 'description' && $input[$i] != 'synopsis' && $input[$i] != 'categories_id')
                                <div class="input-group">
                                    <label for="{{$input[$i]}}">{{ ucfirst(str_replace('_',' ',$input[$i])) }}</label>
                                    <input type="text" name="{{$input[$i]}}" id="{{$input[$i]}}" value="{{$result->$input[$i]}}">
                                </div>
                            @elseif($input[$i] == 'categories_id')

                                <label for="categories_id">Categories</label>
                                <select name="categories_id" id="categories_id">
                                    @foreach($categories as $categorie)
                                        @if($categorie->id == $result->id)
                                            <option value="{{$categorie->id}}" selected>{{$categorie->title}}</option>
                                        @else
                                            <option value="{{$categorie->id}}">{{$categorie->title}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            @elseif($input[$i] == 'description' || $input[$i] == 'synopsis')
                                <div class="input-group">
                                    <label for="{{$input[$i]}}">{{ucfirst($input[$i])}}</label>
                                    <textarea name="{{$input[$i]}}" id="{{$input[$i]}}">{{$result->$input[$i]}}</textarea>
                                </div>
                            @endif
                        @endfor
                        <button type="submit" name="submit">SOUMETTRE</button>
                    </form>



        @elseif($url == '/actors/lister')
            LIST ACTORS

        @elseif($url == '/directors/lister')
            LIST DIRECTORS

        @elseif($url == '/categories/lister')
            LIST CATEGORIES
        @endif
@endsection