<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed name
 * @property mixed email
 */
class Customer extends Model
{
    use SoftDeletes;

    public function products(){
        return $this->belongsToMany(Product::class,
            'orders',
            'customer_id');
    }
}
