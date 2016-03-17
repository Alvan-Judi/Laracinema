<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class movies
 * @package App
 * Modélise toutes mes requètes concernant la table movies
 */
class Movies extends Model
{
    protected $table = 'movies';

    public function moviesNb(){

        $moviesNb = DB::table('movies')
            ->count();

        return $moviesNb;
    }

    public function moviesNbVisible(){

        $nbMoviesVisible = DB::table('movies')
            ->where('visible', 1)
            ->count();

        return $nbMoviesVisible;
    }

    public function avgNotePress(){

        $avgNotePress = DB::table('movies')
            ->avg('note_presse');

        return number_format($avgNotePress, 2);

    }



}