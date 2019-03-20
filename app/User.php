<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * datauser mempunyai user_id
     * jadi menggunakan relasi hasOne
     * hubungannya one to one.
     */
    public function datauser()
    {
        return $this->hasOne('App\Datausers');
    }

    /**
     * user mempunyai role_id
     * hubungan dengan role jika mempunyai 1 role hanya one to one.
     * user terhadap role
     * mendapatkan model role dari voyager (karena tidak override model role).
     */
    public function role()
    {
        return $this->belongsTo('\TCG\Voyager\Models\Role');
    }
}
