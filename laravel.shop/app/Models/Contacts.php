<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    // подключение полей для добавления
    protected $fillable = [
        'address',
        'email',
        'phone',
    ];

}
