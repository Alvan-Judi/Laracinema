<?php

/**
 * @author: Alexis contributed by Julien
 */
namespace App\Http\Controllers\Pages;

use App\Categories;
use App\Http\Requests\MoviesRequest;
use App\Lib\Paginate;
use App\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


/**
 * Class MoviesController
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clef controller
 * et doit hérité de la super classe controller
 */
class MoviesController extends PageController {


    /**
     * Methode de controller
     * Montre la fiche d'un film
     */
    public function see($id){
        //Va chercher le film grâce à son id
        $result = Movies::find($id);

        //Retourne la vue ainsi que l'id et le résultat
        //pour pouvoir l'afficher
        return view('pages/see',
            ['id' => $id, 'result' => $result]);
    }

    /**
     * Méthode pour lister les films
     * avec une pagination
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lister(Request $request)
    {
        $movie = new Movies();

        $paginate = new Paginate($movie, 10);

        $prepare = $paginate->prepare();

       // dd(session('movies_id'));

        /*
         * Retourne une vue
         */
        return view('pages/lister',['paginate' => $paginate, 'prepare' => $prepare, 'request' => $request]);

    }

    public function lister2()
    {
        $movie = new Movies();

        $paginate = new Paginate($movie, 4);

        $prepare = $paginate->prepare();
        /*
         * Retourne une vue
         */
        return view('pages/lister2',['paginate' => $paginate, 'prepare' => $prepare]);

    }



    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        $categories = Categories::all();

        return view('pages/create',
            ['categories' => $categories]);
    }

    /**
     * Store a new movies from form at BDD
     * @param MoviesRequest $request
     * @return mixed
     */
    public function store(MoviesRequest $request){

        //Nouvel objet movie
        $movie = new Movies();

        $input = $request->all();

        foreach($input as $key => $value) {
            if($key != "_token" && $key != 'submit'){
                $movie->$key = $value;
            }
        }

        //Sauvegarde base de donnée
        $movie->save();


        $request->session()->flash('alert-success', 'The movie "'.$input["title"].'" has been added !');

        return Redirect::to(route('list_movies')); //redirection by name of route | DONE X
        // creer un message flash | DONE X
    }

    /**
     * FONCTION POUR VOIR LES FILMS EDITABLE
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request){


        $results = Movies::orderBy('id', 'desc')->get();


        return view('pages/edit',
            ['results' => $results]);
    }

    /**
     * FONCTION POUR EDITER UN FILM EN PARTICULIER
     * GENERE LE FORMULAIRE
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editId($id){
        $categories = Categories::all();
        $result = Movies::find($id);

        return view('pages/edit',
            ['result' => $result, 'categories' => $categories]);
    }

    /**
     * FONCTION POUR UPDATER UN FILM
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id){


        $movie = Movies::find($id);

        $input = $request->all();

        foreach($input as $key => $value) {
            if($key != "_token" && $key != 'submit'){
                $movie->$key = $value;
            }
        }


        $movie->save();

        $request->session()->flash('alert-success', 'The movie "'.$input["title"].'" has been updated !');
        return Redirect::to(route('see_movies', [$request->id]));
    }

    /**
     * METHODE POUR SUPPRIMER
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function remove(Request $request, $id){
        $movie = Movies::find($id);
        $title = $movie['title'];
        Movies::destroy($id);

        $request->session()->flash('alert-success', 'The movie "'.$title.'" has been deleted !');
        return Redirect::to(route('list_movies'));
    }

    public function cart(Request $request, $id){
        $movie = Movies::find($id);

        //1. Enregistrer en session l'id

        //On récupère la session 'movies_id' sinon j'initialise un tableau
        $tab = $request->session()->get('movies_id', []);


            if (!in_array($movie->title, $tab)) {
                //On rajoute l'id au tableau
                $tab[$id] = $movie->title;
                //On enregistre le tableau
            }
            else{
                unset($tab[$id]);
            }
        $request->session()->put('movies_id', $tab);

        //2.Rediriger vers la liste des films
        return Redirect::to(route('list_movies'));
    }
}























