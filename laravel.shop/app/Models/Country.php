<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    
    public $timestamps=false;

     // подключение поля для добавления
     protected $fillable = [
        'nameCountry',        
    ];

     // cвязь  "страны - продукты"
    public function CountryProduct()
    {
        return $this->hasMany(Product::class,'country_id');
    }
    
}
