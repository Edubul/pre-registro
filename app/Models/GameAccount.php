<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameAccount extends Model
{
    use HasFactory;

    protected $table = "login";
    protected $primary_key = 'account_id';
    public $timestamps = false;


    public function user()
    {
        return $this->belongsTo(MasterAccount::class);
    }

    protected $fillable = [
        'userid',
        'user_pass',
        'sex',
        'email',
        'group_id',
        'state',
        'unban_time',
        'expiration_time',
        'logincount',
        'lastlogin',
        'last_ip',
        'birthdate',
        'character_slots',
        'pincode',
        'pincode_change',
        'vip_time',
        'old_group',
        'web_auth_token',
        'web_auth_token_enabled',
        'last_unique_id',
        'blocked_unique_id',
        'pais',
        'geo_localization',
        'question',
        'question_response',
        'master_acc_id',
    ];

       /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'user_pass',
        'email',
        'question_response',
        'question',
    ];
}
