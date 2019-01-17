<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
      'is_admin' => 'boolean'
    ];

    public static function findByEmail($email)
    {
      return User::where(compact('email'))->first();
    }

    public function isAdmin()
    {
      return $this->email === "eserna27@gmail.com";
    }

    public function profession()
    {
      return $this->belongsTo(Profession::class);
    }
}