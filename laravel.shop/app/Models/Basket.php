<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;


    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'product_id',
        'countBasket',
        'component_id',
    ];

        // связь Корзина - пользователь
    public function BasketUser()
    {
        return $this->belongsTo(User::class);
    }
        // связь Корзина - продукты
    public function BasketProduct()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function BasketComponent()
    {
        return $this->belongsTo(Components::class,'component_id');
    }
   

}
