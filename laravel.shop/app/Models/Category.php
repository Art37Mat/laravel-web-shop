<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps=false;
    
    // подключение поля для добавления
    protected $fillable = [
        'nameCategory',        
    ];

    // cвязь  "категории - продукты"
    public function CategoryProduct()
    {
        return $this->hasMany(Product::class,'category_id');
    }
}
