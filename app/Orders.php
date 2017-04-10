<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'customer_name',
        'city_id',
        'phone',
        'comment'
    ];

    public function goods()
    {
        return $this->belongsToMany('App\Goods', 'goods_orders')->withPivot('amount');
    }
}
