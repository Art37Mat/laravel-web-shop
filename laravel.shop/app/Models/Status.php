<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nameStatus',             
    ]; 

       // cвязь  "статус - заказ"
   public function StatusOrder()
   {
       return $this->hasMany(Order::class,'status_id');
   }
}
