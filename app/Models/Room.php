<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Room extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'price',
        'statut',
        'priority',
        'capacity',
        'image',
        'type_id',
        'size'
    ];

    public const STATUT_RADIO = [
        'dirty' => 'dirty',
        'clean' => 'clean',
        'cleaning' => 'cleaning',
    ];

    public const PRIORITY_RADIO = [
        'low' => 'Low',
        'high' => 'High',
    ];
    
    public function getStatut()
    {
        return self::STATUT_RADIO[$this->statut];
    }

    public function getPriority()
    {
        return self::PRIORITY_RADIO[$this->priority];
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }
}
