<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed name
 */
class Category extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }
}
