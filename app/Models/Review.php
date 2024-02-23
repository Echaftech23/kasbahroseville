<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'date',
        'user_id',
    ];

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
