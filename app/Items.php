<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Items extends Model
{
    protected $fillable=['title','descriptions','preview','price'];

    public static function parameters($id)
    {
        return DB::table('items')->where('items.id','=',$id)
            ->join('parameters_values','parameters_values.items_id','=','items.id')
            ->join('parameters','parameters_values.parameters_id','=','parameters.id')
            ->select('parameters.title','parameters_values.value','parameters.unit','items.preview')->get();
    }
}
