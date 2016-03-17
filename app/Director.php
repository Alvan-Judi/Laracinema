<?php
/**
 * Created by PhpStorm.
 * User: wal13
 * Date: 16/03/16
 * Time: 10:55
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Director extends Model
{
    protected $table = 'directors';

    public function directorsNb(){

        $directorsNb = DB::table('directors')
            ->count();

        return $directorsNb;
    }

}