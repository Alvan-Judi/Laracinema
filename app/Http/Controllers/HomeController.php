<?php
/**
 * Created by PhpStorm.
 * User: wal13
 * Date: 16/03/16
 * Time: 09:17
 */

namespace App\Http\Controllers;


use App\Actor;
use App\Categories;
use App\Director;
use App\Movies;

class HomeController extends Controller
{

    public function homepage(){

        //MOVIES
        $movies = new Movies();
        $nbMovies = $movies->moviesNb();
        $nbMoviesVisible = $movies->moviesNbVisible();

        //ACTORS
        $actors = new Actor();
        $nbActors = $actors->actorsNb();

        //DIRECTORS
        $directors = new Director();
        $nbDirectors = $directors->directorsNb();

        //CATEGORIES
        $categories = new Categories();
        $nbCategories = $categories->categoriesNb();

        return view('static/homepage', [
            'nbMovies' => $nbMovies,
            'nbActors' => $nbActors,
            'nbDirectors' => $nbDirectors,
            'nbCategories' => $nbCategories,
            'nbMoviesVisible' => $nbMoviesVisible
        ]);
    }

}