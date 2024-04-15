<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'checkIn',
        'checkOut',
        'total_adults',
        'total_children',
        'statut',
        'user_id',
        'room_id',
        'ref'
    ];

    public const STATUT_RADIO = [
        'Pending' => 'Pending',
        'Confirmed' => 'Confirmed',
        'Rejected' => 'Rejected',
        'Checked In' => 'Checked In',
        'Due Out' => 'Due Out',
        'Due In' => 'Due In',
        'Checked Out' => 'Checked Out',
    ];

    public function getStatut()
    {
        return self::STATUT_RADIO[$this->statut];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

}
