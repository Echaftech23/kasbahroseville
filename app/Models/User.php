<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'statut',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public const STATUT_RADIO = [
        'Active' => 'Active',
        'Banned' => 'Banned',
        'Suspended' => 'Suspended',
        'Inactive' => 'Inactive',
    ];

    public function getStatut()
    {
        return self::STATUT_RADIO[$this->statut];
    }

    public function hasRole($roleName)
    {
        return $this->roles->first()->name === $roleName;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
