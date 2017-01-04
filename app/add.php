<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class add extends Model
{
    protected $table = "adds";

    public static function getAllorg(){

        $data = DB::table('adds')
            ->select('id','name','detail','location','contact','image','category','created_at')
            ->get();

        return $data;
    }
}
