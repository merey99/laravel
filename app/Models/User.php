<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    const ROLE_ADMIN=0;
    const ROLE_USER=1;
    const ROLE_MANAGER=2;


    public static function getRole(){
        return[
          self::ROLE_ADMIN=>'Administrator',
          self::ROLE_USER=>'User',
          self::ROLE_MANAGER=>'Manager',
        ];
}
    protected $fillable = [
        'name',
        'lastname',
        'avatar',
        'email',
        'password',
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
    ];


    protected $guarded=[];
    public function users(){
        return $this->belongsTo(Role::class);
    }

}
