<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'moderation',
        'user_id',

    ];


    public function ReviewUser()
    {
        return $this->belongsTo(User::class);
    }

    
}
