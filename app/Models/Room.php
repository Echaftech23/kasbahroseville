<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'statut',
        'priority',
        'capacity',
        'image',
        'type_id',
    ];

    // Define the relationship with Type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function reservations()
    {
        return $this->belongsTo(Reservation::class);
    }

    public function facilities()
    {
        return $this->belongsTo(Facility::class);
    }
}
