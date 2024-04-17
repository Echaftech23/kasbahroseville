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
        'size',
        'room_statut',
        'description'
    ];

    public const STATUT_RADIO = [
        'dirty' => 'dirty',
        'clean' => 'clean',
        'cleaning' => 'cleaning',
    ];

    public const ROOM_STATUT_RADIO = [
        'Booked' => 'Booked',
        'Available' => 'Available',
        'Out of service' => 'Out of service',
    ];

    public const PRIORITY_RADIO = [
        'low' => 'Low',
        'high' => 'High',
    ];

    public function getStatut()
    {
        return self::STATUT_RADIO[$this->statut];
    }

    public function getRoomStatut()
    {
        return self::ROOM_STATUT_RADIO[$this->statut];
    }

    public function isAvailable($totalChildren, $totalAdults, $checkIn, $checkOut)
    {
        return $this->capacity >= $totalChildren + $totalAdults &&
            !$this->reservations()->where(function ($query) use ($checkIn, $checkOut) {
                $query->whereDate('checkIn', '<', $checkOut)
                    ->whereDate('checkOut', '>', $checkIn);
            })->exists();
    }

    public function getTotalAmountAttribute()
    {
        return $this->reservations->sum('payment.amountPaid');
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
        return $this->hasMany(Reservation::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }
}
