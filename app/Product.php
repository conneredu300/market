<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed name
 * @property mixed quantity
 * @property mixed image
 * @property mixed description
 * @property mixed price
 * @property mixed category_id
 */
class Product extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function customers(){
        return $this->belongsToMany(Customer::class,
            'orders',
            'product_id');
    }

    public $rules = [
        'name' => 'required',
        'quantity' => 'required',
        'image' => 'required',
        'description' => 'required',
        'price' => 'required',
        'categories' => 'required'
    ];

    public $messages = [
        'name.required' => 'Campo obrigatório!',
        'quantity.required' => 'Campo obrigatório!',
        'image.required' => 'Campo obrigatório!',
        'description.required' => 'Campo obrigatório!',
        'price.required' => 'Campo obrigatório!',
        'categories.required' => 'Campo obrigatório!'
    ];
}
