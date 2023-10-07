<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     // подключение полей для добавления
     protected $fillable = [
        'nameProduct',
        'price',
        'description',
        'country_id',        
        'releaseYear',
        'model',
        'category_id',
        'image',
        'count'
    ];

     // cвязь  "продукты - страны"
     public function ProductCountry()
     {
         return $this->belongsTo(Country::class,'country_id');
     }
 
       // cвязь  "продукты - категории"
     public function ProductCategory()
     {
         return $this->belongsTo(Category::class,'category_id');
     }


        // cвязь  "компоненты- продукты"
    public function ProductComponents()
    {
        return $this->belongsTo(Components::class,'ram_id','gpu_id','cpu_id','powun_id','cooling_id','mb_id','ssd_id','pccase_id');
    }

}
