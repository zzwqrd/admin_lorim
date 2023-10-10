<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function userNotifications()
    {
        return $this->hasMany(Notification::class, 'user_id', 'id');
    }

    // public function orders()
    // {
    //     return $this->hasMany(Order::class, 'user_id', 'id')->orderBy('id', 'desc');
    // }

    public function section()
    {
        return $this->belongsTo(Sections::class);
    }


    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image',
        'is_verified',
        'reset_password_code',
        'code_expiration_date',
        'fcm_token',
        'language',
        'status',
        'remember_token',
    ];


    protected $hidden = [
        'password',
        'remember_token',
        'updated_at',
        'reset_password_code',
        'code_expiration'
    ];

    public static function randToken()
    {
        return rand(10000, 99999);
    }


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims()
    {
        return [];
    }
}
