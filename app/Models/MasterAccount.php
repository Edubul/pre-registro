<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class MasterAccount extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $table = "master_account";
    protected $guard = "master";
    public $timestamps = false;

    public function gameAccounts()
    {
        return $this->hasMany(GameAccount::class);
    }


    protected $fillable = [
        'username',
        'pass',
        'email',
        'last_ip',
        'pais',
        'geo_localization',
        'question',
        'question_response',
        'isBan',
    ];

   /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'pass',
        'email',
        'question',
        'question_response',
    ];

}
