<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'img',        
    ];

    // // cвязь  "категории - продукты"
    // public function AccessoriesProduct()
    // {
    //     return $this->hasMany(Product::class,'components_id');
    // }
}
