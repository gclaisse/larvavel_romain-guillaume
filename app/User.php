<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cmgmyr\Messenger\Traits\Messagable;





class User extends Authenticatable
{



    use Messagable;

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

    public function articles() {
        return $this->hasMany('App\Article');
    }
    public function coms() {
        return $this->hasMany('App\Com');
    }

    protected static function  boot()
    {
        parent::boot();
        self::deleting(function (User $user){

            foreach ($user->articles as $articles)
            {
                $articles->delete();
            }

            foreach ($user->coms as $coms)
            {
                $coms->delete();
            }
        });
    }
}
