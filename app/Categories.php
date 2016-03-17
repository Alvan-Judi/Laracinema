<?php
/**
 * Created by PhpStorm.
 * User: wal13
 * Date: 09/03/16
 * Time: 15:02
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    protected $table = 'categories';

    public function categoriesNb(){

        $categoriesNb = DB::table('categories')
            ->count();

        return $categoriesNb;
    }
}