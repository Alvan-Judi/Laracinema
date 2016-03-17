<?php
/**
 * Created by PhpStorm.
 * User: wal13
 * Date: 16/03/16
 * Time: 10:22
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Actor extends Model
{
    protected $table = 'actors';

    public function actorsNb(){

        $actorsNb = DB::table('actors')
            ->count();

        return $actorsNb;
    }

}