<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';

    public function orders()
    {
        return $this->belongsToMany('App\Orders', 'goods_orders')->withPivot('amount');
    }
}
