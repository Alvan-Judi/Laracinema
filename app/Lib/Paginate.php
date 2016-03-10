<?php

namespace App\Lib;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

/**
 * Class Paginate
 * Cette classe permet d'effectuer une pagination sur n'importe quel type de base de données
 * @package App\Lib
 */
class Paginate
{

    protected $dataBase;
    protected $perPage;

    /**
     * Paginate constructor.
     * @param $dataBase
     * @param $perPage
     */
    public function __construct(Model $dataBase, $perPage)
    {
        $this->dataBase = $dataBase;
        $this->perPage = $perPage;
    }


    /**
     * @param Model $dataBase
     * @param $perPage
     * @return array
     */
    public function prepare(){

        //Définition page courante
        if(!Input::has('page')) {
            $current = 1;
        }
        else {
            $current = Input::get('page');
        }

        //nb de pages
        $nbPages = ceil($this->dataBase->count()/$this->perPage);

        //Position de départ en fonction de la page
        if(Input::has('page') && Input::get('page') > $nbPages){
            $pos = ($nbPages - 1) * $this->perPage;
        }
        else if(Input::has('page') && Input::get('page') < 1) {
            $pos = 1;
        }
        else {
            $pos = ($current - 1) * $this->perPage;
        }


        //résultat
        $results = $this->dataBase->orderBy('id', 'desc')->skip($pos)->take($this->perPage)->get();

        return ['results' => $results, 'nbPages' => $nbPages, 'current' => $current];
    }

    /**
     * @param $current
     * @param $nbPages
     */
    public function apply($current, $nbPages){

        $html = "";

        if($current <= 1) {
           $html .= "<span class='active' >&lsaquo;</span >";
        }
        else {
          $html .=  "<a href = '?page=". ($current - 1) ."' >&lsaquo;</a >";
        }

        for($i = 1; $i <=$nbPages; $i++) {
            if ($i == $current) {
               $html .= "<span class='active' >{$i}</span >";
            }
            else{
               $html .= "<a href = '?page={$i}' >{$i}</a >";

            }
        }

        if($current >= $nbPages) {
            $html .= "<span class='active' >&rsaquo;</span >";
        }
        else {
            $html .=  "<a href = '?page=". ($current + 1) ."' >&rsaquo;</a >";
        }

        return $html;

    }

}