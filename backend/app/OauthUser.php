<?php

namespace onestopcore;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class OauthUser extends Authenticatable {
    use HasApiTokens, Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'oauth_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'email', 'token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function user()
    {
        return $this->belongsTo('onestopcore\User');
    }
}
