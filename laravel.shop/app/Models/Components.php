<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'img',
        'accessories_id',
        'count',        
    ];
    
    public function ComponentsProduct()
    {
        return $this->hasMany(Product::class,'components_id');
    }

    public function ComponentsBasket()
    {
        return $this->hasMany(Product::class,'category_id');
    }

}
