<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('static/welcome');
});

/**
 * Page contact
 * /contact => URI
 */
Route::get('/contact', function(){
    //Retourne la vue contact
    return view('static/contact');
});

/**
 * Page concept
 */
Route::get('/concept', function(){
    //Retourne la vue concept
    return view('static/concept');
});

/**
 *Page about
 */
Route::get('/about', function(){
    //Retourne la vue about
    return view('static/about');
});

/**
 *Page maintenance
 */
Route::get('/maintenance', function(){
    //Retourne la vue about
    return 'Page en maintenance';
});

/**
 *Page movies
 */
Route::get('/movies',[
    'as' => 'movies',
    function(){
        return view('pages/movies');
}]);


/**
 * MIDDLEWARE
 */
Route::group(['middleware' => ['web']], function () {

    /**
     * MOVIES
     */
    Route::group(['prefix' => 'movies'], function () {

        //List film review
        Route::get('/lister', [
            'as' => 'list_movies',
            'uses' => 'Pages\MoviesController@lister'
        ]);

        // Create film review
        Route::get('/create', [
            //Retourne la vue create
            'uses' => 'Pages\MoviesController@create'
        ]);

        Route::post('/store', [
            'as' => 'store',
            'uses' => 'Pages\MoviesController@store'
        ]);


        //Edit film review
        Route::get('/edit', [
            'as' => 'edit_movies',
            'uses' => 'Pages\MoviesController@edit'
        ]);

        Route::post('/edit/update/{id}', [
            'as' => 'update',
            'uses' => 'Pages\MoviesController@update'
        ]);

        //Edit film review
        Route::get('/edit/remove/{id}', [
            'as' => 'remove_movies',
            'uses' => 'Pages\MoviesController@remove'
        ])->where('id', '[0-9]+');;

        //Edit film review
        Route::get('/edit/{id}', [
            'as' => 'edit_movies_id',
            'uses' => 'Pages\MoviesController@editId'
        ]);


        //See film review
        Route::get('/see/{id}', [
            'as' => 'see_movies',
            'uses' => 'Pages\MoviesController@see'
        ])->where('id', '[0-9]+');
    });

    /**
     * ACTORS
     */
    Route::group(['prefix' => 'actors'], function () {

        //List film review
        Route::get('/lister', [
            //Retourne la vue about
            'uses' => 'Pages\ActorsController@lister'
        ]);

        // Create film review
        Route::get('/create', [
            //Retourne la vue create
            'uses' => 'Pages\ActorsController@create'
        ]);

        //Edit film review
        Route::get('/edit', [
            //Retourne la vue edit
            'uses' => 'Pages\ActorsController@edit'
        ]);


        //See film review
        Route::get('/see', [
            //Retourne la vue see
            'uses' => 'Pages\ActorsController@see'
        ]);
    });

    /**
     * CATEGORIES
     */
    Route::group(['prefix' => 'categories'], function () {

        //List film review
        Route::get('/lister', [
            //Retourne la vue about
            'uses' => 'Pages\CategoriesController@lister'
        ]);

        // Create film review
        Route::get('/create', [
            //Retourne la vue create
            'uses' => 'Pages\CategoriesController@create'
        ]);

        //Edit film review
        Route::get('/edit', [
            //Retourne la vue edit
            'uses' => 'Pages\CategoriesController@edit'
        ]);


        //See film review
        Route::get('/see', [
            //Retourne la vue see
            'uses' => 'Pages\CategoriesController@see'
        ]);
    });

    /**
     * DIRECTORS
     */
    Route::group(['prefix' => 'directors'], function () {

        //List film review
        Route::get('/lister', [
            //Retourne la vue about
            'uses' => 'Pages\DirectorsController@lister'
        ]);

        // Create film review
        Route::get('/create', [
            //Retourne la vue create
            'uses' => 'Pages\DirectorsController@create'
        ]);

        //Edit film review
        Route::get('/edit', [
            //Retourne la vue edit
            'uses' => 'Pages\DirectorsController@edit'
        ]);


        //See film review
        Route::get('/see', [
            //Retourne la vue see
            'uses' => 'Pages\DirectorsController@see'
        ]);
    });
});
