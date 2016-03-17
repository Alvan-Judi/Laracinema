
<p class="paginate">
    <?= $paginate->apply($prepare['current'], $prepare['nbPages'])?>
</p>

<?php $incr = 0; ?>
@foreach($prepare['results'] as $result)

    <div class="fiche" <?php if($incr == 3){
        echo 'id="last"';
    } ?>>
        <div class="image">
            <img src="{{$result->image}}" />
        </div>
        <div class="fiche_text">
            <h1> {{$result->title}} </h1>


            <p> {!! substr($result->synopsis, 0, 180) !!} [...] </p>
            <p><a href="{{route('see_movies', ["id" => $result->id])}}" class="seemore">See more ...</a></p>
            <p class="align-right">
                <a href="{{route('edit_movies_id',["id" => $result->id])}}" class="orange">Editer</a>
                <a href="{{route('remove_movies',["id" => $result->id])}}" class="red delete" data-list="{{route('list_movies2')}}">Supprimer</a>
            </p>
        </div>
    </div>

<?php $incr++; ?>
@endforeach

<p class="paginate">
    <?= $paginate->apply($prepare['current'], $prepare['nbPages']);?>
</p>