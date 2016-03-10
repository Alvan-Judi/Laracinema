@extends('layout')

@section('content')

        <?php $url = $_SERVER['REQUEST_URI'] ; ?>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if($url == '/movies/create')
            <form action="{{route('store')}}" method="post">
                {{ csrf_field() }}
                <?php $input = array_keys(\App\Movies::first()->toArray()); ?>

                @for($i=0; $i < count($input); $i++)
                    @if($input[$i] != 'id'&& $input[$i] != 'description' && $input[$i] != 'synopsis' && $input[$i] != 'categories_id')
                        <div class="input-group">
                            <label for="{{$input[$i]}}">{{ ucfirst(str_replace('_',' ',$input[$i])) }}</label>
                            <input type="text" name="{{$input[$i]}}" id="{{$input[$i]}}">
                        </div>
                    @elseif($input[$i] == 'categories_id')

                        <label for="categories_id">Categories</label>
                        <select name="categories_id" id="categories_id">
                            @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->title}}</option>
                            @endforeach
                        </select>
                    @elseif($input[$i] == 'description' || $input[$i] == 'synopsis')
                        <div class="input-group">
                            <label for="{{$input[$i]}}">{{ucfirst($input[$i])}}</label>
                            <textarea name="{{$input[$i]}}" id="{{$input[$i]}}"></textarea>
                        </div>
                    @endif
                @endfor
                <button type="submit" name="submit">SOUMETTRE</button>
            </form>

        @elseif($url == '/actors/create')
            LIST ACTORS

        @elseif($url == '/directors/create')
            LIST DIRECTORS

        @elseif($url == '/categories/create')
            LIST CATEGORIES
        @endif

@endsection