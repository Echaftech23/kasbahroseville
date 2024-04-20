<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amountPaid',
        'totalAmount',
        'reservation_id',
        'statut'
    ];

    public const STATUT_RADIO = [
        'Pending' => 'Pending',
        'Completed' => 'Completed',
    ];

    public function getStatut()
    {
        return self::STATUT_RADIO[$this->statut];
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    public function payment_methodes()
    {
        return $this->hasMany(PaymentMethode::class);
    }
}
